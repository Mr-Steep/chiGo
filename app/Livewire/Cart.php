<?php

namespace App\Livewire;

use App\Services\AppService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['refreshCard' => 'refresh'];

    public $cartProducts = [];

    public $discount;
    public $totalCost;
    public $totalQuantity;
    public $shippings;
    public $costProducts;
    public $activeShipping;

    public function mount(){

        $cart                  = AppService::getCurrentCart();
        $this->cartProducts    = $cart->cartItems;
        $this->activeShipping  = $cart->shipping_id;
        $this->shippings       = AppService::getShippingOptions();
        $this->discount        = 0;
        $this->costProducts    = AppService::getCurrentCartCostProducts();
        $this->totalQuantity   = AppService::quantityProducts();

        $costShipping          = $cart->shipping->shipping_cost;
        $this->totalCost       = $costShipping + $this->costProducts - $this->discount;
    }

    public function refresh()
    {
        $this->mount();
    }

    public function removeFromCart($productId)
    {
       AppService::removeProductFromCart($productId);
       AppService::refresh($this);
    }

    public function incrementQuantity($productId)
    {
        AppService::changeQuantityProduct($productId,1);
        AppService::refresh($this);
    }

    public function decrementQuantity($productId)
    {
        AppService::changeQuantityProduct($productId,-1);
        AppService::refresh($this);
    }

    public function setShipping($shippingId){
        $cart =  AppService::getCurrentCart();
        $cart->shipping_id = $shippingId;
        $cart->save();
        $this->refresh();

    }


    public function render()
    {
        return view("livewire.cart");
    }
}

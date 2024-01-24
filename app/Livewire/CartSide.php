<?php

namespace App\Livewire;

use App\Services\AppService;
use Livewire\Component;

class CartSide extends Component
{
    protected $listeners = ['refreshCartSide' => 'refresh'];

    public $cartProducts = [];
    public $costProducts;
    public $costDelivery;

    public $discount;
    public $totalCost;
    public $totalQuantity;
    public $totalQuantityProducts;


    public function mount($side = false){
        $this->cartProducts = AppService::getCurrentCartItems();

        $this->costProducts  = 0;
        $this->costDelivery  = 20;
        $this->discount      = 0;
        $this->totalQuantity = 0;

        foreach ($this->cartProducts as $cartProduct) {
            $cartProduct->cost    = $cartProduct->quantity * $cartProduct->product->price;
            $this->costProducts  += $cartProduct->cost;
            $this->totalQuantity += $cartProduct->quantity;
        }
        $this->totalQuantityProducts = $this->costDelivery + $this->costProducts;
        $this->totalCost             = $this->costProducts - $this->discount;
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


    public function render()
    {
        return view("livewire.cart-side");
    }
}

<?php

namespace App\Livewire;

use App\Services\AppService;
use Livewire\Component;

class CartSide extends Component
{
    protected $listeners = ['refreshCartSide' => 'refresh'];

    public $cartProducts;
    public $costProducts;


    public function mount($side = false){
        $this->cartProducts = AppService::getCurrentCartItems();
        $this->costProducts  = AppService::getCurrentCartCostProducts();
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

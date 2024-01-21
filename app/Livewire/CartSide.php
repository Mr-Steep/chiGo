<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartSide extends Component
{
    protected $listeners = ['quantityUpdatedСard' => 'updateQuantityСard'];

    public $cartProducts = [];

    public $costProducts;
    public $costDelivery;

    public $discount;
    public $totalCost;
    public $totalQuantity;

    public function mount(){
        $this->sessionValue = session('mySessionKey', 0);

        $this->cartProducts = Auth::check() ? Auth::user()->cart : [];

        $this->costProducts  = 0;
        $this->costDelivery  = 0;
        $this->discount      = 0;
        $this->totalQuantity = 0;

        foreach ($this->cartProducts as $cartProduct) {
            $cartProduct->cost    = $cartProduct->quantity * $cartProduct->product->price;
            $this->costProducts  += $cartProduct->cost;
            $this->totalQuantity += $cartProduct->quantity;
        }
        $this->totalCost = $this->costDelivery + $this->costProducts - $this->discount;
    }

    public function updateQuantityСard()
    {
        $this->mount();
    }

    public function removeFromCart($productId)
    {
        // Logic to remove item from cart
        $this->cartProducts = $this->cartProducts->map(function ($item) use ($productId) {
            if ($item->id == $productId) {
                $item->delete();
            }
            return $item;
        });
        $this->mount();
        $this->dispatch('quantityUpdatedPage');
    }

    public function incrementQuantity($productId)
    {
        // Logic to remove item from cart
        $this->cartProducts = $this->cartProducts->map(function ($item) use ($productId) {
            if ($item->id == $productId) {
                $item->updateQuantity(1);
            }
            return $item;
        });
        $this->mount();
        $this->dispatch('quantityUpdatedPage');

    }

    public function decrementQuantity($productId)
    {
        // Logic to remove item from cart
        $this->cartProducts = $this->cartProducts->map(function ($item) use ($productId) {
            if ($item->id == $productId) {
                $item->updateQuantity(-1);
                if(!$item->quantity){
                    $this->removeFromCart($productId);
                }
            }
            return $item;
        });

        $this->mount();
        $this->dispatch('quantityUpdatedPage');

    }


    public function render()
    {
        return view('livewire.cart-side');
    }
}

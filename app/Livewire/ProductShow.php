<?php

namespace App\Livewire;


use App\Models\Product;
use App\Services\AppService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductShow extends Component
{
    protected $listeners = ['refreshProductShow' => 'refresh'];

    public $product;
    public $breadcrumbs;

    public $quantity;

    public function mount(Product $product){
        $this->product     = $product;
        $this->breadcrumbs = $product->category->getAllParents();

        $cartItem = AppService::getProductFromCard($this->product->id);
        $this->quantity =  $cartItem->quantity ?? 0;
    }
    public function refresh()
    {
        $this->mount($this->product);
    }


    public function submit()
    {
        $validatedData = $this->validate([
            'quantity' => 'required',
        ]);

        $quantity = $validatedData['quantity'];
        $this->changeQuantity($quantity);
    }

    public function decrementQuantity()
    {
        $this->changeQuantity( -1);
    }
    public function incrementQuantity()
    {
       $this->changeQuantity();
    }

    private function changeQuantity($amount = 1){

        AppService::changeQuantityProduct($this->product->id, $amount);
        AppService::refresh($this);
    }

    public function render()
    {
        $product     = $this->product;
        $breadcrumbs = $this->breadcrumbs;
        $quantity    = $this->quantity;
        return view('livewire.product-show', compact('product', 'breadcrumbs', 'quantity'));
    }
}

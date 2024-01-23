<?php

namespace App\Livewire;


use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Add extends Component
{
    protected $listeners = ['quantityUpdatedPage' => 'updateQuantityPage'];

    public $product;
    public $breadcrumbs;

    public $quantity;

    public function mount(Product $product){
        $this->product     = $product;
        $this->breadcrumbs = $product->category->getAllParents();
        if(Auth::check()){
            $user = Auth::user();
            $cartItem = $user->cart()->where('product_id', $this->product->id)->first();
            $this->quantity = $cartItem->quantity??0;
        }else{
            $this->quantity = 0;
        }
    }
    public function updateQuantityPage()
    {
        $this->mount($this->product);
    }



    public function submit()
    {
        $validatedData = $this->validate([
            'quantity' => 'required',
        ]);
        $validatedData['product_id'] =$this->product->id;

        if (Auth::check()) {
            $user = Auth::user();

            // Проверьте, есть ли товар уже в корзине пользователя
            $cartItem = $user->cart()->where('product_id', $this->product->id)->first();
            if ($cartItem) {
                // Если товар уже есть в корзине, обновите количество
                $cartItem->update($validatedData);
            } else {
                // Если товара еще нет в корзине, создайте новую запись
                $user->cart()->create($validatedData);
            }

        }
        else{
            return redirect()->route('login')->with('notice', 'Для добавления заказа нужно авторизоваться');
        }
    }

    public function decrementQuantity()
    {
        $this->changeQuantity( -1);
    }
    public function incrementQuantity()
    {
       $this->changeQuantity();
    }

    public function removeFromCart()
    {
        // Logic to remove item from cart
        Auth::user()->cart->map(function ($item) {
            if ($item->product_id == $this->product->id) {
                $item->delete();
            }
            return $item;
        });
    }

    private function changeQuantity($amount = 1){
        if(!Auth::check()){
            return redirect()->route('login')->with('notice', 'Для добавления заказа нужно авторизоваться');
        }
        $user = Auth::user();
        $cartItem = $user->cart()->where('product_id', $this->product->id)->first();

        if($cartItem){
            $cartItem->updateQuantity($amount);
            $this->quantity = $cartItem->quantity;
        } else {
            $user->cart()->create([
                'product_id' => $this->product->id,
            ]);
            $this->quantity = 1;
        }

        if(!$this->quantity){
            $this->removeFromCart();
        }

        $this->dispatch('quantityUpdatedСard');
        $this->mount($this->product);
        //reload navigation
        $this->dispatch('reloadMount');
    }

    public function render()
    {
        $product     = $this->product;
        $breadcrumbs = $this->breadcrumbs;
        $quantity    = $this->quantity;
        return view('livewire.add', compact('product', 'breadcrumbs', 'quantity'));
    }
}

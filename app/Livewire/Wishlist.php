<?php

namespace App\Livewire;

use App\Services\AppService;
use Livewire\Component;

class Wishlist extends Component
{
    public  $wishList;

    protected $listeners = ['refreshWishlist' => 'refresh'];


    public function wishlistRemove($id)
    {
        \App\Models\Wishlist::remove($id);
        AppService::refresh($this);
    }

    public function addToCart($productId){
        $wishlistItem = \App\Models\Wishlist::getItemWishList();
        AppService::changeQuantityProduct($productId, 1);
        $productInWishList = $wishlistItem->where('product_id', $productId)->first();
        $this->wishlistRemove($productInWishList->id);
        AppService::refresh($this);
    }

    public function refresh()
    {
        $this->render();
    }
    public function render()
    {
        $this->wishList = AppService::getWishList();
        return view('livewire.wishlist');
    }
}

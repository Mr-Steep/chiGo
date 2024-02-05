<?php

namespace App\Livewire;

use App\Services\AppService;
use Livewire\Component;

class Top100 extends Component
{

    public $products;
    protected $listeners = ['refreshTop100' => 'refresh'];


    public function mount()
    {
        $this->products   = \App\Models\Product::orderBy('id')->limit(30)->get();
    }


    public function refresh()
    {
        $this->mount();
    }

    public function toggleWishlist($productId)
    {
        AppService::toggleWishList($productId);
        AppService::refresh($this);
    }

    public function render()
    {
        return view('livewire.top100');
    }
}

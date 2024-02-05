<?php

namespace App\Livewire;

use App\Models\Category;
use App\Services\AppService;
use Livewire\Component;

class Navigation extends Component
{

    protected $listeners = ['refreshNavigation' => 'refresh'];

    public int $quantityProducts;
    public int $quantityWishList;
    public $categoriesTree;

    public function mount()
    {
        $this->quantityProducts = AppService::quantityProducts();
        $this->quantityWishList = AppService::quantityWishList();

        $categories    = Category::all();
        $this->categoriesTree = AppService::buildCategoryTree($categories);
    }

    public function refresh()
    {
        $this->mount();
    }



    public function render()
    {
        return view('livewire.navigation');
    }


}

<?php

namespace App\Livewire;

use App\Models\Category;
use App\Services\AppService;
use Livewire\Component;

class Navigation extends Component
{

    protected $listeners = ['reloadMount' => 'reloadMount'];

    public int $quantityProducts;
    public $categoriesTree;

    public function mount()
    {
        $appService = app(AppService::class);
        $this->quantityProducts = $appService->quantityProducts();

        $categories    = Category::all();
        $this->categoriesTree = $appService->buildCategoryTree($categories);
    }

    public function reloadMount()
    {
        $this->mount();
    }



    public function render()
    {
        return view('livewire.navigation');
    }


}

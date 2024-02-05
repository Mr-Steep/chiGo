<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Services\AppService;
use Livewire\Component;

class Navigation extends Component
{

    protected $listeners = ['refreshNavigation' => 'refresh'];

    public int $quantityProducts;
    public int $quantityWishList;
    public $categoriesTree;
    public $hiddenTopSearch = true;
    public $topSearch = '';

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

    public function toggleTopSearch()
    {
        if(!$this->topSearch){
            $this->topSearch = '';
        }
        $this->hiddenTopSearch = !$this->hiddenTopSearch;
        $this->render();
    }
    public function render()
    {
        $query = Product::query();

        if ($this->topSearch) {
            $query->where('name', 'like', '%' . $this->topSearch . '%');
        }
        $topSearchProduct =  $query->limit(6)->get();
        return view('livewire.navigation',compact('topSearchProduct'));
    }
}

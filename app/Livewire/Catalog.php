<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;
    protected $listeners = ['updateRangePrice' => 'rangePrice'];

    public $search;
    public $sortField;
    public $minPrice ;
    public $maxPrice;
    public $sortDirection = 'asc';
    private int|float $minSlider = 0;
    private int|float $maxSlider = 100;

    public function mount(){
        $query         = Product::query();
        $this->minPrice = $query->min('price');
        $this->maxPrice = $query->max('price');
    }

    function rangePrice($minPrice ,$maxPrice){

        $this->minPrice  = $minPrice;
        $this->maxPrice  = $maxPrice;
        $this->minSlider = $this->calculatePercentage($minPrice);
        $this->maxSlider = $this->calculatePercentage($maxPrice);
        $this->render();

    }

    public function render()
    {
        $categories    = Category::all();
        $categoryTree  = $this->buildCategoryTree($categories);
        $query         = Product::query();

        // Apply filters
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Apply sorting
        if ($this->sortField) {
            $query->orderBy($this->sortField, $this->sortDirection);
        }

        if($this->minPrice){
            $query->where('price', '>=', $this->minPrice);

        }

        if($this->maxPrice){
            $query->where('price', '<=', $this->maxPrice);
        }

        $products = $query->paginate(12);

        $minSlider = $this->minSlider;
        $maxSlider = $this->maxSlider;
        return view('livewire.catalog', compact('products', 'categoryTree', 'minSlider', 'maxSlider'));
    }

    private function buildCategoryTree($categories, $parentId = null) {
        $tree = [];
        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildCategoryTree($categories, $category->id);
                if ($children) {
                    $category->children = $children;
                }
                $tree[] = $category;
            }
        }
        return $tree;
    }

    function calculatePercentage($number) {
        $query         = Product::query();

        $minValue = $query->min('price');
        $maxValue = $query->max('price');
        if ($minValue <= $number && $number <= $maxValue) {
            $res =  round((($number - $minValue) / ($maxValue - $minValue)) * 100, 10);
        } else {
            $res =  0;
        }
        return $res;
    }

}

<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Services\AppService;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;
    protected $listeners = ['updateRangePrice' => 'setRangePrice'];

    public $search = '';
    public $sortBy;
    public $minPrice ;
    public $categoryId;
    public $maxPrice;
    public $sortDirection = 'asc';
    private int|float $minSlider = 0;
    private int|float $maxSlider = 100;

    public function mount(){
        $query         = Product::query();
        $this->minPrice = $query->min('price');
        $this->maxPrice = $query->max('price');
    }

    function setRangePrice($minPrice ,$maxPrice){

        $this->minPrice  = $minPrice;
        $this->maxPrice  = $maxPrice;
        $this->minSlider = $this->calculatePercentage($minPrice);
        $this->maxSlider = $this->calculatePercentage($maxPrice);
        $this->render();

    }

    public function setCategory($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->render();
    }

    public function setSort($sort)
    {
        $this->sortBy = $sort;
        $this->render();
    }

    public function toggleWishlist($productId)
    {
        AppService::toggleWishList($productId);
        AppService::refresh($this);
    }
    public function render()
    {
        $appService = app(AppService::class);

        $categories    = Category::all();
        $categoryTree  = $appService->buildCategoryTree($categories);
        $query         = Product::query();

        // Apply filters
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->categoryId) {
            $descendantIds = Category::descendantsAndSelf($this->categoryId)->pluck('id')->toArray();
            $query->whereHas('category', function ($query) use ($descendantIds) {
                $query->whereIn('id', $descendantIds);
            });

        }

        if ($this->sortBy) {
            if ($this->sortBy == 'popularity') {
                $query->orderBy('popularity', $this->sortDirection);
            } elseif ($this->sortBy == 'average_rating') {
                $query->orderBy('average_rating', $this->sortDirection);
            } elseif ($this->sortBy == 'newness') {
                $query->orderBy('created_at', $this->sortDirection);
            } elseif ($this->sortBy == 'price_low_high') {
                $query->orderBy('price', 'asc');
            } elseif ($this->sortBy == 'price_high_low') {
                $query->orderBy('price', 'desc');
            }
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

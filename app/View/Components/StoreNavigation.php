<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\View\View;

class StoreNavigation extends Component
{
    public function __construct()
    {
        $this->categories = Category::all();
    }


    public function render(): View
    {
        $categories = $this->categories;
        return view('components.store-navigation', compact('categories'));
    }
}

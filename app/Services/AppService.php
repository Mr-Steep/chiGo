<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AppService
{
    public function quantityProducts(): int
    {
        $q = 0;
        if (Auth::check()) {
            $q = Auth::user()->cart->sum('quantity');
        }
        return $q;
    }
    public function buildCategoryTree($categories, $parentId = null) {
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

}

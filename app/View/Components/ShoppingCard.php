<?php


namespace App\View\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class ShoppingCard extends Component
{
    public function __construct()
    {
        $this->products = Auth::check() ? Auth::user()->cart : [];
    }


    public function render(): View
    {
        $cartProducts = $this->products;
        return view('components.shopping-card', compact('cartProducts'));
    }
}

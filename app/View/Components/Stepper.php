<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\View\Component;
use Illuminate\View\View;

class Stepper extends Component
{
    public function __construct()
    {
        $this->categories = Category::all();
    }


    public function render(): View
    {
        $steps = OrderStatus::all();
        $order = Order::getCurrentOrder();
        return view('components.stepper', compact('order','steps'));
    }
}

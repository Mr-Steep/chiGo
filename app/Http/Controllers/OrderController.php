<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function submitOrder(Request $request)
    {
        $products = Auth::user()->cart;
        $costProducts = 0;
        $costDelivery = 14;
        $discount = 0;

        foreach ($products as $cartProduct) {
            $cartProduct->cost = $cartProduct->quantity * $cartProduct->product->price;
            $costProducts += $cartProduct->cost;
        }
        $totalCost = $costDelivery + $costProducts - $discount;
        return view('order.index', compact('products', 'totalCost', 'costProducts', 'costDelivery', 'discount'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    function index(){

        $order = Order::getCurrentOrder();
        return view('order.index', compact('order'));
    }

    function create(Request $request)
    {
        $cart = AppService::getCurrentCart();
        $cartProducts = $cart->cartItems;

        $newOrder = new Order();
        $newOrder->user_id =   Auth::user()->getAuthIdentifier();
        $newOrder->shipping_id = $cart->shipping_id;
        $newOrder->total_amount = AppService::getTotalCost($cart);
        $newOrder->save();

        foreach ($cartProducts as $cartProduct){
            $newOrder->addItemToOrder(
                $cartProduct->product_id,
                $cartProduct->quantity,
                $cartProduct->product->price,
            );
        }

        AppService::emptyCart();
        return redirect()->route('order.index');
    }

    function remove(Order $order){
        $order = Order::getCurrentOrder();
        $cart = AppService::getCurrentCart();

        $order->orderItems->map(function ($item) use($cart){
            $cart->addItemToCart($item->product_id, $item->quantity);
        });
        $order->delete();
        return redirect()->route('cart.index');

    }


}

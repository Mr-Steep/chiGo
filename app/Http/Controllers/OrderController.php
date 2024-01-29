<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Notifications\OrderConfirmation;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    function index(Order $order = null) {
        $order = $order ?? Order::getCurrentOrder();
        return view('order.index', compact('order'));
    }

    function create(Request $request)
    {
        $cart     = AppService::getCurrentCart();
        if(!$cart->shipping_id || !$cart->address_id){
            return redirect()->back()->with('no shipping_id or address_id');
        }

        $newOrder = Order::createNewOrder($cart->shipping_id, $cart->address_id, AppService::getTotalCost($cart));

        $cart->cartItems->map(function ($cartProduct) use($newOrder){
            $newOrder->addItemToOrder(
                $cartProduct->product_id,
                $cartProduct->quantity,
                $cartProduct->product->price,
            );
        });
        Auth::user()->notify(new OrderConfirmation($newOrder));
        AppService::emptyCart();
        return redirect()->route('order.index', $newOrder);
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

    function confirmOrder(Order $order)
    {

        $order->status_id =  2;
        $order->update();

        return response()->json(['message' => 'ok']);

    }


}

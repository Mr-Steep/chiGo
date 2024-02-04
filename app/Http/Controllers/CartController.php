<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Notification;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $order = Auth::user()->order->where(function ($item) {
                return $item->status_id < 4;
            });
            if(count($order)){
                Notification::addNotification(Auth::user()->getAuthIdentifier(), 'order', 'У Вас есть незаконченный Заказ');
            }
        }

        return view('cart.index');
    }

    public function storeNoAuth(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'country'  => 'required',
            'city'     => 'required',
            'street'   => 'required',
            'house'    => 'required',
            'flat'     => 'required',
            'zip_code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('open-add', true);
        }

        $address = new Address([
            'country'     => $request->input('country'),
            'city'        => $request->input('city'),
            'street'      => $request->input('street'),
            'house'       => $request->input('house'),
            'flat'        => $request->input('flat'),
            'zip_code'    => $request->input('zip_code'),
            'session_id'  => session()->getId(),
        ]);

        $address->save();

        return redirect()->back()->with('success', 'Address created successfully.');
    }


    public function addToCart(Request $request, Product $product)
    {
        // Проверьте аутентификацию пользователя

        if (Auth::check()) {
            $user = Auth::user();

            // Проверьте, есть ли товар уже в корзине пользователя
            $cartItem = $user->cart()->where('product_id', $product->id)->first();

            if ($cartItem) {
                // Если товар уже есть в корзине, обновите количество
                $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
            } else {
                // Если товара еще нет в корзине, создайте новую запись
                $user->cart()->create([
                    'product_id' => $product->id,
                    'quantity' => $request->quantity,
                ]);
            }

            // Другая логика, например, обновление суммы заказа и др.
            return redirect()->route('home')->with('success', 'Товар добавлен в корзину');
        } else {
            // Если пользователь не аутентифицирован, перенаправьте его на страницу входа/регистрации
            return redirect()->route('login')->with('notice', 'Для добавления заказа нужно авторизоваться');
        }
    }
}

<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {

        return view('cart.index');
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


    public function removeFromCart(Cart $cart)
    {
        $cart->delete();
        return redirect()->back()->with('success','Успешно Удален');
    }
}

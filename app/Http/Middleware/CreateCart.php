<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id         = session()->getId();
        $user_id    = auth()->id();
        if($user_id){
            $cart = Cart::where('user_id', $user_id)->first();
            if (!$cart) {
                $cart = Cart::create(['user_id' => $user_id]);
            }

        }else{
            $cart = Cart::where('session_id', $id)->first();
            if (!$cart) {
                $cart = Cart::create(['session_id' => $id]);
            }
        }

        return $next($request);
    }
}

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
        $session_id = session()->getId();
        $cart = Cart::where('session_id', $session_id)->first();

        if (!$cart) {
            $cart = Cart::create(['session_id' => $session_id]);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Address;
use App\Models\Cart;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $oldSessionId = session()->getId();

        $request->authenticate();

        $request->session()->regenerate();


        //cart
        $cart = Cart::where('session_id', $oldSessionId)->first();
        if ($cart) {
            $cart->session_id  = session()->getId();
            $cart->user_id     = Auth::user()->getAuthIdentifier();
            $cart->save();
        }
        //addresses
        $addresses =  Address::where('session_id', $oldSessionId)->get();
       foreach ($addresses as $address){
           $address->session_id  = session()->getId();
           $address->user_id     = Auth::user()->getAuthIdentifier();
           $address->save();
       }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

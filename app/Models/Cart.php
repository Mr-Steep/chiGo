<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'user_id', 'coupon_id', 'shipping_id'];

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public static function getCurrentCart()
    {
        $session_id = session()->getId();
        $user_id = auth()->id();

        $query = static::where('session_id', $session_id);

        if ($user_id) {
            $query->orWhere('user_id', $user_id);
        }

        return $query
            ->with('cartItems')
            ->with('shipping')
            ->first();
    }


    public function removeItemFromCart($product_id): void
    {
        $this->cartItems()->where('product_id', $product_id)->delete();
    }

    public function addItemToCart($product_id, $quantity = 1): CartItem
    {
        $cartItem = new CartItem([
            'product_id' => $product_id,
            'quantity'   => $quantity,
        ]);

        $this->cartItems()->save($cartItem);

        return $cartItem;
    }

    public function clearCart(): void
    {
        $this->cartItems()->delete();
    }
}

<?php

namespace App\Models;

// app/Models/CartItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'coupon_id', 'shipping_id'];

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

        return static::where('session_id', $session_id)
            ->with('cartItems')
            ->with('shipping')
//            ->with('coupon')
            ->first();
    }


    public function removeItemFromCart($product_id): void
    {
        $this->cartItems()->where('product_id', $product_id)->delete();
    }

    public function addItemToCart($product_id): CartItem
    {
        $cartItem = new CartItem([
            'product_id' => $product_id,
        ]);

        $this->cartItems()->save($cartItem);

        return $cartItem;
    }
}

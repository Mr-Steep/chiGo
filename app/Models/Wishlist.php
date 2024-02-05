<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable =  ['session_id', 'user_id', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public static function getWishList()
    {
        $session_id = session()->getId();
        $user_id    = auth()->id();

        $query = static::where('session_id', $session_id);

        if ($user_id) {
            $query->orWhere('user_id', $user_id);
        }

        return $query->get();
    }

    public static function getItemWishList()
    {
        $session_id = session()->getId();
        $user_id    = auth()->id();

        $query = static::where('session_id', $session_id);

        if ($user_id) {
            $query->orWhere('user_id', $user_id);
        }
        return $query->first();
    }

    public static function add($product_id): Wishlist
    {
         $wishlist =  new Wishlist([
             'product_id' => $product_id,
             'session_id'  => session()->getId(),
             'user_id'     => auth()->id(),
        ]);

        $wishlist->save();

        return $wishlist;
    }
    public static function remove($id)
    {
        $wishItem = self::find($id);
        if ($wishItem) {
            $wishItem->delete();
        }
    }
}

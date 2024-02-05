<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function isInWishlist()
    {
        $session_id = session()->getId();
        $user_id = auth()->id();


        $wishlistQuery = Wishlist::where('product_id', $this->id)
            ->where(function ($query) use ($session_id, $user_id) {
                if($user_id){
                    $query->where('user_id', $user_id);
                }else{
                    $query->where('session_id', $session_id);
                }
            });

        return $wishlistQuery->exists();
    }
}

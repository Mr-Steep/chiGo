<?php

namespace App\Models;

// app/Models/CartItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function updateQuantity(int $amount)
    {
            $newQuantity = max(0, $this->quantity + $amount);
            $this->update(['quantity' => $newQuantity]);
    }
}

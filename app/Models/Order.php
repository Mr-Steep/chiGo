<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_amount', 'status_id', 'coupon_id', 'shipping_id'];

    public static function createNewOrder(int $shipping_id, int $address_id,float $getTotalCost)
    {
        $newOrder               = new Order();
        $newOrder->user_id      = Auth::user()->getAuthIdentifier();
        $newOrder->shipping_id  = $shipping_id;
        $newOrder->address_id   = $address_id;
        $newOrder->total_amount = $getTotalCost;
        $newOrder->save();
        return $newOrder;
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'status_id');
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getOrderCostProducts()
    {
        return self::getCurrentOrder()->orderItems->sum(function ($orderItem) {
            return $orderItem->quantity * $orderItem->product->price;
        });
    }

    public static function getOrders()
    {
        return static::where('user_id', auth()->id())
            ->with('orderItems')
            ->with('status')
            ->with('coupon')
            ->with('shipping')
            ->get();
    }

    public static function getCurrentOrder()
    {
        return static::where('user_id', auth()->id())
            ->with('orderItems')
            ->with('status')
            ->with('coupon')
            ->with('shipping')
            ->first();
    }
    public function addItemToOrder($product_id, $quantity, $price): OrderItem
    {
        $orderItem = new OrderItem([
            'product_id' => $product_id,
            'quantity'   => $quantity,
            'price'      => $price,
        ]);

        $this->orderItems()->save($orderItem);

        return $orderItem;
    }



}

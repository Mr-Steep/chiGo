<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Shipping;

class AppService
{
    public static function getCurrentCart()
    {
        return Cart::getCurrentCart();
    }
    public static function getAddresses()
    {
        return Address::getAddresses();
    }
    public static function getCurrentCartItems()
    {
        return Cart::getCurrentCart()->cartItems;
    }
    public static function getCurrentCartCostProducts()
    {
        return self::getCurrentCartItems()->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });
    }


    public static  function quantityProducts(): int
    {
        return self::getCurrentCartItems()->sum('quantity');
    }
    public static function buildCategoryTree($categories, $parentId = null) {
        $tree = [];
        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = self::buildCategoryTree($categories, $category->id);
                if ($children) {
                    $category->children = $children;
                }
                $tree[] = $category;
            }
        }
        return $tree;
    }
    public static function getProductFromCard($product_id)
    {
        return Cart::getCurrentCart()->cartItems->where('product_id', $product_id)->first();
    }
    public static function changeQuantityProduct($product_id, $amount){
        $cart = Cart::getCurrentCart();
        $cartItem = $cart->cartItems->where('product_id', $product_id)->first();
        if (!$cartItem) {
            $cartItem = $cart->addItemToCart($product_id);
        } else {
            $cartItem->quantity += $amount;
            $cartItem->save();
            if (!$cartItem->quantity) {
                self::removeProductFromCart($product_id);
            }
        }
    }

    public static function emptyCart(): void
    {
        Cart::getCurrentCart()->clearCart();
    }

    public static function removeProductFromCart($product_id)
    {
        $cart = Cart::getCurrentCart();
        $cart->removeItemFromCart($product_id);
    }

    public static function refresh($instance)
    {
        $events = ['refreshCard', 'refreshCartSide', 'refreshNavigation', 'refreshProductShow'];

        foreach ($events as $event) {
            $instance->dispatch($event);
        }
    }

    public static function getShippingOptions()
    {
        return Shipping::all();
    }

    public static function getTotalCost($cart)
    {
        $discount = 0;
        $costShipping = $cart->shipping->shipping_cost;
        return $costShipping + AppService::getCurrentCartCostProducts() - $discount;
    }

}

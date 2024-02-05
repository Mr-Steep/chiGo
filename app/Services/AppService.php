<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Wishlist;

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
        $events = ['refreshCard', 'refreshCartSide', 'refreshNavigation', 'refreshWishlist', 'refreshProductShow', 'refreshTop100'];

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

    public static function getWishList(){

       return Wishlist::getWishList();
    }

    public static function quantityWishList(){

        return self::getWishList()->count();
    }

    public static function toggleWishList($productId){
        $productInWishList = null;
        $wishlistItem      = Wishlist::getItemWishList();
        if($wishlistItem){
            $productInWishList = $wishlistItem->where('product_id', $productId)->first();
        }
        if($productInWishList){
            Wishlist::remove($productInWishList->id);
        }else{
            Wishlist::add($productId);
        }

    }

}

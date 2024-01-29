<div class="nm-page-default nm-row">
    <div class="nm-page-default-col col-xs-12">
        <div id="post-8" class="post-8 page type-page status-publish hentry">
            <div class="woocommerce">
                @if(count($cartProducts))

                    <div class="woocommerce-notices-wrapper"></div>
                    <form class="woocommerce-cart-form" action="https://savoy.nordicmade.com/cart/" method="post">

                        <h1>Shopping Cart</h1>


                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                               cellspacing="0">
                            <tbody>

                            @foreach($cartProducts as $cartProduct)
                                <tr class="woocommerce-cart-form__cart-item cart_item">

                                    <td class="product-thumbnail">
                                        <a href="{{route('products.show', $cartProduct->product->id)}}">
                                            <img width="350"
                                                 height="434"
                                                 src="{{$cartProduct->product->image}}"
                                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" decoding="async"
                                                 sizes="(max-width: 350px) 100vw, 350px"></a>
                                    </td>

                                    <td class="nm-product-details" data-title="Product">
                                        <a href="{{route('products.show', $cartProduct->product->id)}}">{{$cartProduct->product->name}}</a>

                                        <div class="nm-product-quantity-pricing">
                                            <div class="product-quantity" data-title="Quantity">
                                                <div class="nm-quantity-wrap qty-show">
                                                    <label>Quantity</label>
                                                    <label class="nm-qty-label-abbrev">{{__("Quantity")}}</label>

                                                    <div class="quantity px-5">
                                                        <div class="nm-qty-minus nm-font nm-font-media-play flip !h-2">
                                                            <a wire:click="decrementQuantity({{$cartProduct->product->id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                     viewBox="0 0 24 24" fill="none">
                                                                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000"
                                                                          stroke-width="2" stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <input type="number" class="input-text qty text"
                                                               name="quantity" value="{{$cartProduct->quantity}}"
                                                               aria-label="Product quantity" size="4"
                                                               min="0" max="" step="1" pattern="[0-9]*">
                                                        <div class="nm-qty-plus nm-font nm-font-media-play !h-2">
                                                            <a wire:click="incrementQuantity({{$cartProduct->product->id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                     viewBox="0 0 24 24" fill="none">
                                                                    <path d="M6 12H18M18 12L13 7M18 12L13 17"
                                                                          stroke="#000000" stroke-width="2"
                                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{$cartProduct->product->price}}</bdi></span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="product-remove">
                                        <button wire:click="removeFromCart({{ $cartProduct->product->id}})" class="float-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="-0.5 0 25 25">
                                                <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach


                            <tr>
                                <td colspan="3" class="actions">

                                    <div class="coupon">
                                        <label for="coupon_code" class="screen-reader-text">Coupon:</label> <input
                                            type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                                            placeholder="Coupon code">
                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply
                                            coupon
                                        </button>
                                    </div>

                                    <a href="https://savoy.nordicmade.com/" id="nm-cart-continue-button"
                                       class="button border">Continue shopping</a>

                                    <button type="submit" class="button border" name="update_cart" value="Update cart"
                                            disabled="">Update cart
                                    </button>


                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce"
                                           value="7e4b088ff9"><input type="hidden" name="_wp_http_referer" value="/cart/">
                                </td>
                            </tr>

                            </tbody>
                        </table>


                    </form>

                    <div class="cart-collaterals">

                        <h2>Cart totals</h2>

                        <div class="nm-coupon-wrap">
                            <div class="nm-coupon-inner" onclick="$('.nm-coupon').toggle()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right" viewBox="0 0 24 24"
                                     fill="none">
                                    <path d="M4 8L12 16L20 8" stroke="#000000" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                                <a href="#" id="nm-coupon-btn" class="!flex !items-center">
                                    <div>
                                        <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                             fill="#000000" version="1.1"
                                             viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"><g><g><g><path d="M19.6,28.5L19.6,28.5c-0.1,0-0.3-0.1-0.4-0.1c-0.8-0.8-2.2-0.8-2.9,0c-0.2,0.2-0.5,0.2-0.7,0l-4-4     c-0.2-0.2-0.2-0.5,0-0.7c0.8-0.8,0.8-2.1,0-2.9c-0.2-0.2-0.2-0.5,0-0.7l8.4-8.4c0.1-0.1,0.2-0.1,0.4-0.1l0,0     c0.1,0,0.3,0.1,0.4,0.1c0.8,0.8,2.1,0.8,2.9,0c0.2-0.2,0.5-0.2,0.7,0l4,4c0.2,0.2,0.2,0.5,0,0.7c-0.8,0.8-0.8,2.1,0,2.9     c0.2,0.2,0.2,0.5,0,0.7L20,28.4C19.9,28.4,19.7,28.5,19.6,28.5z M12.7,24l3.3,3.3c1-0.7,2.5-0.7,3.6,0l7.7-7.7     c-0.8-1.1-0.8-2.5,0-3.6L24,12.7c-1,0.7-2.5,0.7-3.6,0l-7.7,7.7C13.4,21.5,13.4,22.9,12.7,24z"/></g><g><g><path d="M21,23.3c-0.2,0-0.4-0.1-0.5-0.4l-1.7-5.9c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3l1.7,5.9      c0.1,0.3-0.1,0.5-0.3,0.6C21.1,23.3,21.1,23.3,21,23.3z"/></g><g><g><g><path d="M23,20.9c-0.6,0-1-0.4-1-1s0.4-1,1-1c0.6,0,1,0.4,1,1S23.6,20.9,23,20.9z"/></g></g><g><g><path d="M17.4,20.8c-0.6,0-1-0.4-1-1s0.4-1,1-1c0.6,0,1,0.4,1,1S17.9,20.8,17.4,20.8z"/></g></g></g></g></g></g></svg>
                                    </div >
                                    <div> Add coupon</div>
                                </a>

                            </div>


                            <div class="nm-coupon px-4">
                                <input type="text" id="nm-coupon-code" class="input-text" name="nm_coupon_code" value=""
                                       placeholder="Coupon code">

                                <input type="submit" id="nm-apply-coupon-btn" class="button" name="nm_apply_coupon"
                                       value="Apply coupon">

                            </div>
                        </div>


                        <div class="cart_totals ">


                            <table cellspacing="0" class="shop_table shop_table_responsive">

                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal">
                                        <span class="woocommerce-Price-amount amount"><bdi>
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$costProducts}}</bdi></span>
                                    </td>
                                </tr>


                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping" colspan="2">
                                        <p class="nm-shipping-th-title"><strong>Shipping:</strong></p>

                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                            @foreach($shippings as $shipping)
                                                <li>
                                                    <input wire:click="setShipping({{$shipping->id}})"
                                                        type="radio" name="shipping_method[0]" data-index="0"
                                                        id="shipping_method_{{$shipping->id}}" value="{{$shipping->id}}"
                                                        class="shipping_method" {{$shipping->id == $activeShipping ? 'checked':''}}>
                                                    <label for="shipping_method_{{$shipping->id}}">
                                                        {{$shipping->name}}: <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                                 {{$shipping->shipping_cost}}
                                                            </bdi>
                                                        </span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>



                                        <livewire:address />


                                    </td>
                                </tr>


                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong>
                                            <span class="woocommerce-Price-amount amount"><bdi>
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{$totalCost}}</bdi>
                                            </span></strong>
                                    </td>
                                </tr>


                                </tbody>
                            </table>

                            <div class="wc-proceed-to-checkout">
                                <form method="POST" action="{{ route('order.create') }}">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="checkout-button button alt wc-forward">Proceed to checkout</button>
                                </form>
                            </div>


                        </div>

                    </div>
                @else
                    <div class="nm-cart-empty">


                        <p class="icon">
                            <i class="nm-font nm-font-close2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="-0.5 0 25 25">
                                    <path d="M3 21.32L21 3.32001" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3 3.32001L21 21.32" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </p>

                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="nm-preview-cart-notice">
                            <div class="nm-preview-cart-notice-inner">
                                <i class="nm-font nm-font-info-outline"></i>
                                <strong>Preview:</strong> Cart always empty? Try closing the ThemeForest iFrame by clicking the link below:
                                <a href="https://savoy.nordicmade.com/" class="iframe-close" title="Close ThemeForest preview iFrame"><u>Close iFrame</u></a>
                                <a class="close nm-font nm-font-close2" title="Hide notice">

                                </a>
                            </div>
                        </div><div class="wc-empty-cart-message">
                            <div class="nm-shop-notice woocommerce-info">
                                <span>Your cart is currently empty.</span>
                            </div>
                        </div>
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="{{route('catalog.index')}}">
                                Return to shop
                            </a>
                        </p>

                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

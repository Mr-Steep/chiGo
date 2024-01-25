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
                            <div class="nm-coupon-inner">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right" viewBox="0 0 24 24"
                                     fill="none">
                                    <path d="M4 8L12 16L20 8" stroke="#000000" stroke-width="1" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                                <a href="#" id="nm-coupon-btn" class="!flex !items-center">
                                    <div>
                                        <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             fill="#000000" version="1.1"
                                             viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
<g>
    <g>
        <g>
            <path
                d="M19.6,28.5L19.6,28.5c-0.1,0-0.3-0.1-0.4-0.1c-0.8-0.8-2.2-0.8-2.9,0c-0.2,0.2-0.5,0.2-0.7,0l-4-4     c-0.2-0.2-0.2-0.5,0-0.7c0.8-0.8,0.8-2.1,0-2.9c-0.2-0.2-0.2-0.5,0-0.7l8.4-8.4c0.1-0.1,0.2-0.1,0.4-0.1l0,0     c0.1,0,0.3,0.1,0.4,0.1c0.8,0.8,2.1,0.8,2.9,0c0.2-0.2,0.5-0.2,0.7,0l4,4c0.2,0.2,0.2,0.5,0,0.7c-0.8,0.8-0.8,2.1,0,2.9     c0.2,0.2,0.2,0.5,0,0.7L20,28.4C19.9,28.4,19.7,28.5,19.6,28.5z M12.7,24l3.3,3.3c1-0.7,2.5-0.7,3.6,0l7.7-7.7     c-0.8-1.1-0.8-2.5,0-3.6L24,12.7c-1,0.7-2.5,0.7-3.6,0l-7.7,7.7C13.4,21.5,13.4,22.9,12.7,24z"/>
        </g>
        <g>
            <g>
                <path
                    d="M21,23.3c-0.2,0-0.4-0.1-0.5-0.4l-1.7-5.9c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3l1.7,5.9      c0.1,0.3-0.1,0.5-0.3,0.6C21.1,23.3,21.1,23.3,21,23.3z"/>
            </g>
            <g>
                <g>
                    <g>
                        <path d="M23,20.9c-0.6,0-1-0.4-1-1s0.4-1,1-1c0.6,0,1,0.4,1,1S23.6,20.9,23,20.9z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M17.4,20.8c-0.6,0-1-0.4-1-1s0.4-1,1-1c0.6,0,1,0.4,1,1S17.9,20.8,17.4,20.8z"/>
                    </g>
                </g>
            </g>
        </g>
    </g>
</g>
</svg>
                                    </div >
                                    <div> Add coupon</div>
                                </a>

                                <div class="nm-coupon">
                                    <input type="text" id="nm-coupon-code" class="input-text" name="nm_coupon_code" value=""
                                           placeholder="Coupon code">

                                    <input type="submit" id="nm-apply-coupon-btn" class="button" name="nm_apply_coupon"
                                           value="Apply coupon">

                                </div>
                            </div>
                        </div>

                        <div class="cart_totals ">


                            <table cellspacing="0" class="shop_table shop_table_responsive">

                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>{{$costProducts}}</bdi></span>
                                    </td>
                                </tr>


                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping" colspan="2">
                                        <p class="nm-shipping-th-title">Shipping</p>

                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                            @foreach($shippings as $shipping)
                                                <li>
                                                    <input
                                                        wire:click="setShipping({{$shipping->id}})"
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
                                        <p class="woocommerce-shipping-destination">Shipping to <strong>Belarus</strong>. </p>


                                        <form class="woocommerce-shipping-calculator"
                                              action="https://savoy.nordicmade.com/cart/" method="post">

                                            <a href="#" class="shipping-calculator-button !flex !items-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"  viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.1433C3.25 5.24427 7.15501 1.25 12 1.25C16.845 1.25 20.75 5.24427 20.75 10.1433C20.75 12.5084 20.076 15.0479 18.8844 17.2419C17.6944 19.4331 15.9556 21.3372 13.7805 22.3539C12.6506 22.882 11.3494 22.882 10.2195 22.3539C8.04437 21.3372 6.30562 19.4331 5.11556 17.2419C3.92403 15.0479 3.25 12.5084 3.25 10.1433ZM12 2.75C8.00843 2.75 4.75 6.04748 4.75 10.1433C4.75 12.2404 5.35263 14.5354 6.4337 16.526C7.51624 18.5192 9.04602 20.1496 10.8546 20.995C11.5821 21.335 12.4179 21.335 13.1454 20.995C14.954 20.1496 16.4838 18.5192 17.5663 16.526C18.6474 14.5354 19.25 12.2404 19.25 10.1433C19.25 6.04748 15.9916 2.75 12 2.75ZM12 7.75C10.7574 7.75 9.75 8.75736 9.75 10C9.75 11.2426 10.7574 12.25 12 12.25C13.2426 12.25 14.25 11.2426 14.25 10C14.25 8.75736 13.2426 7.75 12 7.75ZM8.25 10C8.25 7.92893 9.92893 6.25 12 6.25C14.0711 6.25 15.75 7.92893 15.75 10C15.75 12.0711 14.0711 13.75 12 13.75C9.92893 13.75 8.25 12.0711 8.25 10Z"
                                                          fill="grey"/>
                                                </svg>
                                                <div>Change address</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-1" viewBox="0 0 24 24" fill="none">
                                                    <path d="M4 8L12 16L20 8" stroke="grey" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <section class="shipping-calculator-form" style="display:none;">



                                                <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                    <label for="calc_shipping_country" class="screen-reader-text">Country /
                                                        region:</label>
                                                    <select name="calc_shipping_country" id="calc_shipping_country"
                                                            class="country_to_state country_select"
                                                            rel="calc_shipping_state">
                                                        <option value="default">Select a country / region…</option>
                                                        <option value="BY">Belarus</option>
                                                    </select>
                                                </p>


                                                <p class="form-row validate-required form-row-wide address-field"
                                                   id="calc_shipping_city_field">
                                                    <label for="calc_shipping_city" class="screen-reader-text">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text" value="" placeholder="City"
                                                           name="calc_shipping_city" id="calc_shipping_city">
                                                </p>

                                                <p class="form-row validate-required form-row-wide address-field"
                                                   id="calc_shipping_postcode_field">
                                                    <label for="calc_shipping_postcode" class="screen-reader-text">ZIP Code&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text" value=""
                                                           placeholder="Postcode / ZIP" name="calc_shipping_postcode"
                                                           id="calc_shipping_postcode">
                                                </p>

                                                <p>
                                                    <button type="submit" name="calc_shipping" value="1" class="button">
                                                        Update
                                                    </button>
                                                </p>
                                                <input type="hidden" id="woocommerce-shipping-calculator-nonce"
                                                       name="woocommerce-shipping-calculator-nonce"
                                                       value="a248a2024f"><input type="hidden" name="_wp_http_referer"
                                                                                 value="/cart/"></section>
                                        </form>

                                    </td>
                                </tr>


                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{$totalCost}}</bdi></span></strong>
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

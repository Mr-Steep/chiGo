{{--@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])--}}


{{--<div class="nm-widget-panel-inner" style="margin-right: 0px;">--}}
{{--    <div class="nm-widget-panel-header">--}}
{{--        <div class="nm-widget-panel-header-inner">--}}
{{--            <a href="#" id="nm-widget-panel-close">--}}
{{--                <span class="nm-cart-panel-title">Cart</span>--}}
{{--                <span class="nm-widget-panel-close-title">Close</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="widget_shopping_cart_content">--}}


{{--        <div id="nm-cart-panel" style="opacity: 1;">--}}
{{--            <form id="nm-cart-panel-form" action="https://savoy.nordicmade.com/cart/" method="post">--}}
{{--                <input type="hidden" id="_wpnonce" name="_wpnonce" value="ff28032ba3">--}}
{{--                <input type="hidden" name="_wp_http_referer" value="/?add-to-cart=253&amp;nm-ajax-add-to-cart=1">--}}
{{--            </form>--}}

{{--            <div id="nm-cart-panel-loader">--}}
{{--                <span class="nm-loader">Updating…</span>--}}
{{--            </div>--}}


{{--            <div class="nm-cart-panel-list-wrap">--}}

{{--                <ul class="woocommerce-mini-cart cart_list product_list_widget ">--}}

{{--                    @if(count($cartProducts))--}}
{{--                        @foreach($cartProducts as $cartProduct)--}}
{{--                            <li id="nm-cart-panel-item-45d9cebf419a92f3a8ad390c2f8bbfdf"--}}
{{--                                class="woocommerce-mini-cart-item mini_cart_item">--}}
{{--                                <div class="nm-cart-panel-item-thumbnail">--}}
{{--                                    <div class="nm-cart-panel-thumbnail-wrap">--}}
{{--                                        <a href="{{route('products.show', $cartProduct->product->id)}}">--}}
{{--                                            <img width="350" height="434"--}}
{{--                                                src="{{$cartProduct->product->image}}"--}}
{{--                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""--}}
{{--                                                decoding="async" loading="lazy"--}}
{{--                                                sizes="(max-width: 350px) 100vw, 350px">--}}
{{--                                        </a>--}}
{{--                                        <div class="nm-cart-panel-thumbnail-loader nm-loader"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="nm-cart-panel-item-details">--}}
{{--                                    <div class="nm-cart-item-loader nm-loader"></div>--}}
{{--                                    <form method="POST" action="{{ route('cart.remove',$cartProduct) }}">--}}
{{--                                        @method('delete')--}}
{{--                                        @csrf--}}
{{--                                        <a class="float-right" href="{{route('cart.remove', $cartProduct)}}" onclick="event.preventDefault(); this.closest('form').submit();">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="-0.5 0 25 25" >--}}
{{--                                                <path d="M3 21.32L21 3.32001" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                                                <path d="M3 3.32001L21 21.32" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                                            </svg>--}}
{{--                                        </a>--}}
{{--                                    </form>--}}
{{--                                    <a href="{{route('products.show', $cartProduct->product->id)}}"--}}
{{--                                       class="nm-cart-panel-product-title">{{$cartProduct->product->name}}</a>--}}
{{--                                    <div class="nm-cart-panel-quantity-pricing">--}}
{{--                                        <div class="product-quantity" data-title="Quantity">--}}
{{--                                            <div class="nm-quantity-wrap qty-show">--}}
{{--                                                <label>Quantity</label>--}}
{{--                                                <label class="nm-qty-label-abbrev">Qty</label>--}}

{{--                                                <div class="quantity">--}}
{{--                                                    <div class="nm-qty-minus nm-font nm-font-media-play flip"></div>--}}
{{--                                                    <input type="number" id="quantity_65aa7c96763e5"--}}
{{--                                                           class="input-text qty text"--}}
{{--                                                           name="cart[45d9cebf419a92f3a8ad390c2f8bbfdf][qty]" value="{{$cartProduct->quantity}}"--}}
{{--                                                           aria-label="Product quantity" size="4" min="1" max="" step="1"--}}
{{--                                                           placeholder="" pattern="[0-9]*">--}}
{{--                                                    <div class="nm-qty-plus nm-font nm-font-media-play"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="nm-cart-panel-item-price">--}}
{{--                                        <span class="woocommerce-Price-amount amount"><bdi><span--}}
{{--                                                    class="woocommerce-Price-currencySymbol">$</span>{{$cartProduct->product->price}}</bdi></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    @else--}}

{{--                        <li class="empty !block">--}}
{{--                            <i class="nm-font nm-font-close2"></i>--}}
{{--                            <span>No products in the cart.</span>--}}
{{--                        </li>--}}
{{--                    @endif--}}




{{--                </ul><!-- end product list -->--}}

{{--            </div>--}}

{{--            <div class="nm-cart-panel-summary">--}}

{{--                <div class="nm-cart-panel-summary-inner">--}}

{{--                    @if(count($cartProducts))--}}

{{--                    <p class="woocommerce-mini-cart__total total">--}}
{{--                        <strong>Subtotal:</strong>--}}
{{--                        <span class="woocommerce-Price-amount amount">--}}
{{--                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>796.00</bdi>--}}
{{--                        </span>--}}
{{--                    </p>--}}
{{--                    @endif--}}


{{--                    <p class="woocommerce-mini-cart__buttons buttons">--}}
{{--                        <a href="{{route('cart.index')}}" class="button wc-forward">View cart</a>--}}
{{--                        <a href="https://savoy.nordicmade.com/checkout/" class="button checkout wc-forward">Checkout</a>--}}
{{--                    </p>--}}


{{--                    <p class="buttons nm-cart-empty-button">--}}
{{--                        <a href="https://savoy.nordicmade.com/" id="nm-cart-panel-continue" class="button border">--}}
{{--                            Continue shopping--}}
{{--                        </a>--}}
{{--                    </p>--}}

{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

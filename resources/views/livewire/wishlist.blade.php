<div>
    <div class="nm-page-default nm-row">
        <div class="nm-page-default-col col-xs-12">
            <div id="post-21" class="entry-content post-21 page type-page status-publish hentry">

                <div id="nm-wishlist-empty" class="show">
                    <div class="nm-row">



                        @if(count($wishList))
                            <div class="col-xs-12">
                                <div class="nm-wishlist-top">
                                    <h1>Wishlist</h1>
                                </div>

                                <div class="nm-wishlist-products">
                                    <div id="nm-wishlist-table" class="products">

                                        @foreach($wishList as $item)
                                            <ul data-product-id="{{$item->id}}">
                                                <li class="thumbnail">
                                                    <a href="{{route('products.show', $item->product)}}">
                                                        <img width="450" height="434" src="{{$item->product->image}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" sizes="(max-width: 350px) 100vw, 350px">                                                </li>
                                                <li class="title text-left">
                                                    <h3 class="woocommerce-loop-product__title">
                                                        <a  href="{{route('products.show', $item->product)}}">{{$item->product->name}}</a></h3>

                                                </li>
                                                <li class="price">

                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>69.00</bdi></span></span>
                                                </li>
                                                <li class="stock">
                                                    <span class="instock">In stock</span>                        </li>
                                                <li class="actions">
                                                    <div class="nm-product-buttons">
                                                        <a wire:click="addToCart({{$item->product->id}})" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="251" data-product_sku="73253-19" aria-label="Add “Lighthouse Lantern” to your cart" aria-describedby="" rel="nofollow">Add to cart</a>
                                                    </div>
                                                </li>
                                                <li class="remove">
                                                    <a class="nm-wishlist-remove">
                                                        <button  wire:click="wishlistRemove({{$item->id}})" class="nm-font nm-font-close2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="-0.5 0 25 25">
                                                                <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="nm-wishlist-share">
                                    <ul>
                                        <li>
                                            <span>Share</span>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://savoy.nordicmade.com/wishlist/?nmwl_share=251,252" class="facebook" target="_blank" title="Share on Facebook">
                                                <i class="nm-font nm-font-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/share?url=https://savoy.nordicmade.com/wishlist/?nmwl_share=251,252&amp;text=Check out my Wishlist on Savoy." class="twitter" target="_blank" title="Share on Twitter">
                                                <i class="nm-font nm-font-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://pinterest.com/pin/create/button/?url=https://savoy.nordicmade.com/wishlist/?nmwl_share=251,252&amp;description=Check out my Wishlist on Savoy.&amp;media=" class="pinterest" target="_blank" title="Pin on Pinterest" onclick="window.open(this.href);return false;">
                                                <i class="nm-font nm-font-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:?body=https://savoy.nordicmade.com/wishlist/?nmwl_share=251,252" class="email" title="Share via Email">
                                                <i class="nm-font nm-font-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="col-xs-12 flex flex-col justify-center	">
                                <p class="icon">
                                    <i class="nm-font nm-font-close2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 h-13" viewBox="-0.5 0 25 25">
                                            <path d="M3 21.32L21 3.32001" stroke="black" stroke-width="1"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M3 3.32001L21 21.32" stroke="black" stroke-width="1"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i>
                                </p>
                                <h1>The wishlist is currently empty.</h1>

                                <div class="note flex m-auto">
                                    <span>Click the</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="lightgray" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                    </svg>

                                    <span>icons to add products</span>
                                </div>

                                <p><a href="{{route('catalog.index')}}" class="button">Return to Shop</a></p>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

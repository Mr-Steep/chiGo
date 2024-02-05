<div>
    <div id="nm-shop"
         class="nm-shop header-enabled ajax-enabled nm-shop-sidebar-header images-lazyload images-show"
         style="min-height: 806.703px;">


        <div id="nm-shop-notices-wrap"></div>
        <div id="nm-shop-products" class="nm-shop-products">
            <div class="nm-row">

                <div class="nm-shop-products-col col-xs-12">
                    <div id="nm-shop-products-overlay" class="nm-loader"></div>
                    <div id="nm-shop-browse-wrap" class="nm-shop-description-clean">


                        <div class="woocommerce-notices-wrapper"></div>
                        <h2 class="py-5">Top 100</h2>
                        <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-3 large-block-grid-5 grid-default layout-default attributes-position-thumbnail has-action-links">

                            @foreach($products as $product)
                                <li class="nm-has-attributes product type-product post-253 status-publish first instock product_cat-interior product_tag-classic product_tag-interior product_tag-leather has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable has-default-attributes"
                                    data-product-id="253">
                                    <div class="nm-shop-loop-product-wrap">

                                        <div class="nm-shop-loop-thumbnail">

                                            <a href="{{route('products.show', $product->id)}}"
                                               class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">

                                                    <span class="onsale"><span class="nm-onsale-before">-</span>11<span
                                                            class="nm-onsale-after">%</span></span>
                                                <img
                                                    src="{{$product->image}}"
                                                    data-src="{{$product->image}}"
                                                    alt="" sizes="(max-width: 680px) 100vw, 680px"
                                                    width="680" height="844"
                                                    class="lazyloaded">
                                            </a>
                                        </div>

                                        <div class="nm-shop-loop-details">
                                                            <span wire:click="toggleWishlist({{$product->id}})" class="nm-wishlist-button nm-wishlist-item-253-button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 {{$product->isInWishlist()? "text-yellow-500": "text-slate-300"}} hover:text-slate-400 hover:cursor-pointer">
                                                                    <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                                                 </svg>
                                                            </span>
                                            <div class="nm-shop-loop-title-price">
                                                <h3 class="woocommerce-loop-product__title"><a
                                                        href="{{route('products.show', $product->id)}}"
                                                        class="nm-shop-loop-title-link woocommerce-LoopProduct-link">{{$product->name}}</a>
                                                </h3>
                                                {{--                                                            <div class="star-rating" role="img"--}}
                                                {{--                                                                 aria-label="Rated 4.00 out of 5"><span style="width:80%">Rated <strong--}}
                                                {{--                                                                        class="rating">4.00</strong> out of 5--}}
                                                {{--                                                                </span>--}}
                                                {{--                                                            </div>--}}
                                                <span class="price">
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>{{$product->price}}</bdi>
                                                                    </span>
                                                                </ins>
                                                            </span>
                                            </div>

                                            <div class="nm-shop-loop-actions">
                                                <a href="{{route('products.show', $product->id)}}"
                                                   class="nm-quickview-btn">Show more</a></div>
                                        </div>

                                    </div>
                                </li>

                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

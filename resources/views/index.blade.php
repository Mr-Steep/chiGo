@props(['products'])

<x-app-layout>
    <div class="nm-page-overflow">
        <div class="nm-page-wrap">

            <div class="nm-page-wrap-inner">

                <div id="nm-header-search" style="margin-right: 0px;">
                    <a href="#" id="nm-header-search-close" class="nm-font nm-font-close2"></a>

                    <div class="nm-header-search-wrap">
                        <div class="nm-row">
                            <div class="col-xs-12">
                                <form id="nm-header-search-form" role="search" method="get"
                                      action="https://savoy.nordicmade.com/">
                                    <i class="nm-font nm-font-search"></i>
                                    <input type="text" id="nm-header-search-input" autocomplete="off" value="" name="s"
                                           placeholder="Search products">
                                    <input type="hidden" name="post_type" value="product">
                                </form>

                                <div id="nm-search-suggestions" class="">
                                    <div class="nm-search-suggestions-inner">
                                        <div id="nm-search-suggestions-notice" class="">
                                            <span class="txt-press-enter">press <u>Enter</u> to search</span>
                                            <span class="txt-has-results">Showing all results:</span>
                                            <span class="txt-no-results">No products found.</span>
                                        </div>
                                        <ul id="nm-search-suggestions-product-list"
                                            class="block-grid-single-row xsmall-block-grid-1 small-block-grid-1 medium-block-grid-5 large-block-grid-6"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nm-page-full">
                    <div class="entry-content">
                        <div class="wpb-content-wrapper">
                            <div style="max-width:1600px;"
                                 class="nm-row nm-row-boxed nm-row-max-width vc_row wpb_row  vc_custom_1439335872363">
                                <div class="nm_column wpb_column vc_column_container col-sm-12 vc_custom_1439335914871">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="nm-banner-slider plugin-slick pagination-color-gray slick-slider slick-dots-inside has-pagination pagination-mobile-outside pagination-left slick-initialized"
                                                data-arrows="true" data-dots="true" data-autoplay="true"
                                                data-autoplay-speed="12000">
                                                <div aria-live="polite" class="slick-list draggable" tabindex="0">
                                                    <div class="slick-track"
                                                         style="opacity: 1; width: 4014px; transform: translate3d(-1338px, 0px, 0px);">
                                                        <div class="nm-banner-slide slick-slide" data-slick-index="0"
                                                             aria-hidden="true" style="width: 1338px;">
                                                            <div
                                                                class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-light subtitle-below alt-mobile-layout"
                                                                style="background-color: #3d3d3b;"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-pendant-lighting.jpg"
                                                                    width="1600" height="678"
                                                                    alt="slider-pendant-lighting"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-pendant-lighting-alt.jpg"
                                                                    class="nm-banner-alt-image img" width="750"
                                                                    height="500" alt="slider-pendant-lighting-alt">
                                                                <div class="nm-banner-content">
                                                                    <div
                                                                        class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium"
                                                                             style="max-width:41%;">
                                                                            <div
                                                                                class="nm-banner-text-inner nm-animated"
                                                                                data-animate="fadeIn"><h1
                                                                                    class="nm-banner-title">Contemporary
                                                                                    Pendant Lighting</h1><a
                                                                                    href="https://savoy.nordicmade.com/product-category/interior/"
                                                                                    class="nm-banner-link nm-banner-shop-link type-txt">Interior</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nm-banner-slide slick-slide slick-active"
                                                             data-slick-index="1" aria-hidden="false"
                                                             style="width: 1338px;">
                                                            <div
                                                                class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-dark subtitle-below alt-mobile-layout"
                                                                style="background-color: #eeeeee;"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-wall-clock.jpg"
                                                                    width="1600" height="678"
                                                                    alt="slider-wall-clock"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-wall-clock-alt.jpg"
                                                                    class="nm-banner-alt-image img" width="750"
                                                                    height="500" alt="slider-wall-clock-alt">
                                                                <div class="nm-banner-content">
                                                                    <div
                                                                        class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium"
                                                                             style="max-width:37%;">
                                                                            <div
                                                                                class="nm-banner-text-inner nm-animated fadeIn"
                                                                                data-animate="fadeIn"><h1
                                                                                    class="nm-banner-title">Minimal
                                                                                    Rotating Disc Wall Clock</h1><a
                                                                                    href="https://savoy.nordicmade.com/product-category/decoration/"
                                                                                    class="nm-banner-link nm-banner-shop-link type-txt">Decoration</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nm-banner-slide slick-slide" data-slick-index="2"
                                                             aria-hidden="true" style="width: 1338px;">
                                                            <div
                                                                class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-dark subtitle-below alt-mobile-layout"
                                                                style="background-color: #eeeeee;"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-basket.jpg"
                                                                    width="1600" height="678" alt="slider-basket"><img
                                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-basket-alt.jpg"
                                                                    class="nm-banner-alt-image img" width="750"
                                                                    height="500" alt="slider-basket-alt">
                                                                <div class="nm-banner-content">
                                                                    <div
                                                                        class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium"
                                                                             style="max-width:40%;">
                                                                            <div
                                                                                class="nm-banner-text-inner nm-animated"
                                                                                data-animate="fadeIn"><h1
                                                                                    class="nm-banner-title">Bamboo
                                                                                    Zigzag Pattern Basket</h1><a
                                                                                    href="https://savoy.nordicmade.com/product-category/essentials/"
                                                                                    class="nm-banner-link nm-banner-shop-link type-txt">Essentials</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a class="slick-prev" style=""><i
                                                        class="nm-font nm-font-angle-thin-left"></i></a><a
                                                    class="slick-next" style=""><i
                                                        class="nm-font nm-font-angle-thin-right"></i></a>
                                                <ul class="slick-dots" style="">
                                                    <li class="" aria-hidden="true">
                                                        <button type="button" data-role="none">1</button>
                                                    </li>
                                                    <li aria-hidden="false" class="slick-active">
                                                        <button type="button" data-role="none">2</button>
                                                    </li>
                                                    <li aria-hidden="true" class="">
                                                        <button type="button" data-role="none">3</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="nm-shop-header has-categories no-filters no-sidebar no-search centered">
                    <div class="nm-shop-menu list-spaced thumbnails-top">
                        <div class="nm-row">
                            <div class="col-xs-12">
                                <div id="nm-shop-filter-menu-wrap">
                                    <ul id="nm-shop-filter-menu" class="nm-shop-filter-menu">
                                        <li class="nm-shop-categories-btn-wrap" data-panel="cat">
                                            <a href="#categories" class="invert-color">Categories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="nm-shop-categories-wrap">
                                    <ul id="nm-shop-categories" class="nm-shop-categories">
                                        <li class="current-cat"><a
                                                href="https://savoy.nordicmade.com/?cat_center=1"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-all.jpg"
                                                    width="46" height="46" alt="">All</a></li>
                                        <li class="cat-item-24"><span class="nm-shop-categories-divider">⁄</span><a
                                                href="https://savoy.nordicmade.com/product-category/bags-backpacks/?cat_center=1"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-bags-backpacks.jpg"
                                                    width="46" height="46" alt="">Bags &amp; Backpacks</a></li>
                                        <li class="cat-item-23"><span class="nm-shop-categories-divider">⁄</span><a
                                                href="https://savoy.nordicmade.com/product-category/decoration/?cat_center=1"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-decoration.jpg"
                                                    width="46" height="46" alt="">Decoration</a></li>
                                        <li class="cat-item-22"><span class="nm-shop-categories-divider">⁄</span><a
                                                href="https://savoy.nordicmade.com/product-category/essentials/?cat_center=1"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-essentials.jpg"
                                                    width="46" height="46" alt="">Essentials</a></li>
                                        <li class="cat-item-21"><span class="nm-shop-categories-divider">⁄</span><a
                                                href="https://savoy.nordicmade.com/product-category/interior/?cat_center=1"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-interior.jpg"
                                                    width="46" height="46" alt="">Interior</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
                                    <h2 class="py-5">Top products</h2>
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
                                                        <a href="#" id="nm-wishlist-item-253-button"
                                                           class="nm-wishlist-button nm-wishlist-item-253-button"
                                                           data-product-id="253" title="Add to Wishlist">
                                                            <svg class=" w-4 h-4 " xmlns="http://www.w3.org/2000/svg"
                                                                 fill="#000000" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"
                                                                />
                                                            </svg>
                                                        </a>
                                                        <div class="nm-shop-loop-title-price">
                                                            <h3 class="woocommerce-loop-product__title"><a
                                                                    href="https://savoy.nordicmade.com/product/classic-chair/"
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
                                                            <a href="https://savoy.nordicmade.com/product/classic-chair/"
                                                               class="nm-quickview-btn">Show more</a></div>
                                                    </div>

                                                </div>
                                            </li>

                                        @endforeach
                                    </ul>
                                    <nav class="woocommerce-pagination nm-pagination nm-infload">
                                        <ul class="page-numbers">
                                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers"
                                                   href="https://savoy.nordicmade.com/page/2/?fullscreen=1&amp;header_icons=all&amp;shop_search=header">2</a>
                                            </li>
                                            <li><a class="page-numbers"
                                                   href="https://savoy.nordicmade.com/page/3/?fullscreen=1&amp;header_icons=all&amp;shop_search=header">3</a>
                                            </li>
                                            <li><a class="page-numbers"
                                                   href="https://savoy.nordicmade.com/page/4/?fullscreen=1&amp;header_icons=all&amp;shop_search=header">4</a>
                                            </li>
                                            <li><a class="next page-numbers"
                                                   href="https://savoy.nordicmade.com/page/2/?fullscreen=1&amp;header_icons=all&amp;shop_search=header"><i
                                                        class="nm-font nm-font-angle-thin-right"></i></a></li>
                                        </ul>
                                    </nav>

                                    <div class="nm-infload-link"><a
                                            href="https://savoy.nordicmade.com/page/2/?fullscreen=1&amp;header_icons=all&amp;shop_search=header">&nbsp;</a>
                                    </div>

                                    <div class="nm-infload-controls button-mode">
                                        <a href="#" class="nm-infload-btn">Load More</a>

                                        <a href="#" class="nm-infload-to-top">All products loaded.</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div> <!-- .nm-page-wrap-inner -->
        </div> <!-- .nm-page-wrap -->
    </div> <!-- .nm-page-overflow -->
</x-app-layout>

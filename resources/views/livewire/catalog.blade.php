<div>
    <div class=" has-categories has-filters no-sidebar has-search">
        <div class="py-8 has-categories has-filters no-sidebar no-search">
            <div class="nm-shop-menu list_sep thumbnails-top">
                <div class="nm-row">
                    <div class="col-xs-12">
                        <div id="nm-shop-filter-menu-wrap">
                            </ul>
                            <ul id="nm-shop-filter-menu" class="nm-shop-filter-menu">
                                <li class="nm-shop-categories-btn-wrap" data-panel="cat">
                                    <a  class="invert-color">Categories</a>
                                </li>
                                <li class="nm-shop-filter-btn-wrap active" data-panel="filter">
                                    <a onclick="$('#filter-data').toggle()" class="invert-color">Filter</a>
                                </li>
                                <li class="nm-shop-search-btn-wrap" data-panel="search">
                                    <span>⁄</span>
                                    <a onclick="$('#search-data').toggle()" id="nm-shop-search-btn" class="invert-color">
                                        <span>Search</span>
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-1" viewBox="0 0 24 24" fill="none">--}}
{{--                                                <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                                            </svg>--}}
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div id="search-data"  style="display: {{$search?"block":"none"}};" class="fade-in">
                <div class="nm-row">
                    <div class="col-xs-12">
                        <div class="nm-shop-search-inner">
                            <div class="nm-shop-search-input-wrap">
                                <a href="#" id="nm-shop-search-close"><i class="nm-font nm-font-close2"></i></a>
                                    <input wire:model.live="search" class="focus:outline-none" type="text" id="nm-shop-search-input" autocomplete="off" value="" name="s" placeholder="Search products">
                            </div>

                            <div id="nm-shop-search-notice"><span>press <u>Enter</u> to search</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-data" class="nm-shop-sidebar nm-shop-sidebar-header fade-in"
                 data-sidebar-layout="header" style="display: none;">
                <div class="nm-shop-sidebar-inner">
                    <div class="nm-row">
                        <div class="col-xs-12">
                            <ul id="nm-shop-widgets-ul" class="small-block-grid-4">
                                <li id="nm_woocommerce_widget_product_sorting-2"
                                    class="widget nm_widget nm_widget_product_sorting woocommerce !float-end	">
                                    <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Sort By</h3></div>
                                    <div class="nm-shop-widget-col">
                                        <ul id="nm-product-sorting" class="nm-product-sorting">
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('default')" class="{{ $sortBy == 'default' ? 'active' : '' }}" rel="nofollow">Default</a>
                                            </li>
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('popularity')" class="{{ $sortBy == 'popularity' ? 'active' : '' }}" rel="nofollow">Popularity</a>
                                            </li>
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('average_rating')" class="{{ $sortBy == 'average_rating' ? 'active' : '' }}" rel="nofollow">Average rating</a>
                                            </li>
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('newness')" class="{{ $sortBy == 'newness' ? 'active' : '' }}" rel="nofollow">Newness</a>
                                            </li>
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('price_low_high')" class="{{ $sortBy == 'price_low_high' ? 'active' : '' }}" rel="nofollow">Price: Low to High</a>
                                            </li>
                                            <li>
                                                <a href="#" wire:click.prevent="setSort('price_high_low')" class="{{ $sortBy == 'price_high_low' ? 'active' : '' }}" rel="nofollow">Price: High to Low</a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="nm-shop-sidebar-layout-indicator"></div>
                <!-- Don't remove (used for testing sidebar/filters layout in JavaScript) -->
            </div>

        </div>
    </div>


    <div id="nm-shop"
         class="nm-shop header-enabled ajax-enabled nm-shop-sidebar-default nm-shop-sidebar-position-left images-lazyload images-show"
         style="min-height: 714.664px;">

        <div id="nm-shop-notices-wrap"></div>
        <div id="nm-shop-products" class="nm-shop-products">
            <div class="nm-row">
                <div class="nm-shop-sidebar-col col-md-3 col-sm-12">
                    <div class="nm-shop-sidebar fade-in" data-sidebar-layout="default"
                         style="display: block;">
                        <ul id="nm-shop-widgets-ul">
                            <li id="woocommerce_product_categories-3"
                                class="widget woocommerce widget_product_categories">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Categories</h3></div>
                                <div class="nm-shop-widget-col" style="">
                                    <ul class="product-categories">
                                        <li class="cat-item-all">
                                            <a href="#" wire:click.prevent="setCategory(0)">All</a>
                                        </li>
                                        @foreach ($categoryTree as $category)
                                            @include('partials.category', ['category' => $category, 'depth' => 0, 'topLevel' => true])
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Price</h3></div>
                                <div class="nm-shop-widget-col" style="">
                                    <div class="price_slider_wrapper">
                                        <div
                                            class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                            style="">
                                            <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                 style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0"
                                                  class="ui-slider-handle ui-corner-all ui-state-default"
                                                  style="left: {{$minSlider}}%;">

                                                </span>
                                            <span tabindex="0"
                                                  class="ui-slider-handle ui-corner-all ui-state-default"
                                                  style="left: {{$maxSlider}}%;">

                                                </span>
                                        </div>

                                        <div class="price_slider_amount" data-step="10">
                                            <label class="screen-reader-text" for="min_price">Min price</label>
                                            <input wire:model.change="minPrice" type="text" id="min_price"
                                                   name="min_price" value="{{$minPrice}}"
                                                   data-min="{{$minPrice}}" placeholder="Min price"
                                                   style="display: none;">
                                            <label class="screen-reader-text" for="max_price">Max price</label>
                                            <input wire:model.change="maxPrice" type="text" id="max_price"
                                                   name="max_price" value="{{$maxPrice}}"
                                                   data-max="{{$maxPrice}}" placeholder="Max price"
                                                   style="display: none;">
                                            <div class="price_label" style="">
                                                <div class="nm-price-slider-label">Price:</div>
                                                <span class="from">${{$minPrice}}</span> — <span
                                                    class="to">${{$maxPrice}}</span>
                                            </div>
                                            <button type="submit" class="button">Filter</button>
                                            <input type="hidden" name="shop_sidebar" value="1"><input
                                                type="hidden"
                                                name="header_icons"
                                                value="1"><input
                                                type="hidden" name="shop_search" value="header">
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nm-shop-products-col col-md-9 col-sm-12">
                    <div id="nm-shop-products-overlay" class="nm-loader"></div>
                    <div id="nm-shop-browse-wrap" class="nm-shop-description-clean">

                        <div class="nm-shop-results-bar  is-tag">
                            <ul>

                                @if($search)
                                    <li class="nm-shop-search-taxonomy-reset">

                                        <a href="#" class="!flex !items-center" id="nm-shop-search-taxonomy-reset"
                                           data-shop-url="https://savoy.nordicmade.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 m-1"
                                                 viewBox="-0.5 0 25 25">
                                                <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <div>
                                                Search:<span>"{{$search}}”</span>
                                            </div>

                                        </a>
                                    </li>
                                @endif

                                @if($categoryId)
                                    <li class="nm-shop-search-taxonomy-reset">

                                        <a href="#" class="!flex !items-center" id="nm-shop-search-taxonomy-reset"
                                           data-shop-url="https://savoy.nordicmade.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 m-1"
                                                 viewBox="-0.5 0 25 25">
                                                <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <div>
                                                Categories <span>"{{__("messages.$categoryId")}}”</span>
                                            </div>

                                        </a>
                                    </li>
                                @endif

                                @if($sortBy)
                                    <li class="nm-shop-search-taxonomy-reset">

                                        <a href="#" class="!flex !items-center" id="nm-shop-search-taxonomy-reset"
                                           data-shop-url="https://savoy.nordicmade.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 m-1"
                                                 viewBox="-0.5 0 25 25">
                                                <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <div>
                                                Sort By <span>"{{__("messages.$sortBy")}}”</span>
                                            </div>

                                        </a>
                                    </li>
                                @endif
                                <li class="nm-shop-search-taxonomy-reset">

                                    <a href="#" class="!flex !items-center" id="nm-shop-search-taxonomy-reset"
                                       data-shop-url="https://savoy.nordicmade.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 m-1"
                                             viewBox="-0.5 0 25 25">
                                            <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <div>
                                            Products tagged <span>“Bathroom”</span>
                                        </div>

                                    </a>
                                </li>
                                <li id="range-tag"
                                    class="nm-shop-search-taxonomy-reset {{!$minSlider && $maxSlider == 100 ?"!hidden": "1"}}">
                                    <a href="#" class="!flex !items-center"
                                       onclick="this.parentNode.classList.add('!hidden')"
                                       id="nm-shop-search-taxonomy-reset" data-shop-url="https://savoy.nordicmade.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 m-1"
                                             viewBox="-0.5 0 25 25">
                                            <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <div>
                                            Price <span>{{round($minPrice) . '-' . round($maxPrice)}}</span>
                                        </div>

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-3 large-block-grid-3 grid-default layout-default attributes-position-thumbnail has-action-links">
                            @foreach($products as $product)

                                <li class="nm-has-attributes product type-product post-253 status-publish first instock product_cat-interior product_tag-classic product_tag-interior product_tag-leather has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable has-default-attributes"
                                    data-product-id="253">
                                    <div class="nm-shop-loop-product-wrap">

                                        <div class="nm-shop-loop-thumbnail">

                                            <a href="{{route('products.show', $product)}}"
                                               class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">

                                            <span class="onsale"><span class="nm-onsale-before">-</span>11<span
                                                    class="nm-onsale-after">%</span></span>
                                                <img
                                                    src="{{$product->image}}"
                                                    alt="" sizes="(max-width: 300px) 100vw, 300px" width="300"
                                                    height="372"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                >
                                            </a>
                                        </div>

                                        <div class="nm-shop-loop-details">
                                            <a wire:click="toggleWishlist({{$product->id}})"
                                               class="nm-wishlist-button nm-wishlist-item-217-button {{$product->isInWishlist()? "text-yellow-500": "text-slate-300"}} hover:text-slate-400 hover:cursor-pointer"
                                               title="Add to Wishlist">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                     viewBox="0 0 24 24" class="w-5 h-5">
                                                    <path
                                                        d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/>
                                                </svg>
                                            </a>
                                            <div class="nm-shop-loop-title-price">
                                                <h3 class="woocommerce-loop-product__title"><a
                                                        href="{{route('products.show', $product)}}"
                                                        class="nm-shop-loop-title-link woocommerce-LoopProduct-link">{{$product->name}}</a>
                                                </h3>
                                                <span class="price"><del aria-hidden="true"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>234.00</bdi></span></del> <ins><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>{{$product->price}}</bdi></span></ins></span>
                                            </div>

                                            <div class="nm-shop-loop-actions">
                                                <a href="{{route('products.show', $product)}}"
                                                   class="nm-quickview-btn">Show more</a></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        {{ $products->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        jQuery(document).ready(function ($) {
            var slider = $('.price_slider');
            slider.slider({
                range: true,
                min: {{$minPrice}},
                max: {{$maxPrice}},
                values: [{{$minPrice}}, {{$maxPrice}}],
                slide: function (event, ui) {


                    const min = ui.values[0]
                    const max = ui.values[1]
                    // Обновление значений ввода
                    $('#min_price').val(min);
                    $('#max_price').val(max);

                    Livewire.dispatch('updateRangePrice', [min, max])

                    // Обновление текста меток цен
                    $('.from').text('$' + min);
                    $('.to').text('$' + max);

                }
            });
        });
        $(document).ready(function () {
            // Обработчик события клика по элементам с классом "cat-item"
            $('.woocommerce').click(function (e) {
                $(this).toggleClass('show');

            });
        });
    </script>
</div>



<x-app-layout>

    <div id="nm-shop"
         class="nm-shop header-enabled ajax-enabled nm-shop-sidebar-default nm-shop-sidebar-position-left images-lazyload images-show"
         style="min-height: 714.664px;">

        <div class="nm-shop-header no-categories no-filters has-sidebar no-search centered">
            <div class="nm-shop-menu list_sep thumbnails-top">
                <div class="nm-row">
                    <div class="col-xs-12">
                        <div id="nm-shop-filter-menu-wrap">
                            <ul id="nm-shop-filter-menu" class="nm-shop-filter-menu">
                                <li class="nm-shop-sidebar-btn-wrap active" data-panel="sidebar">
                                    <a href="#filter" class="invert-color"><span>Filter</span> <i
                                            class="nm-font nm-font-menu"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div id="nm-shop-notices-wrap"></div>
        <div id="nm-shop-products" class="nm-shop-products">
            <div class="nm-row">
                <div class="nm-shop-sidebar-col col-md-3 col-sm-12">
                    <div id="nm-shop-sidebar" class="nm-shop-sidebar fade-in" data-sidebar-layout="default"
                         style="display: block;">
                        <ul id="nm-shop-widgets-ul">
                            <li id="woocommerce_product_categories-3"
                                class="widget woocommerce widget_product_categories">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Categories</h3></div>
                                <div class="nm-shop-widget-col" style="">
                                    <ul class="product-categories">
                                        <li class="cat-item-all"><a
                                                href="https://savoy.nordicmade.com/home/?shop_sidebar=1">All</a></li>
                                        <li class="cat-item cat-item-24"><a
                                                href="https://savoy.nordicmade.com/product-category/bags-backpacks/?shop_sidebar=1">Bags
                                                &amp; Backpacks</a></li>
                                        <li class="cat-item cat-item-23"><a
                                                href="https://savoy.nordicmade.com/product-category/decoration/?shop_sidebar=1">Decoration</a>
                                        </li>
                                        <li class="cat-item cat-item-22"><a
                                                href="https://savoy.nordicmade.com/product-category/essentials/?shop_sidebar=1">Essentials</a>
                                        </li>
                                        <li class="cat-item cat-item-21"><a
                                                href="https://savoy.nordicmade.com/product-category/interior/?shop_sidebar=1">Interior</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Price</h3></div>
                                <div class="nm-shop-widget-col" style="">
                                    <form method="get" action="https://savoy.nordicmade.com/">
                                        <div class="price_slider_wrapper">
                                            <div
                                                class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                style="">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                     style="left: 0%; width: 100%;"></div>
                                                <span tabindex="0"
                                                      class="ui-slider-handle ui-corner-all ui-state-default"
                                                      style="left: 0%;"></span><span tabindex="0"
                                                                                     class="ui-slider-handle ui-corner-all ui-state-default"
                                                                                     style="left: 100%;"></span></div>
                                            <div class="price_slider_amount" data-step="10">
                                                <label class="screen-reader-text" for="min_price">Min price</label>
                                                <input type="text" id="min_price" name="min_price" value="10"
                                                       data-min="10" placeholder="Min price" style="display: none;">
                                                <label class="screen-reader-text" for="max_price">Max price</label>
                                                <input type="text" id="max_price" name="max_price" value="260"
                                                       data-max="260" placeholder="Max price" style="display: none;">
                                                <div class="price_label" style="">
                                                    <div class="nm-price-slider-label">Price:</div>
                                                    <span class="from">$10</span> — <span class="to">$260</span>
                                                </div>
                                                <button type="submit" class="button">Filter</button>
                                                <input type="hidden" name="shop_sidebar" value="1"><input type="hidden"
                                                                                                          name="header_icons"
                                                                                                          value="1"><input
                                                    type="hidden" name="shop_search" value="header">
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </li>
                            <li id="nm_woocommerce_widget_product_sorting-2"
                                class="widget nm_widget nm_widget_product_sorting woocommerce">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Sort By</h3></div>
                                <div class="nm-shop-widget-col">
                                    <ul id="nm-product-sorting" class="nm-product-sorting">
                                        <li>
                                            <a href="https://savoy.nordicmade.com/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header&amp;orderby=menu_order"
                                               rel="nofollow">Default</a></li>
                                        <li>
                                            <a href="https://savoy.nordicmade.com/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header&amp;orderby=popularity"
                                               rel="nofollow">Popularity</a></li>
                                        <li>
                                            <a href="https://savoy.nordicmade.com/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header&amp;orderby=rating"
                                               rel="nofollow">Average rating</a></li>
                                        <li class="active">Newness</li>
                                        <li>
                                            <a href="https://savoy.nordicmade.com/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header&amp;orderby=price"
                                               rel="nofollow">Price: Low to High</a></li>
                                        <li>
                                            <a href="https://savoy.nordicmade.com/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header&amp;orderby=price-desc"
                                               rel="nofollow">Price: High to Low</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li id="woocommerce_layered_nav-2"
                                class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Color</h3></div>
                                <div class="nm-shop-widget-col" style="">
                                    <ul class="woocommerce-widget-layered-nav-list">
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=blue&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#1e73be;"
                                                    class="nm-pa-color nm-pa-color-blue"></i>Blue</a></li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=brown&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#736751;"
                                                    class="nm-pa-color nm-pa-color-brown"></i>Brown</a></li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=gray&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#c0c0c0;"
                                                    class="nm-pa-color nm-pa-color-gray"></i>Gray</a></li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=green&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#05ac92;"
                                                    class="nm-pa-color nm-pa-color-green"></i>Green</a></li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=orange&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#dc9814;"
                                                    class="nm-pa-color nm-pa-color-orange"></i>Orange</a></li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                                rel="nofollow"
                                                href="https://savoy.nordicmade.com/?filter_color=white&amp;query_type_color=or&amp;shop_sidebar=1"><i
                                                    style="background:#ffffff;"
                                                    class="nm-pa-color nm-pa-color-white"></i>White</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li id="woocommerce_product_tag_cloud-2"
                                class="widget woocommerce widget_product_tag_cloud">
                                <div class="nm-shop-widget-col"><h3 class="nm-widget-title">Tags</h3></div>
                                <div class="nm-shop-widget-col">
                                    <div class="tagcloud"><a
                                            href="https://savoy.nordicmade.com/product-tag/bathroom/?shop_sidebar=1"
                                            class="tag-cloud-link tag-link-32 tag-link-position-1"
                                            style="font-size: 15.567567567568pt;" aria-label="Bathroom (7 products)">Bathroom</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/classic/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-7 tag-link-position-2"
                                           style="font-size: 14.936936936937pt;" aria-label="Classic (6 products)">Classic</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/contemporary/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-27 tag-link-position-3"
                                           style="font-size: 22pt;"
                                           aria-label="Contemporary (25 products)">Contemporary</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/decor/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-28 tag-link-position-4"
                                           style="font-size: 17.333333333333pt;"
                                           aria-label="Decor (10 products)">Decor</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/essentials/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-30 tag-link-position-5"
                                           style="font-size: 19.099099099099pt;" aria-label="Essentials (14 products)">Essentials</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/grooming/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-33 tag-link-position-6"
                                           style="font-size: 14.936936936937pt;" aria-label="Grooming (6 products)">Grooming</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/interior/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-8 tag-link-position-7"
                                           style="font-size: 17.333333333333pt;" aria-label="Interior (10 products)">Interior</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/kitchen/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-29 tag-link-position-8"
                                           style="font-size: 15.567567567568pt;" aria-label="Kitchen (7 products)">Kitchen</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/leather/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-9 tag-link-position-9"
                                           style="font-size: 14.936936936937pt;" aria-label="Leather (6 products)">Leather</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/lighting/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-25 tag-link-position-10"
                                           style="font-size: 11.783783783784pt;" aria-label="Lighting (3 products)">Lighting</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/minimal/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-26 tag-link-position-11"
                                           style="font-size: 14.936936936937pt;" aria-label="Minimal (6 products)">Minimal</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/practical/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-35 tag-link-position-12"
                                           style="font-size: 8pt;" aria-label="Practical (1 product)">Practical</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/tableware/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-34 tag-link-position-13"
                                           style="font-size: 8pt;" aria-label="Tableware (1 product)">Tableware</a>
                                        <a href="https://savoy.nordicmade.com/product-tag/travel/?shop_sidebar=1"
                                           class="tag-cloud-link tag-link-31 tag-link-position-14"
                                           style="font-size: 18.216216216216pt;" aria-label="Travel (12 products)">Travel</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nm-shop-products-col col-md-9 col-sm-12">
                    <div id="nm-shop-products-overlay" class="nm-loader"></div>
                    <div id="nm-shop-browse-wrap" class="nm-shop-description-clean">


                        <div class="woocommerce-notices-wrapper"></div>
                        <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-3 large-block-grid-3 grid-default layout-default attributes-position-thumbnail has-action-links">
                            <li class="nm-has-attributes product type-product post-253 status-publish first instock product_cat-interior product_tag-classic product_tag-interior product_tag-leather has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable has-default-attributes"
                                data-product-id="253">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/classic-chair/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">

                                            <span class="onsale"><span class="nm-onsale-before">-</span>11<span
                                                    class="nm-onsale-after">%</span></span>
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-classic-chair-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-253-button"
                                           class="nm-wishlist-button nm-wishlist-item-253-button" data-product-id="253"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/classic-chair/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Modern
                                                    Shell Chair</a></h3>
                                            <span class="price"><del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>234.00</bdi></span></del> <ins><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>208.00</bdi></span></ins></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/classic-chair/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                    <div class="nm-shop-loop-attributes">
                                        <div class="nm-shop-loop-attribute nm-shop-loop-attribute-image"><a
                                                href="https://savoy.nordicmade.com/product/classic-chair/?attribute_pa_color-variant=black"
                                                class="nm-shop-loop-attribute-link">
                                                <div class="nm-pa-image-thumbnail-wrap"><img
                                                        src="https://savoy.nordicmade.com/wp-content/uploads/2020/10/swatch-chair-black.jpg"
                                                        class="nm-pa-image-thumbnail"></div>
                                            </a><a
                                                href="https://savoy.nordicmade.com/product/classic-chair/?attribute_pa_color-variant=beige"
                                                class="nm-shop-loop-attribute-link">
                                                <div class="nm-pa-image-thumbnail-wrap"><img
                                                        src="https://savoy.nordicmade.com/wp-content/uploads/2020/10/swatch-chair-beige.jpg"
                                                        class="nm-pa-image-thumbnail"></div>
                                            </a><a
                                                href="https://savoy.nordicmade.com/product/classic-chair/?attribute_pa_color-variant=brown"
                                                class="nm-shop-loop-attribute-link">
                                                <div class="nm-pa-image-thumbnail-wrap"><img
                                                        src="https://savoy.nordicmade.com/wp-content/uploads/2020/10/swatch-chair-brown.jpg"
                                                        class="nm-pa-image-thumbnail"></div>
                                            </a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nm-has-attributes product type-product post-252 status-publish instock product_cat-interior product_tag-interior product_tag-lighting product_tag-minimal has-post-thumbnail featured shipping-taxable purchasable product-type-variable has-default-attributes"
                                data-product-id="252">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/pendant-lamp/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-pendant-lamp-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-252-button"
                                           class="nm-wishlist-button nm-wishlist-item-252-button" data-product-id="252"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/pendant-lamp/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Pendant
                                                    Lamp</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>89.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/pendant-lamp/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                    <div class="nm-shop-loop-attributes">
                                        <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                                href="https://savoy.nordicmade.com/product/pendant-lamp/?attribute_pa_color=brown"
                                                class="nm-shop-loop-attribute-link"><i style="background:#736751;"
                                                                                       class="nm-pa-color nm-pa-color-brown"></i></a><a
                                                href="https://savoy.nordicmade.com/product/pendant-lamp/?attribute_pa_color=gray"
                                                class="nm-shop-loop-attribute-link"><i style="background:#c0c0c0;"
                                                                                       class="nm-pa-color nm-pa-color-gray"></i></a><a
                                                href="https://savoy.nordicmade.com/product/pendant-lamp/?attribute_pa_color=white"
                                                class="nm-shop-loop-attribute-link"><i style="background:#ffffff;"
                                                                                       class="nm-pa-color nm-pa-color-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product type-product post-251 status-publish last instock product_cat-decoration product_tag-decor product_tag-lighting product_tag-practical has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                data-product-id="251">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/lighthouse-lantern/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lighthouse-lantern-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-251-button"
                                           class="nm-wishlist-button nm-wishlist-item-251-button" data-product-id="251"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/lighthouse-lantern/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Lighthouse
                                                    Lantern</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>69.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/lighthouse-lantern/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="nm-has-attributes product type-product post-250 status-publish first instock product_cat-decoration product_tag-decor product_tag-interior product_tag-minimal has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes"
                                data-product-id="250">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/wall-clock/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-2.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-wall-clock.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-250-button"
                                           class="nm-wishlist-button nm-wishlist-item-250-button" data-product-id="250"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/wall-clock/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Wall
                                                    Clock</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>79.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/wall-clock/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                    <div class="nm-shop-loop-attributes">
                                        <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                                href="https://savoy.nordicmade.com/product/wall-clock/?attribute_pa_color=green"
                                                class="nm-shop-loop-attribute-link"><i style="background:#05ac92;"
                                                                                       class="nm-pa-color nm-pa-color-green"></i></a><a
                                                href="https://savoy.nordicmade.com/product/wall-clock/?attribute_pa_color=orange"
                                                class="nm-shop-loop-attribute-link"><i style="background:#dc9814;"
                                                                                       class="nm-pa-color nm-pa-color-orange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product type-product post-249 status-publish instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                data-product-id="249">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/hans-backpack/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-hans-backpack-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-249-button"
                                           class="nm-wishlist-button nm-wishlist-item-249-button" data-product-id="249"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/hans-backpack/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Hans
                                                    Backpack</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>79.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/hans-backpack/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-248 status-publish last instock product_cat-essentials product_tag-essentials product_tag-travel has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                data-product-id="248">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/specs-sunglasses/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-specs-sunglasses-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-248-button"
                                           class="nm-wishlist-button nm-wishlist-item-248-button" data-product-id="248"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/specs-sunglasses/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Specs
                                                    Sunglasses</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>109.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/specs-sunglasses/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="nm-has-attributes product type-product post-247 status-publish first instock product_cat-essentials product_tag-essentials product_tag-kitchen product_tag-tableware has-post-thumbnail featured shipping-taxable purchasable product-type-variable has-default-attributes"
                                data-product-id="247">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/press-coffee-maker/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-press-coffee-maker-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-247-button"
                                           class="nm-wishlist-button nm-wishlist-item-247-button added"
                                           data-product-id="247" title="Add to Wishlist"><i
                                                class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/press-coffee-maker/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Press
                                                    Coffee Maker</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>39.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/press-coffee-maker/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                    <div class="nm-shop-loop-attributes">
                                        <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                                href="https://savoy.nordicmade.com/product/press-coffee-maker/?attribute_pa_color=blue"
                                                class="nm-shop-loop-attribute-link"><i style="background:#1e73be;"
                                                                                       class="nm-pa-color nm-pa-color-blue"></i></a><a
                                                href="https://savoy.nordicmade.com/product/press-coffee-maker/?attribute_pa_color=white"
                                                class="nm-shop-loop-attribute-link"><i style="background:#ffffff;"
                                                                                       class="nm-pa-color nm-pa-color-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product type-product post-246 status-publish instock product_cat-decoration product_tag-decor product_tag-interior has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="246">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/door-bumper/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-bumper.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-door-stop.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-246-button"
                                           class="nm-wishlist-button nm-wishlist-item-246-button" data-product-id="246"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/door-bumper/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Door
                                                    Bumper</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/door-bumper/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-245 status-publish last instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="245">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/laptop-bag/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-laptop-bag-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-245-button"
                                           class="nm-wishlist-button nm-wishlist-item-245-button" data-product-id="245"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/laptop-bag/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Laptop
                                                    Bag</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>19.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/laptop-bag/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-244 status-publish first instock product_cat-essentials product_tag-contemporary product_tag-essentials product_tag-kitchen has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="244">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/plain-glass-bottle/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-plain-glassbottle-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-244-button"
                                           class="nm-wishlist-button nm-wishlist-item-244-button added"
                                           data-product-id="244" title="Add to Wishlist"><i
                                                class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/plain-glass-bottle/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Plain
                                                    Glass Bottle</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>12.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/plain-glass-bottle/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="nm-has-attributes product type-product post-243 status-publish instock product_cat-decoration product_tag-decor product_tag-lighting has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes"
                                data-product-id="243">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/ceramic-tealight-holder/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-ceramic-tealight-holder-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-243-button"
                                           class="nm-wishlist-button nm-wishlist-item-243-button" data-product-id="243"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/ceramic-tealight-holder/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Ceramic
                                                    Tealight Holder</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>28.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/ceramic-tealight-holder/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                    <div class="nm-shop-loop-attributes">
                                        <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                                href="https://savoy.nordicmade.com/product/ceramic-tealight-holder/?attribute_pa_color=green"
                                                class="nm-shop-loop-attribute-link"><i style="background:#05ac92;"
                                                                                       class="nm-pa-color nm-pa-color-green"></i></a><a
                                                href="https://savoy.nordicmade.com/product/ceramic-tealight-holder/?attribute_pa_color=orange"
                                                class="nm-shop-loop-attribute-link"><i style="background:#dc9814;"
                                                                                       class="nm-pa-color nm-pa-color-orange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product type-product post-242 status-publish last instock product_cat-interior product_tag-bathroom product_tag-contemporary product_tag-interior has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="242">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/canvas-basket/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-canvas-basket-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-242-button"
                                           class="nm-wishlist-button nm-wishlist-item-242-button" data-product-id="242"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/canvas-basket/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Canvas
                                                    Basket</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>39.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/canvas-basket/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-241 status-publish first instock product_cat-essentials product_tag-bathroom product_tag-essentials product_tag-grooming has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="241">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/amber-body-lotion/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-300x372.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-300x372.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion.jpg 1280w"
                                                alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-amber-body-lotion.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-lily-body-lotion.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-241-button"
                                           class="nm-wishlist-button nm-wishlist-item-241-button added"
                                           data-product-id="241" title="Add to Wishlist"><i
                                                class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/amber-body-lotion/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Amber
                                                    Body Lotion</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>12.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/amber-body-lotion/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-240 status-publish instock product_cat-essentials product_tag-classic product_tag-essentials product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="240">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/havana-sunglasses/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-havana-sunglasses-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-240-button"
                                           class="nm-wishlist-button nm-wishlist-item-240-button" data-product-id="240"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/havana-sunglasses/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Havana
                                                    Sunglasses</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>89.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/havana-sunglasses/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                            <li class="product type-product post-239 status-publish last instock product_cat-bags-backpacks product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-product-id="239">
                                <div class="nm-shop-loop-product-wrap">

                                    <div class="nm-shop-loop-thumbnail">

                                        <a href="https://savoy.nordicmade.com/product/henry-backpack/"
                                           class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                            <img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack.jpg 1280w"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-450x558.jpg"
                                                data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-450x558.jpg"
                                                data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2.jpg 1280w"
                                                alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                                srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-henry-backpack-2.jpg 1280w">
                                        </a>
                                    </div>

                                    <div class="nm-shop-loop-details">
                                        <a href="#" id="nm-wishlist-item-239-button"
                                           class="nm-wishlist-button nm-wishlist-item-239-button" data-product-id="239"
                                           title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                        <div class="nm-shop-loop-title-price">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://savoy.nordicmade.com/product/henry-backpack/"
                                                    class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Henry
                                                    Backpack</a></h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>79.00</bdi></span></span>
                                        </div>

                                        <div class="nm-shop-loop-actions">
                                            <a href="https://savoy.nordicmade.com/product/henry-backpack/"
                                               class="nm-quickview-btn">Show more</a></div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                        <nav class="woocommerce-pagination nm-pagination nm-infload">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers"
                                       href="https://savoy.nordicmade.com/page/2/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header">2</a>
                                </li>
                                <li><a class="page-numbers"
                                       href="https://savoy.nordicmade.com/page/3/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header">3</a>
                                </li>
                                <li><a class="page-numbers"
                                       href="https://savoy.nordicmade.com/page/4/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header">4</a>
                                </li>
                                <li><a class="next page-numbers"
                                       href="https://savoy.nordicmade.com/page/2/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header"><i
                                            class="nm-font nm-font-angle-thin-right"></i></a></li>
                            </ul>
                        </nav>

                        <div class="nm-infload-link"><a
                                href="https://savoy.nordicmade.com/page/2/?shop_sidebar=1&amp;header_icons=1&amp;shop_search=header">&nbsp;</a>
                        </div>

                        <div class="nm-infload-controls scroll-mode">
                            <a href="#" class="nm-infload-btn">Load More</a>

                            <a href="#" class="nm-infload-to-top">All products loaded.</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
</x-app-layout>

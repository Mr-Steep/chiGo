<div class="">
    <div id="product-217"
         class="nm-single-product layout-default gallery-col-7 summary-col-5 thumbnails-vertical no-bg-color meta-layout-summary tabs-layout-summary product type-product post-217 status-publish first instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-simple">
        <div class="nm-single-product-bg clear" style="
    border-top: 1px solid #eee;
">

            <div class="nm-single-product-top">
                <div class="nm-row border-t border-gray-100">
                    <div class="col-xs-9">
                        <nav id="nm-breadcrumb" class="woocommerce-breadcrumb" itemprop="breadcrumb">
                            @foreach($breadcrumbs as $breadcrumb)
                                <a href="/">{{$breadcrumb->name}}</a>
                                <span class="delimiter">/</span>
                            @endforeach
                            {{$product->name}}
                        </nav>
                    </div>
                </div>
            </div>

            <div id="nm-shop-notices-wrap"></div>
            <div class="nm-single-product-showcase !border-gray-100 !border-t">
                <div class="nm-single-product-summary-row nm-row">
                    <div class="nm-single-product-summary-col col-xs-12">
                        <div
                            class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images lightbox-enabled zoom-enabled pagination-enabled"
                            data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;"><a href="#"
                                                                                                              class="woocommerce-product-gallery__trigger">🔍</a>

                            <div class="woocommerce-product-gallery__wrapper" style="height: 737.75px;">
                                <div
                                    data-thumb="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-100x100.jpg"
                                    data-thumb-alt=""
                                    class="woocommerce-product-gallery__image flex-active-slide is-ready"
                                    style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                    <a href="{{$product->image}}"><img
                                            width="680" height="844"
                                            src="{{$product->image}}"
                                            class="wp-post-image" alt="" decoding="async" title="product-emil-backpack"
                                            data-caption=""
                                            data-src="{{$product->image}}"
                                            data-large_image="{{$product->image}}"
                                            data-large_image_width="1280" data-large_image_height="1588" loading="lazy"
                                            srcset="{{$product->image}} 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-emil-backpack-940x1166.jpg 940w, {{$product->image}} 1280w"
                                            sizes="(max-width: 680px) 100vw, 680px" draggable="false"></a>
                                </div>
                            </div>

                            <ol class="flex-control-nav flex-control-thumbs">
                                <li><img src="{{$product->image}}"
                                        class="flex-active" draggable="false"></li>
                                <li><img src="{{$product->image}}"
                                        draggable="false"></li>
                            </ol>
                            <ul class="flex-direction-nav show">
                                <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1"
                                                             style="margin-top: -64px;">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next" href="#"
                                                             style="margin-top: -64px;">Next</a></li>
                            </ul>
                        </div>

                        <div class="summary entry-summary">
                            <div class="nm-product-summary-inner-col nm-product-summary-inner-col-1"><h1
                                    class="product_title entry-title">{{$product->name}}</h1>
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>{{$product->price}}</bdi></span>
                                </p>
                            </div>
                            <div class="nm-product-summary-inner-col nm-product-summary-inner-col-2">
                                <div class="woocommerce-product-details__short-description entry-content">
                                    <p>Designed for simplicity and made from high quality materials. Its sleek geometry
                                        and material combinations creates a modern personalized look.</p>
                                </div>


                                <form class="cart" action="https://savoy.nordicmade.com/product/emil-backpack/"
                                      method="post" enctype="multipart/form-data">

                                    <div class="nm-quantity-wrap qty-show">
                                        <label>Quantity</label>
                                        <label class="nm-qty-label-abbrev">Qty</label>

                                        <div class="quantity">
                                            <div class="nm-qty-minus nm-font nm-font-media-play flip !h-2">
                                                <a wire:click="decrementQuantity">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <input type="number" id="quantity_65ace297e855c" class="input-text qty text"
                                                   name="quantity" value="{{$quantity}}"
                                                   aria-label="Product quantity" size="4"
                                                   min="0" max="" step="1" pattern="[0-9]*">
                                            <div class="nm-qty-plus nm-font nm-font-media-play !h-2">
                                                <a wire:click="incrementQuantity">
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

                                    <button type="submit" name="add-to-cart" value="217"
                                            class="nm-simple-add-to-cart-button single_add_to_cart_button button alt">
                                        Add to cart
                                    </button>

                                </form>


                                <div class="nm-product-share-wrap has-share-buttons">
                                    <div class="nm-product-wishlist-button-wrap">
                                        <a href="#"
                                           class="nm-wishlist-button nm-wishlist-item-217-button"
                                           title="Add to Wishlist">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="gray"
                                                 viewBox="0 0 24 24" class="w-5 h-5">
                                                <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"/>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="nm-product-share">
                                        <a href="#"
                                           target="_blank" title="Share on Facebook">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="gray"/>
                                                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="gray"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                                      fill="gray"/>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            target="_blank" title="Share on Twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  class="w-5 h-5" viewBox="-5 0 20 20" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g  transform="translate(-385.000000, -7399.000000)" fill="gray">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a><a
                                            href="//pinterest.com/pin/create/button/?url=https://savoy.nordicmade.com/product/emil-backpack/&amp;media={{$product->image}}&amp;description=Emil+Backpack"
                                            target="_blank" title="Pin on Pinterest">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-5 h-5"  viewBox="0 0 20 20" version="1.1">
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-220.000000, -7399.000000)" fill="gray">
                                                        <g transform="translate(56.000000, 160.000000)">
                                                            <path d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239" >
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a></div>
                                </div>


                                <div id="nm-product-accordion">
                                    <div class="nm-product-accordion-panel nm-product-accordion-panel-description">
                                        <a href="#panel-description" class="nm-product-accordion-heading">
                                            Description </a>

                                        <div class="nm-product-accordion-content">
                                            <div class="nm-product-accordion-content-inner entry-content">

                                                <p>Authentic keffiyeh master cleanse. Fingerstache semiotics PBR quinoa.
                                                    Pop-up Godard kale chips, trust fund Neutra fingerstache paleo Wes
                                                    Anderson. Deep v single-origin coffee cred Thundercats beard.
                                                    Mumblecore before they sold out roof party biodiesel. Banksy swag
                                                    Portland readymade synth messenger bag cliche.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="nm-product-accordion-panel nm-product-accordion-panel-additional_information">
                                        <a href="#panel-additional_information" class="nm-product-accordion-heading">
                                            Additional information </a>

                                        <div class="nm-product-accordion-content" style="display: none;">
                                            <div class="nm-product-accordion-content-inner">

                                                <div class="nm-additional-information-inner">
                                                    <table class="woocommerce-product-attributes shop_attributes">
                                                        <tbody>
                                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_weight">
                                                            <th class="woocommerce-product-attributes-item__label">
                                                                Weight
                                                            </th>
                                                            <td class="woocommerce-product-attributes-item__value"><p>
                                                                    1.73 kg</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_dimensions">
                                                            <th class="woocommerce-product-attributes-item__label">
                                                                Dimensions
                                                            </th>
                                                            <td class="woocommerce-product-attributes-item__value"><p>
                                                                    100 x 37 x 100 cm</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_materials">
                                                            <th class="woocommerce-product-attributes-item__label">
                                                                Materials
                                                            </th>
                                                            <td class="woocommerce-product-attributes-item__value"><p>
                                                                    80% cotton, 20% linen</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_other-info">
                                                            <th class="woocommerce-product-attributes-item__label">Other
                                                                Info
                                                            </th>
                                                            <td class="woocommerce-product-attributes-item__value"><p>
                                                                    American heirloom jean shorts pug seitan
                                                                    letterpress.</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                            <th class="woocommerce-product-attributes-item__label">
                                                                Size
                                                            </th>
                                                            <td class="woocommerce-product-attributes-item__value"><p>
                                                                    One Size, XL, L, M, S</p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nm-product-accordion-panel nm-product-accordion-panel-reviews">
                                        <a href="#panel-reviews" class="nm-product-accordion-heading">
                                            Reviews <span>0</span> </a>

                                        <div class="nm-product-accordion-content" style="display: none;">
                                            <div class="nm-product-accordion-content-inner">
                                                <div id="reviews" class="woocommerce-Reviews">
                                                    <div id="comments">
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <a href="#" id="nm-review-form-btn" class="button border">Add a
                                                            review</a>

                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <h3 id="reply-title" class="comment-reply-title">Be the
                                                                    first to review “Emil Backpack” <small><a
                                                                            rel="nofollow"
                                                                            id="cancel-comment-reply-link"
                                                                            href="/product/emil-backpack/?zoom=1#respond"
                                                                            style="display:none;">Cancel
                                                                            reply</a></small></h3>
                                                                <form
                                                                    action="https://savoy.nordicmade.com/wp-comments-post.php"
                                                                    method="post" id="commentform" class="comment-form">
                                                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                                                                        <span class="required-field-message">Required fields are marked <span
                                                                                class="required">*</span></span></p>
                                                                    <p id="nm-comment-form-rating"
                                                                       class="comment-form-rating"><label for="rating">Your
                                                                            rating&nbsp;<span class="required">*</span></label>
                                                                    <p class="stars">
                                                                        <span>							<a
                                                                                class="star-1" href="#">1</a>							<a
                                                                                class="star-2" href="#">2</a>							<a
                                                                                class="star-3" href="#">3</a>							<a
                                                                                class="star-4" href="#">4</a>							<a
                                                                                class="star-5" href="#">5</a>						</span>
                                                                    </p><select name="rating" id="rating" required=""
                                                                                style="display: none;">
                                                                        <option value="">Rate…</option>
                                                                        <option value="5">Perfect</option>
                                                                        <option value="4">Good</option>
                                                                        <option value="3">Average</option>
                                                                        <option value="2">Not that bad</option>
                                                                        <option value="1">Very poor</option>
                                                                    </select></p><p class="comment-form-comment"><label
                                                                            for="comment">Your review&nbsp;<span
                                                                                class="required">*</span></label><textarea
                                                                            id="comment" name="comment" cols="45"
                                                                            rows="8" required=""></textarea></p>
                                                                    <p class="comment-form-author"><label for="author">Name&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="author" name="author" type="text"
                                                                            value="" size="30" required=""></p>
                                                                    <p class="comment-form-email"><label for="email">Email&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="email" name="email" type="email"
                                                                            value="" size="30" required=""></p>
                                                                    <p class="form-submit"><input name="submit"
                                                                                                  type="submit"
                                                                                                  id="submit"
                                                                                                  class="submit"
                                                                                                  value="Submit"> <input
                                                                            type="hidden" name="comment_post_ID"
                                                                            value="217" id="comment_post_ID">
                                                                        <input type="hidden" name="comment_parent"
                                                                               id="comment_parent" value="0">
                                                                    </p>
                                                                    <p style="display: none;"><input type="hidden"
                                                                                                     id="akismet_comment_nonce"
                                                                                                     name="akismet_comment_nonce"
                                                                                                     value="0f134a6e67">
                                                                    </p>
                                                                    <p style="display: none !important;">
                                                                        <label>Δ<textarea name="ak_hp_textarea"
                                                                                          cols="45" rows="8"
                                                                                          maxlength="100"></textarea></label><input
                                                                            type="hidden" id="ak_js_1" name="ak_js"
                                                                            value="1705829016329">
                                                                        <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
                                                                    </p>
                                                                </form>
                                                            </div><!-- #respond -->
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="nm-product-meta" class="product_meta">

                                    <div class="nm-row">
                                        <div class="col-xs-12">


                                            <span class="sku_wrapper">SKU: <span class="sku">73532-10</span></span>


                                            <span class="posted_in">Category:
                                                <a href="#" rel="tag">{{$product->category->name}}</a>
                                            </span>
                                            <span class="tagged_as">Tags: <a
                                                    href="#"
                                                    rel="tag">Contemporary</a>, <a
                                                    href="#" rel="tag">Travel</a></span>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <section id="nm-related" class="related products">

            <div class="nm-row">
                <div class="col-xs-12">

                    <h2>Related products</h2>

                    <ul class="nm-products products xsmall-block-grid-2 small-block-grid-2 medium-block-grid-4 large-block-grid-4 grid-default layout-default attributes-position-thumbnail has-action-links">


                        <li class="nm-has-attributes product type-product post-238 status-publish first instock product_cat-bags-backpacks product_tag-contemporary product_tag-travel has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-product-id="238">
                            <div class="nm-shop-loop-product-wrap">

                                <div class="nm-shop-loop-thumbnail">

                                    <a href="https://savoy.nordicmade.com/product/striped-canvas-bag/"
                                       class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                        <img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-450x558.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-450x558.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag.jpg 1280w"
                                            alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag.jpg 1280w"><img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-450x558.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-450x558.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2.jpg 1280w"
                                            alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-striped-canvas-bag-2.jpg 1280w">
                                    </a>
                                </div>

                                <div class="nm-shop-loop-details">
                                    <a href="#" id="nm-wishlist-item-238-button"
                                       class="nm-wishlist-button nm-wishlist-item-238-button" data-product-id="238"
                                       title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                    <div class="nm-shop-loop-title-price">
                                        <h3 class="woocommerce-loop-product__title"><a
                                                href="https://savoy.nordicmade.com/product/striped-canvas-bag/"
                                                class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Striped
                                                Canvas Bag</a></h3>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                                    </div>

                                    <div class="nm-shop-loop-actions">
                                        <a href="https://savoy.nordicmade.com/product/striped-canvas-bag/"
                                           class="nm-quickview-btn">Show more</a></div>
                                </div>

                                <div class="nm-shop-loop-attributes">
                                    <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                            href="https://savoy.nordicmade.com/product/striped-canvas-bag/?attribute_pa_color=blue"
                                            class="nm-shop-loop-attribute-link"><i style="background:#1e73be;"
                                                                                   class="nm-pa-color nm-pa-color-blue"></i></a><a
                                            href="https://savoy.nordicmade.com/product/striped-canvas-bag/?attribute_pa_color=orange"
                                            class="nm-shop-loop-attribute-link"><i style="background:#dc9814;"
                                                                                   class="nm-pa-color nm-pa-color-orange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="product type-product post-218 status-publish instock product_cat-essentials product_tag-contemporary product_tag-essentials has-post-thumbnail shipping-taxable purchasable product-type-simple"
                            data-product-id="218">
                            <div class="nm-shop-loop-product-wrap">

                                <div class="nm-shop-loop-thumbnail">

                                    <a href="https://savoy.nordicmade.com/product/textured-notebook/"
                                       class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                        <img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-450x558.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-450x558.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook.jpg 1280w"
                                            alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook.jpg 1280w"><img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-450x558.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-450x558.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2.jpg 1280w"
                                            alt="" sizes="(max-width: 350px) 100vw, 350px" width="350" height="434"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-600x744.jpg 600w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-textured-notebook-2.jpg 1280w">
                                    </a>
                                </div>

                                <div class="nm-shop-loop-details">
                                    <a href="#" id="nm-wishlist-item-218-button"
                                       class="nm-wishlist-button nm-wishlist-item-218-button" data-product-id="218"
                                       title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                    <div class="nm-shop-loop-title-price">
                                        <h3 class="woocommerce-loop-product__title"><a
                                                href="https://savoy.nordicmade.com/product/textured-notebook/"
                                                class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Textured
                                                Notebook</a></h3>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>79.00</bdi></span></span>
                                    </div>

                                    <div class="nm-shop-loop-actions">
                                        <a href="https://savoy.nordicmade.com/product/textured-notebook/"
                                           class="nm-quickview-btn">Show more</a></div>
                                </div>

                            </div>
                        </li>


                        <li class="nm-has-attributes product type-product post-213 status-publish instock product_cat-decoration product_tag-contemporary product_tag-decor product_tag-kitchen has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-product-id="213">
                            <div class="nm-shop-loop-product-wrap">

                                <div class="nm-shop-loop-thumbnail">

                                    <a href="https://savoy.nordicmade.com/product/colourful-coasters/"
                                       class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                        <img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-300x372.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-300x372.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters.jpg 1280w"
                                            alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters.jpg 1280w"><img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-300x372.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-300x372.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2.jpg 1280w"
                                            alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-colourful-coasters-2.jpg 1280w">
                                    </a>
                                </div>

                                <div class="nm-shop-loop-details">
                                    <a href="#" id="nm-wishlist-item-213-button"
                                       class="nm-wishlist-button nm-wishlist-item-213-button" data-product-id="213"
                                       title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                    <div class="nm-shop-loop-title-price">
                                        <h3 class="woocommerce-loop-product__title"><a
                                                href="https://savoy.nordicmade.com/product/colourful-coasters/"
                                                class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Colourful
                                                Coasters</a></h3>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>19.00</bdi></span></span>
                                    </div>

                                    <div class="nm-shop-loop-actions">
                                        <a href="https://savoy.nordicmade.com/product/colourful-coasters/"
                                           class="nm-quickview-btn">Show more</a></div>
                                </div>

                                <div class="nm-shop-loop-attributes">
                                    <div class="nm-shop-loop-attribute nm-shop-loop-attribute-color"><a
                                            href="https://savoy.nordicmade.com/product/colourful-coasters/?attribute_pa_color=green"
                                            class="nm-shop-loop-attribute-link"><i style="background:#05ac92;"
                                                                                   class="nm-pa-color nm-pa-color-green"></i></a><a
                                            href="https://savoy.nordicmade.com/product/colourful-coasters/?attribute_pa_color=orange"
                                            class="nm-shop-loop-attribute-link"><i style="background:#dc9814;"
                                                                                   class="nm-pa-color nm-pa-color-orange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="product type-product post-231 status-publish last instock product_cat-interior product_tag-bathroom product_tag-contemporary product_tag-grooming has-post-thumbnail shipping-taxable purchasable product-type-simple"
                            data-product-id="231">
                            <div class="nm-shop-loop-product-wrap">

                                <div class="nm-shop-loop-thumbnail">

                                    <a href="https://savoy.nordicmade.com/product/bathroom-set/"
                                       class="nm-shop-loop-thumbnail-link woocommerce-LoopProduct-link">
                                        <img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-300x372.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-300x372.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set.jpg 1280w"
                                            alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image  lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set.jpg 1280w"><img
                                            src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-300x372.jpg"
                                            data-src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-300x372.jpg"
                                            data-srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2.jpg 1280w"
                                            alt="" sizes="(max-width: 300px) 100vw, 300px" width="300" height="372"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image nm-shop-hover-image lazyloaded"
                                            srcset="https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-300x372.jpg 300w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-450x558.jpg 450w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-242x300.jpg 242w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-825x1024.jpg 825w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-680x844.jpg 680w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-700x868.jpg 700w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-220x273.jpg 220w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-140x174.jpg 140w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2-940x1166.jpg 940w, https://savoy.nordicmade.com/wp-content/uploads/2015/08/product-bathroom-set-2.jpg 1280w">
                                    </a>
                                </div>

                                <div class="nm-shop-loop-details">
                                    <a href="#" id="nm-wishlist-item-231-button"
                                       class="nm-wishlist-button nm-wishlist-item-231-button" data-product-id="231"
                                       title="Add to Wishlist"><i class="nm-font nm-font-heart-o"></i></a>
                                    <div class="nm-shop-loop-title-price">
                                        <h3 class="woocommerce-loop-product__title"><a
                                                href="https://savoy.nordicmade.com/product/bathroom-set/"
                                                class="nm-shop-loop-title-link woocommerce-LoopProduct-link">Bathroom
                                                Set</a></h3>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                                    </div>

                                    <div class="nm-shop-loop-actions">
                                        <a href="https://savoy.nordicmade.com/product/bathroom-set/"
                                           class="nm-quickview-btn">Show more</a></div>
                                </div>

                            </div>
                        </li>


                    </ul>

                </div>
            </div>

        </section>
    </div>

</div>

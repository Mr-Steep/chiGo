
<x-app-layout>


    <livewire:cart :side="false" />




    <script type="text/javascript" id="wc-cart-js-extra">
        /* <![CDATA[ */
        var wc_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "update_shipping_method_nonce": "81de45a033",
            "apply_coupon_nonce": "9e2d991709",
            "remove_coupon_nonce": "beb08b0967"
        };
    </script>

    <script type="text/javascript"
            src="https://savoy.nordicmade.com/wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=8.2.1"
            id="wc-cart-js"></script>
    <script type="text/javascript" id="nm-core-js-extra">
        var nm_wp_vars = {
            "themeUri": "https:\/\/savoy.nordicmade.com\/wp-content\/themes\/savoy",
            "ajaxUrl": "\/wp-admin\/admin-ajax.php",
            "woocommerceAjaxUrl": "\/?wc-ajax=%%endpoint%%",
            "searchUrl": "https:\/\/savoy.nordicmade.com\/?s=%%nmsearchkey%%",
            "pageLoadTransition": "0",
            "headerPlaceholderSetHeight": "1",
            "cartPanelQtyArrows": "1",
            "cartPanelQtyThrottleTimeout": "0",
            "cartPanelShowOnAtc": "1",
            "cartPanelHideOnAtcScroll": "1",
            "shopFiltersAjax": "1",
            "shopFiltersPopupAutoClose": "1",
            "shopAjaxUpdateTitle": "1",
            "shopImageLazyLoad": "1",
            "shopAttsSwapImage": "0",
            "shopAttsSwapImageRevert": "1",
            "shopAttsSwapImageOnTouch": "1",
            "shopScrollOffset": "70",
            "shopScrollOffsetTablet": "70",
            "shopScrollOffsetMobile": "70",
            "shopSearch": "1",
            "shopSearchHeader": "0",
            "shopSearchUrl": "https:\/\/savoy.nordicmade.com\/?post_type=product&s=%%nmsearchkey%%",
            "shopSearchMinChar": "2",
            "shopSearchAutoClose": "1",
            "searchSuggestions": "0",
            "searchSuggestionsInstant": "1",
            "searchSuggestionsMax": "6",
            "shopAjaxAddToCart": "1",
            "shopRedirectScroll": "1",
            "shopCustomSelect": "1",
            "quickviewLinks": {"thumb": "", "title": "", "link": "1"},
            "galleryZoom": "1",
            "galleryThumbnailsSlider": "0",
            "shopYouTubeRelated": "1",
            "productAccordionCloseOpen": "1",
            "checkoutTacLightbox": "1",
            "rowVideoOnTouch": "0",
            "wpGalleryPopup": "1",
            "touchHover": "1",
            "pushStateMobile": "1",
            "infloadBuffer": "0",
            "infloadBufferBlog": "0",
            "infloadPreserveScrollPos": "1",
            "infloadSnapbackCache": "1",
            "infloadSnapbackCacheLinks": ".nm-shop-loop-attribute-link, .product_type_variable, .product_type_grouped, .nm-shop-loop-thumbnail-link, .nm-shop-loop-title-link"
        };
    </script>
    <script type="text/javascript"
            src="https://savoy.nordicmade.com/wp-content/themes/savoy/assets/js/nm-core.min.js?ver=2.8.8"
            id="nm-core-js"></script>
    <script type="text/javascript"
            src="https://savoy.nordicmade.com/wp-content/themes/savoy/assets/js/nm-shop-cart.min.js?ver=2.8.8"
            id="nm-shop-cart-js"></script>


</x-app-layout>



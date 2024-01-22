@php

    $sliders =
    [
        [
            'image'=>"https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-pendant-lighting.jpg",
        ],
        [
            'image'=>"https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-wall-clock.jpg",
        ],
        [
            'image'=>"https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-basket.jpg",
        ]
    ];

@endphp


<section class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($sliders as $slider)
                <li class="splide__slide">
                    <div class="w-full h-[37rem] !bg-center !bg-cover" style="background: url('{{$slider['image']}}')">
                        <div class="nm-banner-content">
                            <div class="nm-banner-content-inner h_left v_center align_left">
                                <div class="nm-banner-text medium" style="max-width:41%;">
                                    <div class="nm-banner-text-inner nm-animated fadeIn" data-animate="fadeIn">
                                        <h1 class="nm-banner-title !text-gray-300">Contemporary Pendant Lighting</h1>
                                        <a class="nm-banner-link nm-banner-shop-link type-txt">Interior</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
            @endforeach

        </ul>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">


<script>
    new Splide('.splide', {
        type: 'loop',
        autoplay: 3000,
        speed: 1500,
    }).mount();
</script>
{{-- <div class="nm-page-full">
                    <div class="entry-content">
                        <div class="wpb-content-wrapper"><div style="max-width:1600px;" class="nm-row nm-row-boxed nm-row-max-width vc_row wpb_row  vc_custom_1439335872363"><div class="nm_column wpb_column vc_column_container col-sm-12 vc_custom_1439335914871"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="nm-banner-slider plugin-slick pagination-color-gray slick-slider slick-dots-inside has-pagination pagination-mobile-outside pagination-left slick-initialized" data-arrows="true" data-dots="true" data-autoplay="true" data-autoplay-speed="12000">
                                                <div aria-live="polite" class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 4800px; transform: translate3d(-1600px, 0px, 0px);"><div class="nm-banner-slide slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1600px;"><div class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-light subtitle-below alt-mobile-layout" style="background-color: #3d3d3b;"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-pendant-lighting.jpg" width="1600" height="678" alt="slider-pendant-lighting"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-pendant-lighting-alt.jpg" class="nm-banner-alt-image img" width="750" height="500" alt="slider-pendant-lighting-alt">
                                                                <div class="nm-banner-content">
                                                                    <div class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium" style="max-width:41%;">
                                                                            <div class="nm-banner-text-inner nm-animated" data-animate="fadeIn"><h1 class="nm-banner-title">Contemporary Pendant Lighting</h1><a href="https://savoy.nordicmade.com/product-category/interior/" class="nm-banner-link nm-banner-shop-link type-txt">Interior</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="nm-banner-slide slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 1600px;"><div class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-dark subtitle-below alt-mobile-layout" style="background-color: #eeeeee;"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-wall-clock.jpg" width="1600" height="678" alt="slider-wall-clock"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-wall-clock-alt.jpg" class="nm-banner-alt-image img" width="750" height="500" alt="slider-wall-clock-alt">
                                                                <div class="nm-banner-content">
                                                                    <div class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium" style="max-width:37%;">
                                                                            <div class="nm-banner-text-inner nm-animated fadeIn" data-animate="fadeIn"><h1 class="nm-banner-title">Minimal Rotating Disc Wall Clock</h1><a href="https://savoy.nordicmade.com/product-category/decoration/" class="nm-banner-link nm-banner-shop-link type-txt">Decoration</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="nm-banner-slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1600px;"><div class="nm-banner content-boxed full-width-parent image-type-fluid has-alt-image text-color-dark subtitle-below alt-mobile-layout" style="background-color: #eeeeee;"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-basket.jpg" width="1600" height="678" alt="slider-basket"><img src="https://savoy.nordicmade.com/wp-content/uploads/2015/08/slider-basket-alt.jpg" class="nm-banner-alt-image img" width="750" height="500" alt="slider-basket-alt">
                                                                <div class="nm-banner-content">
                                                                    <div class="nm-banner-content-inner h_left v_center align_left">
                                                                        <div class="nm-banner-text medium" style="max-width:40%;">
                                                                            <div class="nm-banner-text-inner nm-animated" data-animate="fadeIn"><h1 class="nm-banner-title">Bamboo Zigzag Pattern Basket</h1><a href="https://savoy.nordicmade.com/product-category/essentials/" class="nm-banner-link nm-banner-shop-link type-txt">Essentials</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div></div></div>

                                                <a class="slick-prev" style=""><i class="nm-font nm-font-angle-thin-left"></i></a><a class="slick-next" style=""><i class="nm-font nm-font-angle-thin-right"></i></a><ul class="slick-dots" style=""><li class="" aria-hidden="true"><button type="button" data-role="none">1</button></li><li aria-hidden="false" class="slick-active"><button type="button" data-role="none">2</button></li><li aria-hidden="true" class=""><button type="button" data-role="none">3</button></li></ul></div></div></div></div></div>
                        </div>
                    </div>
                </div>
--}}

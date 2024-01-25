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


<section class="splide splide-banner">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($sliders as $slider)
                <li class="splide__slide">
                    <div class="w-full h-[calc(100vh-18rem)] !bg-center !bg-cover" style="background: url('{{$slider['image']}}')">
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



<style>
    .splide__arrow{
        display: none;
    }
    .splide-banner:hover{
        .splide__arrow{
            display: flex;
        }
    }
</style>

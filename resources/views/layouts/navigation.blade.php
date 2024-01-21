{{--@props(['cartItems'=>[]])--}}

{{--<nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-100">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="shrink-0 flex items-center">--}}
{{--                    <a href="{{ route('dashboard') }}">--}}
{{--                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
{{--                        {{ __('messages.Home') }}--}}
{{--                    </x-nav-link>--}}
{{--                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('messages.Dashboard') }}--}}
{{--                    </x-nav-link>--}}

{{--                    <x-store-navigation align="right" width="48">--}}
{{--                        <x-slot name="trigger">--}}
{{--                            {{ __('messages.Categories') }}--}}
{{--                        </x-slot>--}}
{{--                    </x-store-navigation>--}}

{{--                    <x-nav-link>--}}
{{--                    <div class="flex justify-center items-center">--}}
{{--                        <a href="{{route('catalog.index')}}" type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">--}}
{{--                            {{ __('messages.Catalog') }}--}}
{{--                        </a>--}}
{{--                    </div>--}}



{{--                        <a href="{{route('submit.order')}}"--}}
{{--                           class="flex items-center justify-center rounded-md border border-transparent bg-green-700 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-green-800">--}}

{{--                        </a>--}}
{{--                    </x-nav-link>--}}


{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- Settings Dropdown -->--}}
{{--            <div class="hidden sm:flex sm:items-center sm:ms-6">--}}

{{--                <form id="changeLanguageForm" action="{{ route('change.language') }}" method="post">--}}
{{--                    @method('post')--}}
{{--                    @csrf--}}
{{--                    <select name="locale" id="localeSelector" onchange="changeLanguage()">--}}
{{--                        <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>--}}
{{--                        <option value="ru" {{ session('locale') == 'ru' ? 'selected' : '' }}>Русский</option>--}}
{{--                    </select>--}}
{{--                </form>--}}

{{--                <script>--}}
{{--                    function changeLanguage() {--}}
{{--                        document.getElementById('changeLanguageForm').submit();--}}
{{--                    }--}}
{{--                </script>--}}





{{--                <x-dropdown align="right" width="48">--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            @auth--}}
{{--                                <div>{{ Auth::user()->name }}</div>--}}
{{--                            @endauth--}}
{{--                            <div class="ms-1">--}}
{{--                                <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 96.000000 96.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">--}}
{{--                                        <path d="M395 791 c-130 -60 -165 -225 -70 -329 l33 -36 -44 -28 c-54 -34 -100 -96 -119 -161 -22 -75 -20 -87 15 -87 21 0 30 5 30 16 0 108 125 224 240 224 115 0 240 -116 240 -224 0 -11 9 -16 30 -16 35 0 37 12 15 87 -19 65 -65 127 -119 161 l-44 28 33 36 c71 77 72 195 2 275 -61 69 -161 92 -242 54z m155 -61 c45 -23 80 -80 80 -130 0 -76 -74 -150 -151 -150 -73 0 -149 76 -149 150 0 48 35 107 78 129 48 26 93 26 142 1z"/>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="content">--}}
{{--                        @auth--}}
{{--                            <x-dropdown-link :href="route('profile.edit')">--}}
{{--                                {{ __('Profile') }}--}}
{{--                            </x-dropdown-link>--}}

{{--                            <!-- Authentication -->--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}
{{--                                <x-dropdown-link :href="route('logout')"--}}
{{--                                                 onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                    {{ __('Log Out') }}--}}
{{--                                </x-dropdown-link>--}}
{{--                            </form>--}}
{{--                        @else--}}
{{--                            <x-dropdown-link :href="route('login')">--}}
{{--                                {{ __('Login') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                            <x-dropdown-link :href="route('register')">--}}
{{--                                {{ __('Register') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                        @endauth--}}
{{--                    </x-slot>--}}
{{--                </x-dropdown>--}}
{{--                <x-shopping-card align="right" width="48">--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            <svg class="h-6 w-6" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
{{--                                <path d="M3.74181 20.5545C4.94143 22 7.17414 22 11.6395 22H12.3607C16.8261 22 19.0589 22 20.2585 20.5545M3.74181 20.5545C2.54219 19.1091 2.95365 16.9146 3.77657 12.5257C4.36179 9.40452 4.65441 7.84393 5.7653 6.92196M3.74181 20.5545C3.74181 20.5545 3.74181 20.5545 3.74181 20.5545ZM20.2585 20.5545C21.4581 19.1091 21.0466 16.9146 20.2237 12.5257C19.6385 9.40452 19.3459 7.84393 18.235 6.92196M20.2585 20.5545C20.2585 20.5545 20.2585 20.5545 20.2585 20.5545ZM18.235 6.92196C17.1241 6 15.5363 6 12.3607 6H11.6395C8.46398 6 6.8762 6 5.7653 6.92196M18.235 6.92196C18.235 6.92196 18.235 6.92196 18.235 6.92196ZM5.7653 6.92196C5.7653 6.92196 5.7653 6.92196 5.7653 6.92196Z" stroke="#1C274C" stroke-width="1.5"/>--}}
{{--                                <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}
{{--                </x-shopping-card>--}}
{{--            </div>--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-me-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
{{--                {{ __('Home') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200">--}}
{{--            @auth--}}
{{--            <div class="px-4">--}}
{{--                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
{{--                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--            </div>--}}

{{--                <div class="mt-3 space-y-1">--}}
{{--                    <x-responsive-nav-link :href="route('profile.edit')">--}}
{{--                        {{ __('Profile') }}--}}
{{--                    </x-responsive-nav-link>--}}

{{--                    <!-- Authentication -->--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}
{{--                        <x-responsive-nav-link :href="route('logout')"--}}
{{--                                               onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </x-responsive-nav-link>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <x-responsive-nav-link :href="route('login')">--}}
{{--                    {{ __('Login') }}--}}
{{--                </x-responsive-nav-link>--}}
{{--                <x-responsive-nav-link :href="route('register')">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-responsive-nav-link>--}}
{{--            @endauth--}}
{{--                <x-shopping-card>--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-4 font-medium rounded-md text-gray-600 hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            {{ __('Bucket') }}--}}
{{--                            <svg class="h-6 w-6 mx-2" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
{{--                                <path d="M3.74181 20.5545C4.94143 22 7.17414 22 11.6395 22H12.3607C16.8261 22 19.0589 22 20.2585 20.5545M3.74181 20.5545C2.54219 19.1091 2.95365 16.9146 3.77657 12.5257C4.36179 9.40452 4.65441 7.84393 5.7653 6.92196M3.74181 20.5545C3.74181 20.5545 3.74181 20.5545 3.74181 20.5545ZM20.2585 20.5545C21.4581 19.1091 21.0466 16.9146 20.2237 12.5257C19.6385 9.40452 19.3459 7.84393 18.235 6.92196M20.2585 20.5545C20.2585 20.5545 20.2585 20.5545 20.2585 20.5545ZM18.235 6.92196C17.1241 6 15.5363 6 12.3607 6H11.6395C8.46398 6 6.8762 6 5.7653 6.92196M18.235 6.92196C18.235 6.92196 18.235 6.92196 18.235 6.92196ZM5.7653 6.92196C5.7653 6.92196 5.7653 6.92196 5.7653 6.92196Z" stroke="currentColor" stroke-width="1.5"/>--}}
{{--                                <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}
{{--                </x-shopping-card>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<header id="nm-header" class="nm-header centered resize-on-scroll clear">
    <div class="nm-header-inner">
        <div class="nm-row">
            <div class="nm-header-logo">
                <a href="https://savoy.nordicmade.com/">
                    <h2>PandaGo</h2>
                    {{--                                <img src="https://savoy.nordicmade.com/wp-content/themes/savoy/assets/img/logo@2x.png" class="nm-logo" width="232" height="33" alt="Savoy">--}}
                    {{--                                <img src="https://savoy.nordicmade.com/wp-content/themes/savoy/assets/img/logo-light@2x.png" class="nm-alt-logo" width="232" height="33" alt="Savoy">--}}
                </a>
            </div>
            <div class="nm-main-menu-wrap col-xs-6">
                <nav class="nm-main-menu">
                    <ul id="nm-main-menu-ul" class="nm-menu">
                        <li class="nm-menu-offscreen menu-item-default">
                                        <span class="nm-menu-cart-count count nm-count-zero"
                                              style="opacity: 1;">0</span> <a href="#" id="nm-mobile-menu-button"
                                                                              class="clicked">
                                <div class="nm-menu-icon"><span class="line-1"></span><span
                                        class="line-2"></span><span class="line-3"></span></div>
                            </a>
                        </li>
                        <li id="menu-item-20"
                            class="megamenu col-2 shop-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current_page_ancestor menu-item-has-children current-menu-item current_page_item menu-item-20 bridge-height-set">
                            <a href="/" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-3169"
                            class="megamenu full col-5 mobile-thumbnail-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3169 bridge-height-set">
                            <a href="https://savoy.nordicmade.com/?header_category_menu=1">Categories
                                <span
                                    class="label">New</span></a>
                            <div class="sub-menu">
                                <div class="nm-sub-menu-bridge" style="height: 2px;"></div>
                                <ul class="nm-sub-menu-ul">
                                    <li id="menu-item-3170"
                                        class="shop-ajax-link shop-redirect-link menu-item menu-item-type-taxonomy menu-item-object-product_cat nm-menu-item-has-image menu-item-3170">
                                        <a href="https://savoy.nordicmade.com/product-category/bags-backpacks/"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-bags-backpacks.jpg"
                                                loading="eager" alt="" width="160" height="160"
                                                class="nm-menu-item-image"><span
                                                class="nm-menu-item-image-title">Bags &amp; Backpacks</span></a>
                                    </li>
                                    <li id="menu-item-3171"
                                        class="shop-ajax-link shop-redirect-link menu-item menu-item-type-taxonomy menu-item-object-product_cat nm-menu-item-has-image menu-item-3171">
                                        <a href="https://savoy.nordicmade.com/product-category/decoration/"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-decoration.jpg"
                                                loading="eager" alt="" width="160" height="160"
                                                class="nm-menu-item-image"><span
                                                class="nm-menu-item-image-title">Decoration</span></a>
                                    </li>
                                    <li id="menu-item-3172"
                                        class="shop-ajax-link shop-redirect-link menu-item menu-item-type-taxonomy menu-item-object-product_cat nm-menu-item-has-image menu-item-3172">
                                        <a href="https://savoy.nordicmade.com/product-category/essentials/"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-essentials.jpg"
                                                loading="eager" alt="" width="160" height="160"
                                                class="nm-menu-item-image"><span
                                                class="nm-menu-item-image-title">Essentials</span></a>
                                    </li>
                                    <li id="menu-item-3173"
                                        class="shop-ajax-link shop-redirect-link menu-item menu-item-type-taxonomy menu-item-object-product_cat nm-menu-item-has-image menu-item-3173">
                                        <a href="https://savoy.nordicmade.com/product-category/interior/"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-interior.jpg"
                                                loading="eager" alt="" width="160" height="160"
                                                class="nm-menu-item-image"><span
                                                class="nm-menu-item-image-title">Interior</span></a>
                                    </li>
                                    <li id="menu-item-3174"
                                        class="shop-ajax-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item current_page_item nm-menu-item-has-image menu-item-3174">
                                        <a href="https://savoy.nordicmade.com/" aria-current="page"><img
                                                src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-all.jpg"
                                                loading="eager" alt="" width="160" height="160"
                                                class="nm-menu-item-image"><span
                                                class="nm-menu-item-image-title">Shop All</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="menu-item-271"
                            class="megamenu col-3 menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-271 bridge-height-set">
                            <a href="{{route('catalog.index')}}">{{__('messages.catalog')}}</a>
                            <div class="sub-menu">
                                <div class="nm-sub-menu-bridge" style="height: 2px;"></div>
                                <ul class="nm-sub-menu-ul">
                                    <li id="menu-item-397"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-397">
                                        <a href="#">Headers</a>
                                        <div class="sub-menu">
                                            <ul class="nm-sub-menu-ul">
                                                <li id="menu-item-2712"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2712">
                                                    <a href="https://savoy.nordicmade.com/?header_icons=all&amp;shop_search=header">Header
                                                        – Icons <span
                                                            class="label bubble">New</span></a>
                                                </li>
                                                <li id="menu-item-1068"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1068">
                                                    <a href="https://savoy.nordicmade.com/?shop_search=header">Header
                                                        – Instant Search <span
                                                            class="label bubble">New</span></a></li>
                                                <li id="menu-item-1066"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1066">
                                                    <a href="https://savoy.nordicmade.com/?header=menu-centered&amp;shop_sidebar=1&amp;grid=2&amp;header_icons=1&amp;shop_search=header">Header
                                                        – Menu Centered</a></li>
                                                <li id="menu-item-340"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-340">
                                                    <a href="https://savoy.nordicmade.com/?header=default">Header
                                                        – Split 70/30</a></li>
                                                <li id="menu-item-2713"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2713">
                                                    <a href="https://savoy.nordicmade.com/?header=stacked-logo-centered">Header
                                                        – Stacked</a></li>
                                                <li id="menu-item-1070"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1070">
                                                    <a href="https://savoy.nordicmade.com/?header=stacked-centered">Header
                                                        – Stacked Centered</a></li>
                                                <li id="menu-item-1069"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1069">
                                                    <a href="https://savoy.nordicmade.com/?top_bar=1">Header
                                                        – Top Bar</a></li>
                                                <li id="menu-item-3180"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-3180">
                                                    <a href="https://savoy.nordicmade.com/?fullscreen=1&amp;header_icons=all&amp;shop_search=header"
                                                       aria-current="page">Header – Transparent Full</a>
                                                </li>
                                                <li id="menu-item-342"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-342">
                                                    <a href="https://savoy.nordicmade.com/?header_transparency=1&amp;header_icons=1&amp;shop_search=header">Header
                                                        – Transparent</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-425"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-425">
                                        <a href="#">Page Elements</a>
                                        <div class="sub-menu">
                                            <ul class="nm-sub-menu-ul">
                                                <li id="menu-item-477"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-477">
                                                    <a href="https://savoy.nordicmade.com/elements/accordions/">Accordions</a>
                                                </li>
                                                <li id="menu-item-476"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-476">
                                                    <a href="https://savoy.nordicmade.com/elements/banners/">Banners</a>
                                                </li>
                                                <li id="menu-item-475"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-475">
                                                    <a href="https://savoy.nordicmade.com/elements/banner-slider/">Banner
                                                        Slider</a></li>
                                                <li id="menu-item-474"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474">
                                                    <a href="https://savoy.nordicmade.com/elements/buttons/">Buttons</a>
                                                </li>
                                                <li id="menu-item-473"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-473">
                                                    <a href="https://savoy.nordicmade.com/elements/charts-progress-bars/">Charts
                                                        &amp; Progress Bars</a></li>
                                                <li id="menu-item-472"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-472">
                                                    <a href="https://savoy.nordicmade.com/elements/feature-boxes/">Feature
                                                        Boxes</a></li>
                                                <li id="menu-item-471"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471">
                                                    <a href="https://savoy.nordicmade.com/elements/google-maps/">Google
                                                        Maps</a></li>
                                                <li id="menu-item-470"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-470">
                                                    <a href="https://savoy.nordicmade.com/elements/lightboxes/">Lightboxes</a>
                                                </li>
                                                <li id="menu-item-467"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-467">
                                                    <a href="https://savoy.nordicmade.com/elements/posts/">Posts</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-426"
                                        class="nm-menu-text-hide menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-426">
                                        <a href="#">Page Elements II</a>
                                        <div class="sub-menu">
                                            <ul class="nm-sub-menu-ul">
                                                <li id="menu-item-469"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-469">
                                                    <a href="https://savoy.nordicmade.com/elements/headings-separators/">Headings
                                                        &amp; Separators</a></li>
                                                <li id="menu-item-2946"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2946">
                                                    <a href="https://savoy.nordicmade.com/elements/instagram-gallery/">Instagram
                                                        Gallery</a></li>
                                                <li id="menu-item-419"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-419">
                                                    <a href="https://savoy.nordicmade.com/elements/products/">Products</a>
                                                </li>
                                                <li id="menu-item-3463"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3463">
                                                    <a href="https://savoy.nordicmade.com/elements/product-reviews/">Product
                                                        Reviews <span
                                                            class="label bubble">New</span></a>
                                                </li>
                                                <li id="menu-item-405"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405">
                                                    <a href="https://savoy.nordicmade.com/elements/product-categories/">Product
                                                        Categories</a></li>
                                                <li id="menu-item-465"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465">
                                                    <a href="https://savoy.nordicmade.com/elements/tabs-toggles/">Tabs
                                                        &amp; Toggles</a></li>
                                                <li id="menu-item-464"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-464">
                                                    <a href="https://savoy.nordicmade.com/elements/team/">Team</a>
                                                </li>
                                                <li id="menu-item-463"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-463">
                                                    <a href="https://savoy.nordicmade.com/elements/testimonials/">Testimonials</a>
                                                </li>
                                                <li id="menu-item-462"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-462">
                                                    <a href="https://savoy.nordicmade.com/elements/video-player/">Video
                                                        Player</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

            </div>

            <div class="nm-right-menu-wrap col-xs-6">
                <nav class="nm-right-menu">
                    <ul id="nm-right-menu-ul" class="nm-menu">

                        <li>

                            <form id="changeLanguageForm" action="{{ route('change.language') }}" method="post">
                                @method('post')
                                @csrf
                                <select name="locale" id="localeSelector"
                                        onchange="document.getElementById('changeLanguageForm').submit()">
                                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English
                                    </option>
                                    <option value="ru" {{ session('locale') == 'ru' ? 'selected' : '' }}>Русский
                                    </option>
                                </select>
                            </form>

                        </li>


                        <li class="nm-menu-search menu-item-default has-icon">
                            <a href="#" id="nm-menu-search-btn" aria-label="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-1" viewBox="0 0 24 24" fill="none">
                                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nm-menu-wishlist menu-item-default has-icon" aria-label="Wishlist">
                            <a href="https://savoy.nordicmade.com/wishlist/">
                                <svg class=" w-6 h-6 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
                                    <path
                                        d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"
                                    />
                                </svg>
                            </a>
                        </li>
                        <li class="nm-menu-account menu-item-default has-icon" aria-label="My account">
                            <a href="https://savoy.nordicmade.com/my-account/" id="nm-menu-account-btn">
                                <svg class="nm-myaccount-icon nm-font nm-font-head w-6 h-6"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                            </a></li>
                        <li class="nm-menu-cart menu-item-default has-icon">
                            <a href="#" id="nm-menu-cart-btn">
                                                <span  class="!absolute count !top-2 !left-8 ">
                                                        {{0}}
                                                </span>
                                <svg class="w-6 h-6 nm-menu-cart-icon nm-font nm-font-cart" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                    <path
                                        d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                        stroke="#1C274C" stroke-width="1.5"/>
                                    <path
                                        d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                        stroke="#1C274C" stroke-width="1.5"/>
                                    <path
                                        d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                                        stroke="#1C274C" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>

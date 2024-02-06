<div>
    <header id="nm-header" class="nm-header centered resize-on-scroll clear">
        <div class="nm-header-inner">
            <div class="nm-row">
                <div class="nm-header-logo">
                    <a href="/">
                        <h2 class="font-serif">ChiGo</h2>
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
                                <a>{{__('messages.categories')}}
                                    <span class="label">New</span></a>
                                <div class="sub-menu">
                                    <div class="nm-sub-menu-bridge" style="height: 2px;"></div>
                                    <ul class="nm-sub-menu-ul">
                                        <li id="menu-item-3174"
                                            class="shop-ajax-link menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item current_page_item nm-menu-item-has-image menu-item-3174">
                                            <a href="#"><img
                                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/08/category-thumb-all.jpg"
                                                    loading="eager" alt="" width="160" height="160"
                                                    class="nm-menu-item-image"><span
                                                    class="nm-menu-item-image-title">Shop All</span></a>
                                        </li>
                                        @foreach($categoriesTree as $category)
                                            <li id="menu-item-3170"
                                                class="shop-ajax-link shop-redirect-link menu-item menu-item-type-taxonomy menu-item-object-product_cat nm-menu-item-has-image menu-item-3170">
                                                <a href="#"><img
                                                        src="{{$category->image}}"
                                                        loading="eager" alt="" width="160" height="160"
                                                        class="nm-menu-item-image"><span
                                                        class="nm-menu-item-image-title">{{$category->name}}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="megamenu col-3 menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-271 bridge-height-set">
                                <a href="{{route('catalog.index')}}">{{__('messages.catalog')}}</a>
                                <div class="sub-menu">
                                    <div class="nm-sub-menu-bridge"></div>
                                    <ul class="nm-sub-menu-ul !flex !flex-row">
                                        @foreach($categoriesTree as $category)
                                            <li id="menu-item-{{$category->id}}"
                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-{{$category->id}}">
                                                <a href="#">{{$category->name}}</a>

                                                @if($category->children)
                                                    <div class="sub-menu">
                                                        <ul class="nm-sub-menu-ul">
                                                            @foreach($category->children as $children)
                                                                <li id="menu-item-{{$children->id}}" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$children->id}}">
                                                                    <a href="#">{{$children->name}}
{{--                                                                        <span class="label bubble">New</span>--}}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                    </div>

                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>

                <div class="nm-right-menu-wrap col-xs-6">
                    <nav class="nm-right-menu">
                        <ul id="nm-right-menu-ul" class="nm-menu !text-gray-800">

                            <li>
                                <form id="changeLanguageForm" action="{{ route('change.language') }}" method="post">
                                    @method('post')
                                    @csrf
                                    <select name="locale" id="localeSelector"
                                            class="w-24 border-0 p-4 !focus:border-0 !outline-none !focus:outline-none"
                                            onchange="document.getElementById('changeLanguageForm').submit()">
                                        <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English
                                        </option>
                                        <option value="ru" {{ session('locale') == 'ru' ? 'selected' : '' }}>Русский
                                        </option>
                                    </select>
                                </form>

                            </li>


                            <li class="nm-menu-search menu-item-default has-icon">
                                <a wire:click="toggleTopSearch" id="nm-menu-search-btn" aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-[1.2]" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>



                                <div>
                                    <!-- drawer component -->
                                    <div id="drawer-top-search"
                                         class="fixed  {{$hiddenTopSearch?"hidden":""}} top-0 left-0 right-0 z-50 w-full p-4 transition-transform bg-white dark:bg-gray-800 transform-none"
                                         tabindex="-1" aria-labelledby="drawer-top-label" aria-modal="true"
                                         role="dialog">

                                        <div class="col-xs-12">
                                            <div class="flex items-center text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-[1.2]"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
{{--                                                <style>--}}
{{--                                                    input:focus {--}}
{{--                                                        outline: none !important;--}}
{{--                                                        /*border-color: transparent !important;*/--}}
{{--                                                        box-shadow: none !important;--}}
{{--                                                    }--}}
{{--                                                </style>--}}
                                                <input type="text" wire:model.live="topSearch" autocomplete="off"
                                                       class="no-border w-full !border-t-0 !border-x-0 !border-b-1  !focus:outline-none !focus:border-transparent "
                                                       placeholder="Search products">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     wire:click="toggleTopSearch"
                                                     class="w-6 h-6 stroke-[1.2]"
                                                     viewBox="-0.5 0 25 25">
                                                    <path d="M3 21.32L21 3.32001" stroke="currentColor"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M3 3.32001L21 21.32" stroke="currentColor"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div id="nm-search-suggestions" class="show">

                                                @if($topSearch)
                                                    <div class="nm-search-suggestions-inner">
                                                        <div id="nm-search-suggestions-notice" class="show press-enter">
                                                            <span
                                                                class="txt-press-enter">press <u>Enter</u> to search</span>
                                                            <span class="txt-has-results">Showing all results:</span>
                                                            <span class="txt-no-results">No products found.</span>
                                                        </div>
                                                        <ul id="nm-search-suggestions-product-list"
                                                            class="block-grid-single-row xsmall-block-grid-1 small-block-grid-1 medium-block-grid-5 large-block-grid-6">
                                                            @foreach($topSearchProduct as  $product)
                                                                <li>
                                                                    <a href="{{route('products.show', $product)}}">
                                                                        <img src="{{$product->image}}"
                                                                             width="350" height="434">
                                                                        <h3>{{$product->name}}</h3>
                                                                        <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">$</span>
                                                                            {{$product->price}}
                                                                        </bdi>
                                                                    </span>
                                                                </span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @else

                                                    <div class="nm-search-suggestions-inner">
                                                        <div id="nm-search-suggestions-notice" class="show no-results">
                                                            <span
                                                                class="txt-press-enter">press <u>Enter</u> to search</span>
                                                            <span class="txt-has-results">Showing all results:</span>
                                                            <span class="txt-no-results">No products found.</span>
                                                        </div>
                                                        <ul id="nm-search-suggestions-product-list"
                                                            class="block-grid-single-row xsmall-block-grid-1 small-block-grid-1 medium-block-grid-5 large-block-grid-6"></ul>
                                                    </div>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>





                            </li>
                            <li class="nm-menu-wishlist menu-item-default has-icon" aria-label="Wishlist">
                                <a href="{{route('wishlist.index')}}">
                                    @if($quantityWishList)
                                     <span class="!absolute count !top-2 !left-9 text-sm text-amber-500">
                                                        {{ $quantityWishList}}
                                     </span>

                                    @endif
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-[1.2]" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z"
                                              stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nm-menu-account menu-item-default has-icon" aria-label="My account">


                                <a>
                                    <svg id="dropdownInformationButton"
                                         onclick="$('#dropdownInformation').toggle()"
                                         data-dropdown-toggle="dropdownInformation" class="nm-myaccount-icon nm-font nm-font-head w-6 h-6 stroke-[1.2]"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                            stroke="currentColor"  stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </a>


                                <!-- Dropdown menu -->
                                <div id="dropdownInformation" class="z-10 right-3 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
{{--                                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">--}}
{{--                                        <div>Bonnie Green</div>--}}
{{--                                        <div class="font-medium truncate">name@flowbite.com</div>--}}
{{--                                    </div>--}}
{{--                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">--}}
{{--                                        <li>--}}
{{--                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="py-2">--}}
{{--                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>--}}
{{--                                    </div>--}}
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                                @auth
                                        <x-dropdown-link :href="route('dashboard.index')">
                                            {{ __('Dashboard') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                            <div class="py-2">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')"
                                                                     onclick="event.preventDefault();
                                                                     this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </div>

                                    @else
                                        <x-dropdown-link :href="route('login')">
                                            {{ __('Login') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('register')">
                                            {{ __('Register') }}
                                        </x-dropdown-link>
                                    @endauth
                                    </ul>

                                </div>


                            </li>
                            <li class="nm-menu-cart menu-item-default has-icon">
                                <a href="#" id="nm-menu-cart-btn">
                                                <span class="!absolute count !top-2 !left-9 text-sm !text-amber-500">
                                                        {{$quantityProducts}}
                                                </span>
                                    <svg class="w-6 h-6 nm-menu-cart-icon nm-font nm-font-cart stroke-[1.2]"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                                            stroke="currentColor" stroke-linecap="round"/>
                                        <path
                                            d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                            stroke="currentColor"/>
                                        <path
                                            d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                            stroke="currentColor" />
                                        <path
                                            d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                                            stroke="currentColor" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>

</div>

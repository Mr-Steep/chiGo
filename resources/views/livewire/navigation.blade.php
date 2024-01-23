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
                                <a href="/?header_category_menu=1">{{__('messages.categories')}}
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
                            <li id="menu-item-271"
                                class="megamenu col-3 menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-271 bridge-height-set">
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
                        <ul id="nm-right-menu-ul" class="nm-menu">

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
                                <a href="#" id="nm-menu-search-btn" aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-1" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nm-menu-wishlist menu-item-default has-icon" aria-label="Wishlist">
                                <a href="/wishlist/">
                                    <svg class=" w-6 h-6 stroke-1" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"
                                        />
                                    </svg>
                                </a>
                            </li>
                            <li class="nm-menu-account menu-item-default has-icon" aria-label="My account">
                                <a href="/my-account/" id="nm-menu-account-btn">
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
                                                <span class="!absolute count !top-2 !left-8 ">
                                                        {{$quantityProducts}}
                                                </span>
                                    <svg class="w-6 h-6 nm-menu-cart-icon nm-font nm-font-cart"
                                         xmlns="http://www.w3.org/2000/svg"
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

</div>

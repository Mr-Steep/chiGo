@props(['links'])

<x-app-layout>

    <div class="nm-page-default nm-row">
        <div class="nm-page-default-col col-xs-12">
            <div id="post-10" class="post-10 page type-page status-publish hentry">
                <div class="woocommerce">
                    <nav class="woocommerce-MyAccount-navigation">
                        <div class="nm-MyAccount-user">
                            <div class="nm-MyAccount-user-image">
                                <img alt="" src="https://secure.gravatar.com/avatar/e7a13ad82c621cab2f752206d9b62da4?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/e7a13ad82c621cab2f752206d9b62da4?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60" loading="lazy" decoding="async">        </div>

                            <div class="nm-MyAccount-user-info">
            <span class="nm-username">
                Hello <strong>{{auth()->user()->name}}</strong></span>

                                <a href="https://savoy.nordicmade.com/my-account/customer-logout/?_wpnonce=4d0471b019" class="nm-logout-button button border">Logout</a>
                            </div>
                        </div>

                        <ul>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard {{request()->segment(2) ? '': 'is-active'}}">
                                <a href="{{route('dashboard.index')}}">Dashboard</a>
                            </li>
                            @foreach($links as $link)
                                <li class="woocommerce-MyAccount-navigation-link {{request()->segment(2) == $link ? 'is-active': ''}} ">
                                    <a href="{{route('dashboard.show', $link)}}">    {{ ucfirst($link) }}</a>
                                </li>

                            @endforeach
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                <a href="/">Log out</a>
                            </li>
                        </ul>
                    </nav>

                    {{$slot}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

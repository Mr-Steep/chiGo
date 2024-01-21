{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="mr-3 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">--}}
{{--                {{ __('Register?') }}--}}
{{--            </a>--}}

{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

{{--@if(session('notice'))--}}
{{--    <div class="alert alert-warning">--}}
{{--        {{ session('notice') }}--}}
{{--    </div>--}}
{{--@endif--}}
<x-app-layout>
    <style>
        header{
            background: white !important;
        }

    </style>
    <div class="nm-page-default nm-row bg-gray-100 pt-16 mt-4">
        <div class="nm-page-default-col col-xs-12">
            <div id="post-10" class="post-10 page type-page status-publish hentry">
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div id="customer_login" class="nm-myaccount-login">
                        <div class="nm-myaccount-login-inner">

                            <div id="nm-login-wrap" class="inline slide-up fade-in">
                                <h2>Sign In</h2>

                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form class="login" method="POST" action="{{ route('login') }}">
                                        @csrf


                                    <p class="form-row form-row-wide">
                                        <x-input-label for="email" :value="__('Email')"/>
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                      :value="old('email')" required autofocus autocomplete="username"/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <x-input-label for="password" :value="__('Password')"/>

                                        <x-text-input id="password" class="block mt-1 w-full"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="current-password"/>

                                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                    </p>


                                    <p class="form-row form-group">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>

                                        @if (Route::has('password.request'))
                                            <span class="woocommerce-LostPassword lost_password">
                                             <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        </span>
                                        @endif

                                    </p>

                                    <p class="form-actions">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                               value="706ec5420a"><input type="hidden" name="_wp_http_referer"
                                                                         value="/my-account/">
                                        <button type="submit"
                                                class="woocommerce-button button woocommerce-form-login__submit"
                                                name="login" value="Sign In">Sign In
                                        </button>

                                    </p>
                                    <div class="nm-login-form-divider"><span>Or</span></div>


                                    <a href="{{ route('register') }}" id="nm-show-register-button"
                                       class="button border">Create an account</a>


                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

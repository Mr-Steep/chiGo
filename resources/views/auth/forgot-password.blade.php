{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}


<x-app-layout>
    <style>
        header {
            background: white !important;
        }

    </style>
    <div class="nm-page-wrap">
        <div class="nm-nm-page-wrap-inner">
            <div class="nm-page-default nm-row bg-gray-100 pt-16 mt-4">
                <div class="nm-page-default nm-row">
                    <div class="nm-page-default-col col-xs-12">
                        <div id="post-10" class="post-10 page type-page status-publish hentry">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="nm-myaccount-lost-reset-password">

                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                        <h2>Lost your password? Please enter your username or email address. You will
                                            receive a link to create a new password via email.</h2>

                                        <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        </p>

                                        <div class="clear"></div>


                                        <p class="form-actions">
                                            <input type="hidden" name="wc_reset_password" value="true">
                                            <button type="submit" class="woocommerce-Button button" value="Reset password">Reset password</button>
                                        </p>

                                        <input type="hidden" id="woocommerce-lost-password-nonce"
                                               name="woocommerce-lost-password-nonce" value="8a68587661"><input
                                            type="hidden" name="_wp_http_referer" value="/my-account/lost-password/">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    <div class="nm-page-default nm-row">
        <div class="nm-page-default-col col-xs-12">
            <div id="post-355" class="entry-content post-355 page type-page status-publish hentry">
                <div class="woocommerce">
                    <style type="text/css">
                        .woocommerce-error {
                            margin: 55px auto -9px;
                            text-align: center;
                        }

                        @media all and (max-width: 550px) {
                            .woocommerce-error {
                                margin-bottom: -36px;
                            }
                        }
                    </style>

                    <div class="nm-order-track">
                        <div class="nm-order-track-top">
                            <h1>Order Tracking</h1>

                            <p>To track your order please enter your Order ID in the box below and press the "Track"
                                button. This was given to you on your receipt and in the confirmation email you should
                                have received.</p>
                        </div>

                        <div class="nm-order-track-form">
                            <form action="https://savoy.nordicmade.com/order-tracking/" method="post"
                                  class="woocommerce-form woocommerce-form-track-order track_order">


                                <p class="form-row form-row-wide"><label for="orderid">Order ID</label> <input
                                        class="input-text" type="text" name="orderid" id="orderid" value=""
                                        placeholder="Found in your order confirmation email."></p>
                                <p class="form-row form-row-wide"><label for="order_email">Billing email</label> <input
                                        class="input-text" type="text" name="order_email" id="order_email" value=""
                                        placeholder="Email you used during checkout."></p>


                                <p class="form-actions">
                                    <button type="submit" class="button" name="track" value="Track">Track</button>
                                </p>
                                <input type="hidden" id="woocommerce-order-tracking-nonce"
                                       name="woocommerce-order-tracking-nonce" value="58a72fd769"><input type="hidden"
                                                                                                         name="_wp_http_referer"
                                                                                                         value="/order-tracking/">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

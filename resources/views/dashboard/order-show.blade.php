@props(["order"])
<x-dashboard-layout>

    <div class="woocommerce-MyAccount-content">

        <div class="woocommerce-notices-wrapper"></div>

        <div class="flex items-center !justify-between bg-[#282828] my-4">
            <div>
                <p class="!p-0 !px-2 !m-0 !w-full nm-order-info">Order #<mark class="order-number">{{$order->id}}</mark> was placed on <mark class="order-date">{{$order->created_at}}</mark> and is currently <mark class="order-status">{{$order->status->name}}</mark>.</p>
            </div>
           <div class="">
               <form method="POST" action="{{ route('order.delete',$order) }}">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class=" button alt !bg-red-500"
                           name="woocommerce_checkout_place_order"
                           value="Place order" data-value="Place order">Cancel
                       Order
                   </button>
               </form>
           </div>
        </div>

        <section class="woocommerce-order-details">

            <h2 class="woocommerce-order-details__title">Order details</h2>

            <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                <thead>
                <tr>
                    <th class="woocommerce-table__product-name product-name">Product</th>
                    <th class="woocommerce-table__product-table product-total">Total</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($order->orderItems as $orderItem)

                        <tr class="woocommerce-table__line-item order_item">

                            <td class="woocommerce-table__product-name product-name">
                                <a href="https://savoy.nordicmade.com/product/emil-backpack/">{{$orderItem->product->name}}</a>
                                <strong class="product-quantity">×&nbsp;{{$orderItem->quantity}}</strong>
                            </td>

                            <td class="woocommerce-table__product-total product-total">
                        <span class="woocommerce-Price-amount amount">
                            <bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$orderItem->product->price * $orderItem->quantity}}</bdi>
                        </span>
                            </td>

                        </tr>
                    @endforeach


                </tbody>

                <tfoot>
                <tr>
                    <th scope="row">Subtotal:</th>
                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->getOrderCostProducts()}}</span></td>
                </tr>
                <tr>
                    <th scope="row">Shipping:</th>
                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->shipping->shipping_cost}}</span>&nbsp;<small class="shipped_via">{{$order->shipping->name}}</small></td>
                </tr>
                <tr>
                    <th scope="row">Payment method:</th>
                    <td>Check payments</td>
                </tr>
                <tr>
                    <th scope="row">Total:</th>
                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->total_amount}}</span></td>
                </tr>
                </tfoot>
            </table>

        </section>
        <section class="woocommerce-customer-details">
            <a href="{{route('order.index', $order)}}" class=" button alt !bg-green-500" name="woocommerce_checkout_place_order" value="Place order" data-value="Place order">
                CONTINUE
            </a>
        </section>



        <section class="woocommerce-customer-details">


            <section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
                <div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">


                    <h2 class="woocommerce-column__title">Billing address</h2>

                    <address>
                        Vasili Yurevich<br>ddsfadsf<br>Prushinskich 36/57<br>22<br>Minsk<br>Minsk<br>220112<br>Belarus
                        <p class="woocommerce-customer-details--phone">0292702250</p>

                        <p class="woocommerce-customer-details--email">vasyayurevich@gmail.com</p>
                    </address>


                </div><!-- /.col-1 -->

                <div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
                    <h2 class="woocommerce-column__title">Shipping address</h2>
                    <address>
                        Vasili Yurevich<br>ddsfadsf<br>Prushinskich 36/57<br>22<br>Minsk<br>Minsk<br>220112<br>Belarus
                    </address>
                </div><!-- /.col-2 -->

            </section><!-- /.col2-set -->



        </section>
    </div>
</x-dashboard-layout>



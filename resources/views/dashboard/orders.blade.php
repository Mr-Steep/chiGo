
<x-dashboard-layout>

    <div class="woocommerce-MyAccount-content">
        <div class="woocommerce-notices-wrapper"></div>

        <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
            <thead>
            <tr>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span class="nobr">Order</span></th>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Date</span></th>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Status</span></th>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Total</span></th>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Actions</span></th>
            </tr>
            </thead>

            <tbody>

            @foreach($orders as $order )

                <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                        data-title="Order">
                        <a href="{{route('dashboard.order.show', $order->id)}}">#{{$order->id}} </a>

                    </td>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date"
                        data-title="Date">
                        <time datetime="2024-01-25T20:41:08+00:00">{{$order->created_at}}</time>

                    </td>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status" data-title="Status">
                        {{$order->status->name}}
                    </td>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                        data-title="Total">
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">$</span>{{$order->total_amount}}</span> for {{$order->orderItems->sum('quantity')}} items
                    </td>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                        data-title="Actions">
                        <a href="{{route('dashboard.order.show', $order->id)}}" class="woocommerce-button button view">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>

</x-dashboard-layout>



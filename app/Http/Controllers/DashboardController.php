<?php

namespace App\Http\Controllers;


use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {

        return view('dashboard.index');
    }

    public function show(Request $request)
    {
        $segment = $request->segment(2);
        $compact = [];
        switch ($segment){
            case 'orders':
                $compact['orders'] = Order::getOrders();
                break;

        }

        return view("dashboard.$segment", $compact);
    }

    public function orderShow(Order $order)
    {
        return view("dashboard.order-show",compact('order'));

    }
    public function store(Request $request)
    {
    }

    public function destroy(Address $address)
    {
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Address;
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

        return view("dashboard.$segment", compact('segment'));

    }

    public function store(Request $request)
    {
    }

    public function destroy(Address $address)
    {
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AddressController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'house' => 'required',
            'floor' => 'required',
            'flat' => 'required',
            'zip_code' => 'required',
        ]);

        $address = new Address([
            'country'  => $request->input('country'),
            'city'     => $request->input('city'),
            'street'   => $request->input('street'),
            'house'    => $request->input('house'),
            'floor'    => $request->input('floor'),
            'flat'     => $request->input('flat'),
            'zip_code' => $request->input('zip_code'),
            'user_id'  => Auth::id(),
        ]);

        $address->save();

        return redirect()->route('addresses.index')->with('success', 'Address created successfully.');
    }

    public function destroy(Address $address)
    {
        if (Auth::id() !== $address->user_id) {
            return redirect()->route('addresses.index')->with('error', 'Unauthorized action.');
        }
        $address->delete();

        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully.');
    }
}

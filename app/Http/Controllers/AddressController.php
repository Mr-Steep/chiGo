<?php

namespace App\Http\Controllers;


use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'country'  => 'required',
            'city'     => 'required',
            'street'   => 'required',
            'house'    => 'required',
            'flat'     => 'required',
            'zip_code' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('open-add', true);
        }

        $address = new Address([
            'country'     => $request->input('country'),
            'city'        => $request->input('city'),
            'street'      => $request->input('street'),
            'house'       => $request->input('house'),
            'flat'        => $request->input('flat'),
            'zip_code'    => $request->input('zip_code'),
            'user_id'     => Auth::id()
        ]);

        $address->save();

        return redirect()->back()->with('success', 'Address created successfully.');
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

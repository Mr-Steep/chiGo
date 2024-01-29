<?php

namespace App\Livewire;

use App\Services\AppService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Address extends Component
{

    public bool $is_active  = false;
    public $addresses;
    public $currentAddress;


    #[Validate('required')]
    public $country = '';

    #[Validate('required')]
    public $city = '';


    #[Validate('required')]
    public $street = '';

    #[Validate('required')]
    public $house = '';

    #[Validate('required')]
    public $flat = '';
    #[Validate('required')]
    public $zip_code = '';


    public function save()
    {
        $this->is_active = true;

        $validate                = $this->validate();
        $validate['session_id']  = session()->getId();
        If(Auth::check()){
            $validate['user_id'] = Auth::user()->getAuthIdentifier();
        }

        $address = new \App\Models\Address($validate);
        $address->save();
        $this->is_active = false;
        return redirect()->back()->with('success', 'Address created successfully.');
    }


    public function setAddress($addressId){
        $cart =  AppService::getCurrentCart();
        $cart->address_id = $addressId;
        $cart->save();
    }

    public function setActive($is_active = false)
    {
        $this->is_active = $is_active;
    }

    public function render()
    {
        $cart =  AppService::getCurrentCart();
        $this->currentAddress = $cart->address_id;
        $this->addresses  = AppService::getAddresses();
        return view("livewire.address");
    }
}




<div>

    <div class="flex justify-between">
        <p class="woocommerce-shipping-destination"><strong>Address:</strong></p>
        @if ($errors->has('address'))
                <p class="absolute mt-6 text-xs text-red-600">{{ $errors->first('address') }}</p>
        @endif
        @if (!$currentAddress)
            <button type="button" id="add-tab" wire:click="setActive(1)"
                    class="tab text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center ">
                Add Address
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>

        @endif

    </div>


    <div class="relative overflow-x-auto">

        <fieldset>

            @foreach($addresses as $address)
                <div class="flex items-center mb-4">
                    <input id="country-option-2" wire:click="setAddress({{$address->id}})" {{$currentAddress == $address->id ? 'checked':''}}
                           type="radio" name="countries" value="{{$address->name}}" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{$address->full_address}}
                    </label>
                </div>
            @endforeach

        </fieldset>
    </div>

    <div id="tab-content">

        <div class="{{$is_active ?"": "hidden"}} tab-content p-4 rounded-lg bg-gray-50 flex flex-col" id="add" role="tabpanel" aria-labelledby="contacts-tab">
          <button wire:click="setActive">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 float-right" viewBox="-0.5 0 25 25">
                  <path d="M3 21.32L21 3.32001" stroke="grey" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M3 3.32001L21 21.32" stroke="grey" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
          </button>

            <form wire:submit="save">
                @csrf
                <div class="grid items-end gap-6 mb-6 md:grid-cols-2">
                    <div class="relative">
                        <label for="country"
                               class="block mb-1 text-sm font-medium text-gray-900 ">Country</label>
                        <select id="country" name="country" wire:model="country"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-grey-700 focus:border-grey-700 block w-full p-2.5 ">
                            <option selected value="">Select</option>
                            <option value="BY">Belarus</option>
                            <option value="RU">Russia</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        @error('country')
                        <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="relative">
                        <label for="city"
                               class="block mb-1 text-sm font-medium text-gray-900 ">City</label>
                        <select id="city" name="city"  wire:model="city"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-grey-700 focus:border-grey-700 block w-full p-2.5 ">
                            <option selected value="">Select</option>
                            <option value="MSK">Minsk</option>
                            <option value="VTB">Vitebsk</option>
                            <option value="GRD">Grodno</option>
                            <option value="MGL">Mogilev</option>
                        </select>
                        @error('city')
                        <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="street"
                               class="block mb-1 text-sm font-medium text-gray-900 ">Street</label>
                        <input type="text" wire:model="street"
                               id="street" name="street" value="{{ old('street') }}"
                               class=" @error('title') is-invalid @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 !bg-transparent rounded-lg !border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-700 peer"
                               placeholder=" "/>
                        @error('street')
                        <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="relative flex justify-between">
                        <div class="relative">
                            <label for="house"
                                   class="block mb-1 text-sm font-medium text-gray-900 ">House</label>
                            <select id="house" name="house" wire:model="house"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-grey-700 focus:border-grey-700 block p-2.5 w-40 lg:w-[4.5rem] ">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            @error('house')
                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="flat"
                                   class="block mb-1 text-sm font-medium text-gray-900 ">Flat</label>
                            <select id="flat" name="flat"  wire:model="flat"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-grey-700 focus:border-grey-700 block p-2.5  w-40 lg:w-[4.5rem] ">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            @error('flat')
                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                            @enderror
                        </div>


                    </div>


                    <div class="relative">
                        <label for="zip_code"
                               class="block mb-1 text-sm font-medium text-gray-900 ">Zip/Postal
                            Code</label>
                        <input type="text"   wire:model="zip_code"
                               id="zip_code" name="zip_code" value="{{ old('zip_code') }}"
                               class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 !bg-transparent rounded-lg !border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-700 peer"
                               placeholder=" "/>
                        @error('zip_code')
                        <p class="absolute mt-1 text-xs text-red-600 dark:text-red-400">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" name="calc_shipping" value="1"
                        class="button w-full">
                    Add
                </button>
            </form>

        </div>
    </div>

</div>

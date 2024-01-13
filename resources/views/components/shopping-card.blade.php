@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'cartItems'=>[]])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'right':
        default:
            $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
            break;
    }

    switch ($width) {
        case '48':
            $width = 'w-48';
            break;
    }
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
         style="display: none;"
         @click="open = false">
        <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div class="pointer-events-auto w-screen max-w-md">
                            <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                        <div class="ml-3 flex h-7 items-center">
                                            <button type="button"
                                                    class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="absolute -inset-0.5"></span>
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                     stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                @if(count($cartProducts))
                                                    @foreach($cartProducts as $cartProduct)
                                                        <li class="flex py-6">
                                                            <div
                                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                                <img src="{{$cartProduct->product->image}}"
                                                                     alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                                     class="h-full w-full object-cover object-center">
                                                            </div>

                                                            <div class="ml-4 flex flex-1 flex-col">
                                                                <div>
                                                                    <div
                                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                                        <h3>
                                                                            <a href="#">{{$cartProduct->product->name}}</a>
                                                                        </h3>
                                                                        <p class="ml-4">
                                                                            ${{$cartProduct->product->price}}</p>
                                                                    </div>
                                                                    <div
                                                                        class="flex justify-between text-sm font-medium text-gray-600">
                                                                        <h3 class="mt-1"> {{ __('Quantity') }}
                                                                        </h3>
                                                                        <p class="ml-4">{{$cartProduct->quantity}}</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="flex flex-1 items-end justify-between text-sm">
                                                                    <p class="text-gray-500"> {{ __('Quantity') }} {{$cartProduct->quantity}}</p>

                                                                            <form method="POST" action="{{ route('cart.remove',$cartProduct) }}">
                                                                                @method('delete')
                                                                                @csrf
                                                                                <x-dropdown-link :href="route('cart.remove', $cartProduct)"
                                                                                                 onclick="event.preventDefault();
                                                                                                  this.closest('form').submit();">
                                                                                    {{ __('Remove') }}
                                                                                </x-dropdown-link>
                                                                            </form>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <p class="mt-44 text-2xl text-black">Shopping cart is empty</p>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <p>Subtotal</p>
                                        <p>$262.00</p>
                                    </div>
                                    <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at
                                        checkout.</p>
                                    <div class="mt-6">
                                        <a href="{{route('submit.order')}}"
                                           class="flex items-center justify-center rounded-md border border-transparent bg-green-700 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-green-800">
                                            Checkout
                                        </a>
                                    </div>
                                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                        <p>
                                            or
                                            <button type="button"
                                                    class="font-medium text-green-600 hover:text-green-500">
                                                Continue Shopping
                                                <span aria-hidden="true"> &rarr;</span>
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

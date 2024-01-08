@props(['align' => 'top', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

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
        $width = 'w-full';
        break;
}

$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <a @click="open = ! open" class="pt-6 py-5 {{$classes}}">
        {{ $trigger }}
    </a>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative z-50 mt-2 {{ $width }} rounded-md shadow-lg bg-white {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
            <div class="grid grid-cols-2 gap-x-8 gap-y-10 p-8">
                <div class="col-start-2 grid grid-cols-2 gap-x-8">
                    <div class="group relative text-base sm:text-sm">
                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                        </div>
                        <a href="#" class="mt-6 block font-medium text-gray-900">
                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                            New Arrivals
                        </a>
                        <p aria-hidden="true" class="mt-1 text-gray-500 ">Shop now</p>
                    </div>
                    <div class="group relative text-base sm:text-sm">
                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                        </div>
                        <a href="#" class="mt-6 block font-medium text-gray-900">
                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                            Basic Tees
                        </a>
                        <p aria-hidden="true" class="mt-1 text-gray-500 ">Shop now</p>
                    </div>

                </div>
                <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                    <div>
                        <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                        <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 text-gray-500 sm:mt-4 sm:space-y-4">
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Tops</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Dresses</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Pants</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Denim</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Sweaters</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">T-Shirts</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Jackets</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Activewear</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Browse All</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                        <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 text-gray-500  space-y-6 sm:mt-4 sm:space-y-4">
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Watches</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Wallets</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Bags</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Sunglasses</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Hats</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Belts</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                        <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 text-gray-500  sm:mt-4 sm:space-y-4">
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Full Nelson</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">My Way</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Counterfeit</a>
                            </li>
                            <li class="flex">
                                <a href="#" class="hover:text-gray-800">Significant Other</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
    </div>
</div>

<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are
                        finally here</h1>
                    <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from
                        the harsh elements of a world that doesn't care if you live or die.</p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                             class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div
                                            class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                           class="inline-block rounded-md border border-transparent bg-green-700 px-8 py-3 text-center font-medium text-white hover:bg-green-800">Shop
                            Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                                 alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                 class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                    </div>
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg"
                                 alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                 class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Self-Improvement
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                    </div>
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg"
                                 alt="Collection of four insulated travel bottles on wooden shelf."
                                 class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Travel
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

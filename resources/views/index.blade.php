@props(['products'])

<x-app-layout>
    <div class="nm-page-overflow">
        <div class="nm-page-wrap">

            <div class="nm-page-wrap-inner">


                @include('blocks.slider')


                @include('blocks.categories')

                <livewire:top100 />

            </div> <!-- .nm-page-wrap-inner -->
        </div> <!-- .nm-page-wrap -->
    </div> <!-- .nm-page-overflow -->
</x-app-layout>

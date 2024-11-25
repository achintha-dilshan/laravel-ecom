<x-web::layout>

    <x-slot:head>
        @vite(['resources/js/product.js'])
    </x-slot:head>

    {{-- breadcrumb --}}
    <x-web::breadcrumb>
        <x-web::breadcrumb-item href="/shop">Shop</x-web::breadcrumb-item>
        <x-web::breadcrumb-item :isCurrent="true">Product</x-web::breadcrumb-item>
    </x-web::breadcrumb>

    {{-- product overview --}}
    <div class="grid grid-cols-1 gap-10 mt-6 md:grid-cols-7">
        {{-- product image slider --}}
        <div class="col-span-1 md:col-span-4">
            <div class="p-4 space-y-4 bg-white rounded-lg shadow-sm">
                {{-- main slider --}}
                @include('web.pages.product.partials.main-slider')

                {{-- thumb slider --}}
                @include('web.pages.product.partials.thumb-slider')

            </div>
        </div>

        {{-- product details --}}
        @include('web.pages.product.partials.product-details')
    </div>

    {{-- product description and reviews --}}
    <div class="p-4 mt-12 bg-white shadow-sm rounded-xl">
        <div class="mb-4 border-b border-gray-200">
            <ul class="flex items-center justify-center -mb-px text-sm font-semibold"
                id="tab"
                data-tabs-toggle="#tab-content"
                data-tabs-active-classes="text-primary-600 hover:text-primary-700 !border-primary-600 !border-b-2"
                data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-300 border-b-2 border-transparent"
                role="tablist">
                <li role="presentation">
                    <button class="inline-block p-4"
                            id="description-tab"
                            data-tabs-target="#description"
                            type="button"
                            role="tab"
                            aria-controls="description"
                            aria-selected="false">Description</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4"
                            id="reviews-tab"
                            data-tabs-target="#reviews"
                            type="button"
                            role="tab"
                            aria-controls="reviews"
                            aria-selected="false">Reviews</button>
                </li>
            </ul>
        </div>
        <div id="tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50"
                 id="description"
                 role="tabpanel"
                 aria-labelledby="description-tab">

                {{-- product description --}}
                @include('web.pages.product.partials.product-description')

            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50"
                 id="reviews"
                 role="tabpanel"
                 aria-labelledby="reviews-tab">

                {{-- reviews --}}
                @include('web.pages.product.partials.reviews')
            </div>
        </div>
    </div>

    {{-- add review modal --}}
    @include('web.pages.product.partials.review-modal')

    {{-- you may also like --}}
    @include('web.pages.product.partials.recommended-products-section')

</x-web::layout>

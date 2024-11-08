<x-web::layout>

    {{-- breadcrumb --}}
    <x-web::breadcrumb>
        <x-web::breadcrumb-item href="/some">My Account</x-web::breadcrumb-item>
        <x-web::breadcrumb-item :isCurrent="true">Account</x-web::breadcrumb-item>
    </x-web::breadcrumb>

    {{-- search result text --}}
    <div class="py-4 mb-12 border-b-2 border-gray-300">
        <h1 class="relative text-2xl font-semibold text-gray-700 ">
            Showing results for "Electronics"</h1>
    </div>

    <div class="gap-8 mb-10 lg:flex sm:mb-20">

        {{-- filters --}}
        <div class="hidden w-full space-y-8 max-w-60 lg:block">
            {{-- categories --}}
            @include('web.pages.shop.partials.categories')

            {{-- filters --}}
            @include('web.pages.shop.partials.filters')
        </div>

        {{-- products --}}
        <div class="space-y-8">
            {{-- toolbar --}}
            @include('web.pages.shop.partials.toolbar')

            {{-- products --}}
            @include('web.pages.shop.partials.products')

            {{-- pagination --}}
            @include('web.pages.shop.partials.pagination')
        </div>
    </div>

    {{-- mobile drawer --}}
    @include('web.pages.shop.partials.mobile-drawer')

</x-web::layout>

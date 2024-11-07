<x-web::layout>

    {{-- breadcrumb --}}
    <x-web::breadcrumb>
        <x-web::breadcrumb-item href="/some">My Account</x-web::breadcrumb-item>
        <x-web::breadcrumb-item :isCurrent="true">Account</x-web::breadcrumb-item>
    </x-web::breadcrumb>

    {{-- search result text --}}
    <div class="py-4 mb-12 border-b-2 border-gray-300">
        <h1 class="relative text-2xl font-semibold text-gray-600 ">
            Showing results for "Electronics"</h1>
    </div>

    <div class="gap-8 lg:flex">

        {{-- filters --}}
        <div class="hidden w-full p-4 bg-white rounded-lg shadow-sm max-w-60 lg:block"></div>

        <div class="col-span-4">
            <div class="px-6 py-4 mb-8 bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-between gap-4">
                    <div class="lg:hidden md:min-w-60">
                        <a href="javascript:void(0)"
                           title="Filter"
                           class="items-center justify-start block gap-2 p-2 text-sm text-gray-500 rounded-full sm:flex sm:rounded-none md:p-0">
                            <x-lucide-filter class="w-4 h-4" />
                            <span class="hidden md:inline-block">Filter Results</span>
                        </a>
                    </div>

                    {{-- result stats --}}
                    <div class="text-sm text-gray-500">Showing 20 of 249 results</div>

                    {{-- sorting --}}
                    <div class="md:min-w-60">
                        <a href="javascript:void(0)"
                           title="Sort By"
                           data-dropdown-toggle="sortByDropdown">
                            <div
                                 class="items-center justify-end block gap-2 p-2 text-sm text-gray-500 rounded-full sm:flex sm:rounded-none sm:p-0">
                                <x-lucide-arrow-up-down class="w-4 h-4" />
                                <span class="hidden md:inline-block">Sort By: Price (Low to High)</span>
                            </div>
                        </a>

                        <x-dropdown id="sortByDropdown">
                            <ul class="py-2">
                                <li>
                                    <x-dropdown-link>Latest</x-dropdown-link>
                                </li>
                                <li>
                                    <x-dropdown-link>Popularity</x-dropdown-link>
                                </li>
                                <li>
                                    <x-dropdown-link>Rating</x-dropdown-link>
                                </li>
                                <li>
                                    <x-dropdown-link>Price (Low to High)</x-dropdown-link>
                                </li>
                                <li>
                                    <x-dropdown-link>Price (High to Low)</x-dropdown-link>
                                </li>
                            </ul>
                        </x-dropdown>
                    </div>

                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-4 gap-y-8">
                @for ($i = 0; $i < 20; $i++)
                    <x-web::product-card />
                @endfor
            </div>
        </div>
    </div>

</x-web::layout>

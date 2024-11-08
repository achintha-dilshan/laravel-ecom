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

    <div class="gap-8 lg:flex">

        {{-- filters --}}
        <div class="hidden w-full space-y-8 max-w-60 lg:block">
            {{-- categories --}}
            <div class="p-4 bg-white rounded-lg shadow-sm">
                <h4 class="py-2 mb-4 font-bold text-gray-700 border-b">Categories</h4>
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="shopCategoryDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Electronics</span>
                    </button>
                    <ul id="shopCategoryDropdown"
                        class="py-2 ml-5 space-y-1">
                        <li>
                            <a href="javascript:void(0)">
                                <div class="flex items-center gap-2 p-1">
                                    <span class="text-sm text-gray-700 hover:text-primary-700 hover:underline">Back
                                        Covers</span>
                                    <span class="text-sm text-gray-400 shrink-0">(86)</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="flex items-center gap-2 p-1">
                                    <span
                                          class="text-sm text-gray-700 hover:text-primary-700 hover:underline">Earphones</span>
                                    <span class="text-sm text-gray-400 shrink-0">(198)</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="flex items-center gap-2 p-1">
                                    <span class="text-sm text-gray-700 hover:text-primary-700 hover:underline">USB
                                        Cables</span>
                                    <span class="text-sm text-gray-400 shrink-0">(34)</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- filters --}}
            <div class="p-4 bg-white rounded-lg shadow-sm">
                <h4 class="py-2 mb-4 font-bold text-gray-700 border-b">Filters</h4>
                {{-- color --}}
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="colorFilterDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Color</span>
                    </button>
                    <ul id="colorFilterDropdown"
                        class="py-2 mb-4 ml-5 space-y-1">
                        <li class="flex items-center gap-3">
                            <input id="red"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="red" class="text-sm text-gray-700">Red</label>
                        </li>
                        <li class="flex items-center gap-3">
                            <input id="green"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="green" class="text-sm text-gray-700">Green</label>
                        </li>
                        <li class="flex items-center gap-3">
                            <input id="blue"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="blue" class="text-sm text-gray-700">Blue</label>
                        </li>
                    </ul>
                </div>
                {{-- price --}}
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="priceFilterDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Price</span>
                    </button>
                    <div id="priceFilterDropdown"
                         class="py-2 mb-4 ml-5">
                        <div class="flex items-center gap-2">
                            <div>
                                <label for="priceRangeMin"
                                       class="sr-only">From:</label>
                                <input type="number"
                                       id="priceRangeMin"
                                       placeholder="Min"
                                       class="block w-full p-2 text-sm text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500" />
                            </div>

                            <div>
                                <label for="priceRangeMax"
                                       class="sr-only">To:</label>
                                <input type="number"
                                       id="priceRangeMax"
                                       placeholder="Max"
                                       class="block w-full p-2 text-sm text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- rating --}}
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="ratingFilterDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Rating</span>
                    </button>
                    <ul id="ratingFilterDropdown"
                        class="py-2 ml-5 space-y-1">
                        @for ($i = 0; $i < 6; $i++)
                            <li class="flex items-center gap-3">
                                <input id="rating{{ $i }}"
                                       type="checkbox"
                                       class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                                <label for="rating{{ $i }}">
                                    <x-web::star-rating :rating="100 - $i * 20"
                                                        count="24" />
                                </label>
                            </li>
                        @endfor
                    </ul>
                </div>
                
                <div class="mt-6 border-t">
                    <div class="flex items-center justify-center gap-2 py-4">
                        <x-button type="button" variant="secondary">Cancel</x-button>
                        <x-button type="button" >Apply</x-button>
                    </div>
                </div>
            </div>

        </div>

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

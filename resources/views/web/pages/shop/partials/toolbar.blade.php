<div class="px-6 py-4 bg-white rounded-lg shadow-sm">
    <div class="flex items-center justify-between gap-4">
        {{-- mobile filter toggle --}}
        <div class="lg:hidden md:min-w-60">
            <a href="javascript:void(0)"
               title="Filter"
               data-drawer-target="mobile-shop-drawer"
               data-drawer-show="mobile-shop-drawer"
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

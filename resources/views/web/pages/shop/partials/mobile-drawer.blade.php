<x-drawer id="mobile-shop-drawer">
    <div class="h-full overflow-y-auto">
        <div class="space-y-8">
            {{-- categories --}}
            <div>
                <h4 class="py-2 mb-4 font-bold text-gray-700 border-b">Categories</h4>
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="shopCategoryMobileDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Electronics</span>
                    </button>
                    <ul id="shopCategoryMobileDropdown"
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
            <div>
                <h4 class="py-2 mb-4 font-bold text-gray-700 border-b">Filters</h4>
                {{-- color --}}
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="colorFilterMobileDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Color</span>
                    </button>
                    <ul id="colorFilterMobileDropdown"
                        class="py-2 mb-4 ml-5 space-y-1">
                        <li class="flex items-center gap-3">
                            <input id="red"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="red"
                                   class="text-sm text-gray-700">Red</label>
                        </li>
                        <li class="flex items-center gap-3">
                            <input id="green"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="green"
                                   class="text-sm text-gray-700">Green</label>
                        </li>
                        <li class="flex items-center gap-3">
                            <input id="blue"
                                   type="checkbox"
                                   class="w-4 h-4 transition duration-150 ease-in-out bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500">
                            <label for="blue"
                                   class="text-sm text-gray-700">Blue</label>
                        </li>
                    </ul>
                </div>
                {{-- price --}}
                <div>
                    <button type="button"
                            class="flex items-center w-full gap-2 py-2 text-gray-700"
                            data-collapse-toggle="priceFilterMobileDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Price</span>
                    </button>
                    <div id="priceFilterMobileDropdown"
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
                            data-collapse-toggle="ratingFilterMobileDropdown">
                        <x-lucide-chevron-right class="w-4 h-4" />
                        <span class="text-sm font-semibold">Rating</span>
                    </button>
                    <ul id="ratingFilterMobileDropdown"
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
                        <x-button type="button"
                                  variant="secondary">Cancel</x-button>
                        <x-button type="button">Apply</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-drawer>

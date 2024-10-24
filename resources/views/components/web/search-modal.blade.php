<div id="search-modal"
     tabindex="-1"
     aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full p-4">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <form class="relative border-b rounded-t-lg">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
                    <x-lucide-search class="w-5 h-5 text-gray-500" />
                </div>
                <input type="text"
                       id="default-search"
                       class="block w-full px-12 py-4 text-sm text-gray-500 bg-transparent border-none rounded-t-lg focus:ring-0"
                       placeholder="Search for products..."
                       required />
                <button type="button"
                        class="absolute inset-y-0 flex items-center end-0 pe-4">
                    <x-lucide-x class="w-5 h-5 text-gray-500" />
                </button>
            </form>
            <!-- Modal body -->
            <div class="p-2">
                @if (false)
                    <ul class="space-y-1 overflow-y-auto max-h-44">
                        <li>
                            <a href="#"
                               class="flex gap-4 p-2 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                <div class="size-12 aspect-square shrink-0">
                                    <img src="https://picsum.photos/200"
                                         class="object-cover w-full h-full rounded-md"
                                         loading="lazy"
                                         alt="Product Image">
                                </div>
                                <div>
                                    <h5 class="text-gray-700 line-clamp-1">Lorem ipsum dolor sit amet
                                        consectetur
                                    </h5>
                                    <span class="text-sm text-gray-500">Rs. 1990.99</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex gap-4 p-2 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                <div class="size-12 aspect-square shrink-0">
                                    <img src="https://picsum.photos/200"
                                         class="object-cover w-full h-full rounded-md"
                                         loading="lazy"
                                         alt="Product Image">
                                </div>
                                <div>
                                    <h5 class="text-gray-700 line-clamp-1">Lorem ipsum dolor sit amet
                                        consectetur
                                    </h5>
                                    <span class="text-sm text-gray-500">Rs. 1990.99</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                @else
                    <div class="p-2 text-sm text-center text-gray-500">
                        No products found.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

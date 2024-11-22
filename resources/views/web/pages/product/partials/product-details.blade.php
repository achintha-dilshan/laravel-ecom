<div class="col-span-1 px-4 md:col-span-3 md:px-0">
    {{-- header --}}
    <div class="pb-4 border-b border-gray-300">
        {{-- category --}}
        <div>
            <a href="javascript:void(0)">
                <span class="text-sm text-gray-400">Electronics</span>
            </a>
        </div>

        {{-- title --}}
        <h1 class="my-2 text-2xl font-bold text-gray-700 lg:text-3xl">Lorem, ipsum dolor sit amet consectetur
            adipisicing
            elit.
        </h1>

        {{-- rating --}}
        <div>
            <a href="javascript:void(0)">
                <x-web::star-rating rating="36"
                                    count="24" />
            </a>
        </div>

        {{-- availability --}}
        <div class="mt-4">
            <span class="px-3 py-1 text-xs font-semibold text-white bg-green-600 rounded-full">In Stock</span>
        </div>
    </div>

    {{-- variants --}}
    <div class="my-8 space-y-4">

        {{-- color --}}
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">Color:</label>
            <ul class="flex flex-wrap items-center gap-2">
                <li>
                    <input type="radio"
                           id="red"
                           name="color"
                           value="red"
                           class="hidden peer"
                           checked
                           required />
                    <label for="red"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        Red
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="green"
                           name="color"
                           value="green"
                           class="hidden peer"
                           required />
                    <label for="green"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        Green
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="blue"
                           name="color"
                           value="blue"
                           class="hidden peer"
                           required />
                    <label for="blue"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        Blue
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="orange"
                           name="color"
                           value="orange"
                           class="hidden peer"
                           required />
                    <label for="orange"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        Orange
                    </label>
                </li>
            </ul>
        </div>

        {{-- size --}}
        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">Size:</label>
            <ul class="flex flex-wrap items-center gap-2">
                <li>
                    <input type="radio"
                           id="xs"
                           name="size"
                           value="xs"
                           class="hidden peer"
                           checked
                           required />
                    <label for="xs"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        Xs
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="s"
                           name="size"
                           value="s"
                           class="hidden peer"
                           required />
                    <label for="s"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        S
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="m"
                           name="size"
                           value="m"
                           class="hidden peer"
                           required />
                    <label for="m"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        M
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="l"
                           name="size"
                           value="l"
                           class="hidden peer"
                           required />
                    <label for="l"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        L
                    </label>
                </li>
                <li>
                    <input type="radio"
                           id="xl"
                           name="size"
                           value="xl"
                           class="hidden peer"
                           required />
                    <label for="xl"
                           class="block px-4 py-2 text-sm text-gray-700 transition duration-150 ease-in-out bg-white border rounded-lg cursor-pointer hover:bg-gray-50 w-fit peer-checked:border-gray-700 peer-checked:ring-gray-700 peer-checked:ring-1">
                        XL
                    </label>
                </li>
            </ul>
        </div>


        {{-- quantity --}}
        <div>
            <label for="quantity-input"
                   class="block mb-2 text-sm font-semibold text-gray-700">Quantity:</label>
            <div class="relative flex items-center max-w-[8rem]">
                <button type="button"
                        id="decrement-button"
                        data-input-counter-decrement="quantity-input"
                        class="p-3 bg-gray-100 border border-gray-300 hover:bg-gray-200 rounded-s-lg h-11">
                    <x-lucide-minus class="w-4 h-4 text-gray-700" />
                </button>
                <input type="text"
                       id="quantity-input"
                       data-input-counter
                       class="bg-gray-50 border-x-0 border-gray-300 focus:border-gray-300 h-11 text-center text-gray-700 text-sm focus:ring-0 outline-none block w-full py-2.5"
                       data-input-counter-min="1"
                       value="1"
                       required />
                <button type="button"
                        id="increment-button"
                        data-input-counter-increment="quantity-input"
                        class="p-3 bg-gray-100 border border-gray-300 hover:bg-gray-200 rounded-e-lg h-11">
                    <x-lucide-plus class="w-4 h-4 text-gray-700" />
                </button>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="space-y-4">
        {{-- price --}}
        <div>
            <strong class="text-xl text-gray-600 lg:text-2xl">LKR 1990.99</strong>
            <span class="ml-2 text-sm text-gray-400 line-through lg:text-base">LKR 2990.99</span>
        </div>
        {{-- actions --}}
        <div class="flex items-center gap-2">
            <div>
                <x-button type="button"
                          title="Add to Cart">
                    <div class="flex items-center gap-2">
                        <div class="text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="1em"
                                 height="1em"
                                 viewBox="0 0 24 24">
                                <path fill="white"
                                      d="M6.01 16.136L4.141 4H3a1 1 0 0 1 0-2h1.985a1 1 0 0 1 .66.235a1 1 0 0 1 .346.627L6.319 5H14v2H6.627l1.23 8h9.399l1.5-5h2.088l-1.886 6.287A1 1 0 0 1 18 17H7.016a1 1 0 0 1-.675-.248a1 1 0 0 1-.332-.616zM10 20a2 2 0 1 1-4 0a2 2 0 0 1 4 0m9 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m0-18a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0V6h-1a1 1 0 1 1 0-2h1V3a1 1 0 0 1 1-1" />
                            </svg>
                        </div>
                        <span>Add to Cart</span>
                    </div>
                </x-button>
            </div>
            <div>
                <x-button type="link"
                          href="/wishlist"
                          variant="secondary"
                          title="Add to Wishlist"
                          class="!px-4">
                    <x-lucide-heart class="w-5 h-5" />
                </x-button>
            </div>
        </div>
    </div>
</div>

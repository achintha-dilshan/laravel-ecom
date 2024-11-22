<div class="grid grid-cols-1 lg:gap-6 lg:grid-cols-3">
    {{-- reviews column --}}
    <div class="order-2 col-span-2 lg:order-1">

        <div class="p-6">
            <div class="flex items-center justify-between gap-4">
                {{-- result stats --}}
                <div class="text-sm text-gray-500">Showing <span class="font-semibold">5,768</span>
                    Customer
                    Reviews</div>
                {{-- sorting --}}
                <div class="lg:min-w-60">
                    <a href="javascript:void(0)"
                       title="Sort By"
                       data-dropdown-toggle="sortByDropdown">
                        <div
                             class="items-center justify-end block gap-2 p-2 text-sm text-gray-500 rounded-full sm:flex sm:rounded-none sm:p-0">
                            <x-lucide-arrow-up-down class="w-4 h-4" />
                            <span class="hidden lg:inline-block">Sort By: Most Recent First</span>
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

        <div class="p-4 bg-white divide-y rounded-lg shadow-sm">
            {{-- review card --}}
            @for ($i = 0; $i < 3; $i++)
                <div class="px-6 pt-6 pb-10">
                    <h4 class="mb-1 text-sm font-semibold text-gray-600">John Doe</h4>
                    <div class="text-xs text-gray-400">November 18 2023 at 15:35</div>
                    <x-web::star-rating rating="36" />
                    <p class="my-4 text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur,
                        adipisicing
                        elit. Iste, officia. Eius iste
                        cupiditate dolorum similique, doloremque eveniet. Iure, exercitationem est.
                    </p>
                    <div class="flex items-center gap-x-2 gap-y-4">
                        <a href="https://picsum.photos/200"
                           class="w-16 aspect-[4/5] overflow-clip rounded-md glightbox">
                            <img src="https://picsum.photos/200"
                                 alt="Review Image"
                                 loading="lazy"
                                 class="object-cover w-full h-full transition duration-300 ease-in group-hover:scale-110">
                        </a>
                        <a href="https://picsum.photos/200"
                           class="w-16 aspect-[4/5] overflow-clip rounded-md glightbox">
                            <img src="https://picsum.photos/200"
                                 alt="Review Image"
                                 loading="lazy"
                                 class="object-cover w-full h-full transition duration-300 ease-in group-hover:scale-110">
                        </a>
                        <a href="https://picsum.photos/200"
                           class="w-16 aspect-[4/5] overflow-clip rounded-md glightbox">
                            <img src="https://picsum.photos/200"
                                 alt="Review Image"
                                 loading="lazy"
                                 class="object-cover w-full h-full transition duration-300 ease-in group-hover:scale-110">
                        </a>
                    </div>
                </div>
            @endfor
        </div>

        <div class="my-6 text-center">
            <a href="javascript:void(0)"
               class="text-sm text-gray-500 underline transition duration-150 ease-in-out underline-offset-2 hover:text-primary-600">Load
                More</a>
        </div>

    </div>

    {{-- overall count --}}
    <div class="order-1 col-span-1 lg:order-2">
        <div class="px-6 pt-4 pb-8 bg-white rounded-lg shadow-sm">
            <h3 class="py-2 mb-4 text-xl font-semibold text-gray-600 border-b">Reviews</h3>
            <x-web::star-rating rating="48"
                                count="3.2" />
            <div class="text-sm text-gray-500">Based on <span class="font-semibold">1240</span>
                reviews</div>
            <ul class="mt-4 space-y-3">
                @for ($i = 0; $i < 6; $i++)
                    <li>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-1">
                                <span class="text-sm font-semibold text-gray-600">{{ 5 - $i }}</span>
                                <span class="text-amber-400">★</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-amber-400 h-1.5 rounded-full"
                                     style="width: {{ 100 - $i * 20 }}%"></div>
                            </div>
                            <div class="w-20">
                                <span class="text-sm text-gray-500">({{ 100 - $i * 20 }})</span>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>

            <div class="mt-6">
                <h4 class="mb-2 text-lg font-semibold text-gray-600">Share your thoughts</h4>
                <p class="text-sm text-gray-500">Let others know what you think about this product.</p>

                <div class="mt-4">
                    <x-button type="button"
                              variant="secondary"
                              data-modal-target="add-review-modal"
                              data-modal-toggle="add-review-modal">Write a review</x-button>
                </div>
            </div>
        </div>
    </div>
</div>

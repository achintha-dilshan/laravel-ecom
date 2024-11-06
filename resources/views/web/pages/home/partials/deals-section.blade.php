<section class="my-10 sm:my-20">
    <div class="max-w-screen-xl px-4 mx-auto">
        <div class="grid grid-cols-1 px-4 py-6 border-2 border-primary-700 md:grid-cols-2 lg:grid-cols-3 rounded-xl">
            <div class="self-center col-span-1">
                <div class="flex flex-col items-center gap-6 p-4">
                    <h2 class="text-2xl font-bold text-gray-600 sm:text-3xl lg:text-4xl">Deals of the Day</h2>
                    <ul class="top-0 flex items-center gap-2 countdown"
                        data-countdown="2024-11-27">
                        <li class="p-3 bg-white rounded-md shadow-lg shadow-gray-100 min-w-16">
                            <div class="flex flex-col items-center">
                                <span class="text-lg font-semibold text-gray-600"
                                      data-days>00</span>
                                <span class="text-sm text-gray-500">Days</span>
                            </div>
                        </li>
                        <li class="p-3 bg-white rounded-md shadow-lg shadow-gray-100 min-w-16">
                            <div class="flex flex-col items-center">
                                <span class="text-lg font-semibold text-gray-600"
                                      data-hours>00</span>
                                <span class="text-sm text-gray-500">Hours</span>
                            </div>
                        </li>
                        <li class="p-3 bg-white rounded-md shadow-lg shadow-gray-100 min-w-16">
                            <div class="flex flex-col items-center">
                                <span class="text-lg font-semibold text-gray-600"
                                      data-minutes>00</span>
                                <span class="text-sm text-gray-500">Mins</span>
                            </div>
                        </li>
                        <li class="p-3 bg-white rounded-md shadow-lg shadow-gray-100 min-w-16">
                            <div class="flex flex-col items-center">
                                <span class="text-lg font-semibold text-gray-600"
                                      data-seconds>00</span>
                                <span class="text-sm text-gray-500">Sec</span>
                            </div>
                        </li>
                    </ul>
                    <x-web::section-button href="{{ $href ?? 'javascript:void(0)' }}">View all
                        Deals</x-web::section-button>
                </div>
            </div>
            {{-- deals slider --}}
            <div class="col-span-1 lg:col-span-2">
                <x-web::swiper.container wrapperClass="pt-2 pb-8"
                                         :showPagination="true"
                                         data-config="{'slidesPerView': 2, 'spaceBetween': 16, 'autoplay': { 'delay': 3000 }, 'breakpoints': {'640': {'slidesPerView': 3},'768': {'slidesPerView': 2},'1024': {'slidesPerView': 3}}}">
                    @for ($i = 0; $i < 8; $i++)
                        <x-swiper.slide>
                            <x-web::product-card />
                        </x-swiper.slide>
                    @endfor
                    <x-slot:pagination>
                        <div
                             class="absolute z-10 flex items-center justify-center w-full gap-2 swiper-pagination bottom-1 text-[0px]">
                        </div>
                    </x-slot:pagination>
                </x-web::swiper.container>
            </div>
        </div>
    </div>
</section>

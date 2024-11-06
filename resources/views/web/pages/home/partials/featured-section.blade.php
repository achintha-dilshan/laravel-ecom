<section class="my-10 sm:my-20">
    <x-web::swiper.container wrapperClass="pt-2 pb-8"
                             :showPagination="true"
                             data-config="{'slidesPerView': 1, 'spaceBetween': 16, 'autoplay': true, 'breakpoints': {'640': {'slidesPerView': 2},'1024': {'slidesPerView': 3, 'autoplay': false, 'pagination': false}}}">
        @for ($i = 0; $i < 3; $i++)
            <x-swiper.slide>
                <div class="p-4 bg-white rounded-lg shadow-lg shadow-gray-100">
                    <div class="flex gap-4">
                        <div class="w-full aspect-[4/3] overflow-clip rounded-md max-h-36 max-w-48">
                            <picture>
                                <source media="(max-width: 576px)"
                                        srcset="https://picsum.photos/200">
                                <source media="(max-width: 1024px)"
                                        srcset="https://picsum.photos/200">
                                <img src="https://picsum.photos/200"
                                     alt="Hero Banner"
                                     loading="lazy"
                                     class="object-cover w-full h-full">
                            </picture>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="mb-4 text-lg font-semibold text-gray-600 uppercase">Lorem ipsum dolor sit
                                amet.
                            </h4>
                            <x-web::section-button>Shop Now</x-web::section-button>
                        </div>
                    </div>
                </div>
            </x-swiper.slide>
        @endfor
        <x-slot:pagination>
            <div
                 class="absolute z-10 flex lg:hidden items-center justify-center w-full gap-2 swiper-pagination bottom-1 text-[0px]">
            </div>
        </x-slot:pagination>
    </x-web::swiper.container>
</section>

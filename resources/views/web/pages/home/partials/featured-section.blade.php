<section class="my-10">
    <x-swiper.container
                        data-config="{'slidesPerView': 1, 'spaceBetween': 16, 'autoplay': true, 'breakpoints': {'640': {'slidesPerView': 2},'1024': {'slidesPerView': 3, 'autoplay': false}}}">
        <x-swiper.slide>
            <div class="p-4 my-2 bg-white rounded-lg">
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
                        <h4 class="mb-4 text-lg font-semibold text-gray-600 uppercase">Lorem ipsum dolor sit amet.
                        </h4>
                        <x-web::section-button>Shop Now</x-web::section-button>
                    </div>
                </div>
            </div>
        </x-swiper.slide>
        <x-swiper.slide>
            <div class="p-4 my-2 bg-white rounded-lg">
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
                        <h4 class="mb-4 text-lg font-semibold text-gray-600 uppercase">Lorem ipsum dolor sit amet.
                        </h4>
                        <x-web::section-button>Shop Now</x-web::section-button>
                    </div>
                </div>
            </div>
        </x-swiper.slide>
        <x-swiper.slide>
            <div class="p-4 my-2 bg-white rounded-lg">
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
                        <h4 class="mb-4 text-lg font-semibold text-gray-600 uppercase">Lorem ipsum dolor sit amet.
                        </h4>
                        <x-web::section-button>Shop Now</x-web::section-button>
                    </div>
                </div>
            </div>
        </x-swiper.slide>
    </x-swiper.container>
</section>

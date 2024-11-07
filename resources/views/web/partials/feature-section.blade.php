<section>
    <div class="max-w-screen-xl px-4 mx-auto">
        <x-web::swiper.container wrapperClass="pt-2 pb-8"
                                 data-config="{'slidesPerView': 1, 'spaceBetween': 16, 'autoplay': { 'delay': 3000 }, 'breakpoints': {'640': {'slidesPerView': 2},'768': {'slidesPerView': 3},'1024': {'slidesPerView': 4, 'autoplay': false}}}">
            @for ($i = 0; $i < 4; $i++)
                <x-swiper.slide>
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <div class="flex items-center gap-4">
                            <div class="text-gray-500 shrink-0">
                                <x-lucide-truck class="w-8 h-8" />
                            </div>
                            <div class="leading-tight">
                                <h6 class="font-semibold text-gray-700">Island Wide Delivery</h6>
                                <span class="text-sm text-gray-500">Lorem ipsum dolor sit.</span>
                            </div>
                        </div>
                    </div>
                </x-swiper.slide>
            @endfor
        </x-web::swiper.container>
    </div>
</section>

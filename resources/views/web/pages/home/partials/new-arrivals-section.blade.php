<section class="my-10">
    <x-web::section-title title="New Arrivals"
                          targetTitle="View More" />

    <x-web::swiper.container wrapperClass="pt-2 pb-6"
                             :showPagination="true"
                             data-config="{'slidesPerView': 2, 'spaceBetween': 16, 'autoplay': { 'delay': 3000 }, 'breakpoints': {'640': {'slidesPerView': 3},'768': {'slidesPerView': 4},'1024': {'slidesPerView': 5}}}">

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
</section>

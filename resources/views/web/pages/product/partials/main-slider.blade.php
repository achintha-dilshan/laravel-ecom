<div>
    <x-web::swiper.container class="no-init product-slider"
                             :showNavigation="true">
        @for ($i = 0; $i < 8; $i++)
            <x-swiper.slide class="hover:cursor-crosshair">
                <div class="w-full rounded-md aspect-square overflow-clip zoom">
                    <picture>
                        <source media="(max-width: 576px)"
                                srcset="https://picsum.photos/800">
                        <source media="(max-width: 1024px)"
                                srcset="https://picsum.photos/800">
                        <img src="https://picsum.photos/800"
                             alt="Hero Banner"
                             loading="lazy"
                             class="object-cover w-full h-full">
                    </picture>
                </div>
            </x-swiper.slide>
        @endfor
    </x-web::swiper.container>
</div>

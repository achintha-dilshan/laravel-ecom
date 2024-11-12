<div>
    <x-web::swiper.container wrapperClass="p-2"
                             class="no-init product-thumb-slider">
        @for ($i = 0; $i < 8; $i++)
            <x-swiper.slide>
                <div class="w-full rounded-md aspect-square overflow-clip">
                    <picture>
                        <source media="(max-width: 576px)"
                                srcset="https://picsum.photos/200">
                        <source media="(max-width: 1024px)"
                                srcset="https://picsum.photos/200">
                        <img src="https://picsum.photos/200"
                             alt="Hero Banner"
                             loading="lazy"
                             class="object-cover w-full h-full transition duration-300 ease-in group-hover:scale-110">
                    </picture>
                </div>
            </x-swiper.slide>
        @endfor
    </x-web::swiper.container>
</div>

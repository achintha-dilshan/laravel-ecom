<section class="my-4 overflow-clip rounded-2xl">
    <x-swiper.container :showNavigation="true"
                        :showPagination="true">
        <x-swiper.slide>
            <picture>
                <source media="(max-width: 576px)"
                        srcset="https://placehold.co/800x1200?text=Slide+1">
                <source media="(max-width: 1024px)"
                        srcset="https://placehold.co/1200x800?text=Slide+1">
                <img src="https://placehold.co/1600x500?text=Slide+1"
                     alt="Hero Banner">
            </picture>
        </x-swiper.slide>
        <x-swiper.slide>
            <picture>
                <source media="(max-width: 576px)"
                        srcset="https://placehold.co/800x1200?text=Slide+2">
                <source media="(max-width: 1024px)"
                        srcset="https://placehold.co/1200x800?text=Slide+2">
                <img src="https://placehold.co/1600x500?text=Slide+2"
                     alt="Hero Banner">
            </picture>
        </x-swiper.slide>
        <x-swiper.slide>
            <picture>
                <source media="(max-width: 576px)"
                        srcset="https://placehold.co/800x1200?text=Slide+3">
                <source media="(max-width: 1024px)"
                        srcset="https://placehold.co/1200x800?text=Slide+3">
                <img src="https://placehold.co/1600x500?text=Slide+3"
                     alt="Hero Banner">
            </picture>
        </x-swiper.slide>
    </x-swiper.container>
</section>

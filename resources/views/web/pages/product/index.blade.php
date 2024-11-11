<x-web::layout>

    <x-slot:head>
        @vite(['resources/js/product.js'])
    </x-slot:head>

    {{-- breadcrumb --}}
    <x-web::breadcrumb>
        <x-web::breadcrumb-item href="/shop">Shop</x-web::breadcrumb-item>
        <x-web::breadcrumb-item :isCurrent="true">Product</x-web::breadcrumb-item>
    </x-web::breadcrumb>

    {{-- product overview --}}
    <div class="flex gap-8 mt-6">
        {{-- product image slider --}}
        <div class="max-w-lg ">
            <div class="p-4 space-y-4 bg-white rounded-lg shadow-sm">
                {{-- main slider --}}
                <div>
                    <x-web::swiper.container class="no-init product-slider"
                                             :showNavigation="true">
                        @for ($i = 0; $i < 8; $i++)
                            <x-swiper.slide>
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

                {{-- thumb slider --}}
                <div>
                    <x-web::swiper.container wrapperClass="p-2" class="no-init product-thumb-slider">
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
            </div>
        </div>

        {{-- product details --}}
        <div class="shrink-0">
            <a href="javascript:void(0)">
                <span class="text-sm text-gray-500">Electronics</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <a href="javascript:void(0)">
                <x-web::star-rating rating="36"
                                    count="24" />
            </a>
            <div>
                <strong class="text-xl text-gray-600">LKR 1990.99</strong>
                <span class="ml-2 text-sm text-gray-400 line-through">LKR 2990.99</span>
            </div>
        </div>
    </div>


</x-web::layout>

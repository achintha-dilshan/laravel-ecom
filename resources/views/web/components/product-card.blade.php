<div class="relative w-full bg-white rounded-lg shadow-sm p-2.5">
    <div class="relative group">
        <a href="javascript:void(0)">
            <div class="w-full aspect-[4/5] overflow-clip rounded-md">
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
        </a>

        <!-- Wishlist Button -->
        <div class="absolute top-2 right-2">
            <button type="button"
                    title="Wishlist"
                    class="p-2 text-center text-gray-700 transition duration-200 ease-in border border-transparent rounded-full shadow-xl bg-white/60 focus:outline-none hover:bg-white/90">
                <x-lucide-heart class="w-4 h-4" />
            </button>
        </div>

        <!-- Add to Cart Button -->
        <div class="absolute -bottom-4 right-2">
            <button type="button"
                    title="Add to Cart"
                    class="p-2 text-2xl text-center text-white border rounded-full shadow-xl border-primary-700 bg-primary-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="1em"
                     height="1em"
                     viewBox="0 0 24 24">
                    <path fill="white"
                          d="M6.01 16.136L4.141 4H3a1 1 0 0 1 0-2h1.985a1 1 0 0 1 .66.235a1 1 0 0 1 .346.627L6.319 5H14v2H6.627l1.23 8h9.399l1.5-5h2.088l-1.886 6.287A1 1 0 0 1 18 17H7.016a1 1 0 0 1-.675-.248a1 1 0 0 1-.332-.616zM10 20a2 2 0 1 1-4 0a2 2 0 0 1 4 0m9 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m0-18a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0V6h-1a1 1 0 1 1 0-2h1V3a1 1 0 0 1 1-1" />
                </svg>
            </button>
        </div>
    </div>
    <div class="p-2">
        <a href="javascript:void(0)"
           class="group">
            <span class="text-xs text-gray-400 transition duration-150 ease-in-out group-hover:text-primary-400">Electronics</span>
        </a>
        <a href="javascript:void(0)"
           class="group">
            <h4 class="text-sm font-semibold text-gray-600 transition duration-150 ease-in-out line-clamp-1 group-hover:text-primary-600">Lorem ipsum, dolor
                sit amet consectetur
            </h4>
        </a>
        <x-web::star-rating rating="36"
                            count="24" />
        <div class="relative mt-3">
            <span class="absolute block text-xs text-gray-400 line-through -top-3">LKR 2990.00</span>
            <strong class="text-lg text-gray-600">LKR 1990.99</strong>
        </div>
    </div>
</div>

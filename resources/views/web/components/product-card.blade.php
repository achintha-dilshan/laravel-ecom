<div class="relative w-full bg-white rounded-lg shadow-xl p-2.5 shadow-gray-100 max-w-60">
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
                    class="p-2 text-center text-white border rounded-full shadow-xl border-primary-700 bg-primary-700 focus:outline-none">
                <x-lucide-shopping-bag class="w-5 h-5" />
            </button>
        </div>
    </div>
    <div class="p-2">
        <a href="javascript:void(0)">
            <span class="text-xs text-gray-400">Electronics</span>
        </a>
        <a href="javascript:void(0)">
            <h4 class="text-sm font-semibold text-gray-600 line-clamp-1">Lorem ipsum, dolor sit amet consectetur
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

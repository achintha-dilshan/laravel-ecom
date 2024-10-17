<nav class="bg-white  fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
    <div class="max-w-screen-xl flex items-center justify-between lg:space-x-12 gap-4 mx-auto p-4">
        <div class="flex items-center gap-4">
            <x-button variant="icon"
                      title="Menu"
                      class="md:hidden">
                <x-lucide-menu class="h-5 w-5" />
            </x-button>
            <a href="#"
               class="flex items-center space-x-3 shrink-0">
                <img src="https://flowbite.com/docs/images/logo.svg"
                     class="h-8"
                     alt="Flowbite Logo">
                <span
                      class="self-center text-2xl font-semibold whitespace-nowrap sm:inline-block hidden">Flowbite</span>
            </a>
        </div>
        <div class="flex items-center justify-end grow gap-4">
            <x-button type="submit"
                      title="Categories"
                      class="md:flex gap-2 items-center hidden">
                Categories
                <x-lucide-chevron-down class="w-5 h-5" />
            </x-button>

            <form class="grow md:block hidden">
                <label for="default-search"
                       class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="text"
                           id="default-search"
                           class="block w-full py-2.5 ps-4 text-sm text-gray-500 border border-gray-300 rounded-lg bg-transparent  focus:outline-none focus:border-gray-300 focus:ring-offset-2 focus:ring-2 focus:ring-primary-500 transition ease-in-out duration-150"
                           placeholder="Search for products..."
                           required />

                    <div class="absolute inset-y-0 end-0 flex items-center pe-4 pointer-events-none">
                        <x-lucide-search class="h-5 w-5 text-gray-500" />
                    </div>
                </div>
            </form>

            <div class="flex items-center gap-2">
                <x-button variant="icon"
                          title="Search" class="md:hidden">
                    <x-lucide-search class="h-5 w-5" />
                </x-button>
                <x-button type="link" variant="icon"
                          title="Wishlist">
                    <x-lucide-heart class="w-5 h-5" />
                </x-button>
                <x-button variant="icon"
                          title="Cart">
                    <x-lucide-shopping-bag class="w-5 h-5" />
                    <span
                          class="absolute inline-flex items-center justify-center text-[9px] min-w-5 p-1 leading-none font-bold text-white bg-red-600 border-2 border-white rounded-full -top-1 -end-1">2</span>
                </x-button>
                <x-button variant="icon"
                          title="Account">
                    <x-lucide-user-round class="w-5 h-5" />
                </x-button>
            </div>
        </div>
    </div>
</nav>

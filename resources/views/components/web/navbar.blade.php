<nav class="top-0 z-20 w-full bg-white border-b border-gray-200 start-0 ">
    <div class="flex items-center justify-between max-w-screen-xl gap-4 p-4 mx-auto lg:space-x-12">
        <div class="flex items-center gap-4">
            <div class="shrink-0">
                <x-button variant="icon"
                          title="Menu"
                          data-drawer-target="category-drawer"
                          data-drawer-show="category-drawer"
                          class="lg:hidden">
                    <x-lucide-menu class="w-5 h-5" />
                </x-button>
                <x-web.category-drawer />
            </div>
            <a href="#"
               class="flex items-center space-x-3 shrink-0">
                <img src="https://flowbite.com/docs/images/logo.svg"
                     class="h-8"
                     alt="Flowbite Logo">
                <span
                      class="self-center hidden text-2xl font-semibold whitespace-nowrap sm:inline-block">Flowbite</span>
            </a>
        </div>
        <div class="flex items-center justify-end gap-4 grow">
            <div>
                <x-button type="submit"
                          title="Categories"
                          data-dropdown-toggle="categoryDropdown"
                          class="items-center hidden gap-2 lg:flex">
                    <x-lucide-layout-grid class="w-5 h-5" />
                    Categories
                </x-button>
                <x-web.category-dropdown />
            </div>

            <form class="relative hidden grow md:block">
                <label for="default-search"
                       class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="text"
                           id="default-search"
                           class="block w-full py-2.5 px-12 text-sm text-gray-500 border border-gray-300 rounded-lg bg-transparent  focus:outline-none focus:border-gray-300 focus:ring-offset-2 focus:ring-2 focus:ring-primary-500 transition ease-in-out duration-150"
                           placeholder="Search for products..."
                           required />

                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
                        <x-lucide-search class="w-5 h-5 text-gray-500" />
                    </div>
                </div>
                @if (false)
                    <div class="absolute p-2 w-full bg-white rounded-md shadow top-[120%]">
                        @if (false)
                            <ul class="space-y-1 overflow-y-auto max-h-44">
                                <li>
                                    <a href="#"
                                       class="flex gap-4 p-2 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                        <div class="size-12 aspect-square shrink-0">
                                            <img src="https://picsum.photos/200"
                                                 class="object-cover w-full h-full rounded-md"
                                                 loading="lazy"
                                                 alt="Product Image">
                                        </div>
                                        <div>
                                            <h5 class="text-gray-700 line-clamp-1">Lorem ipsum dolor sit amet
                                                consectetur
                                            </h5>
                                            <span class="text-sm text-gray-500">Rs. 1990.99</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex gap-4 p-2 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                        <div class="size-12 aspect-square shrink-0">
                                            <img src="https://picsum.photos/200"
                                                 class="object-cover w-full h-full rounded-md"
                                                 loading="lazy"
                                                 alt="Product Image">
                                        </div>
                                        <div>
                                            <h5 class="text-gray-700 line-clamp-1">Lorem ipsum dolor sit amet
                                                consectetur
                                            </h5>
                                            <span class="text-sm text-gray-500">Rs. 1990.99</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        @else
                            <div class="p-2 text-sm text-center text-gray-500">
                                No products found.
                            </div>
                        @endif
                    </div>
                @endif
            </form>

            <ul class="flex items-center gap-2">
                <li class="md:hidden">
                    <x-button variant="icon"
                              title="Search">
                        <x-lucide-search class="w-5 h-5" />
                    </x-button>
                </li>
                <li>
                    <x-button type="link"
                              href="/wishlist"
                              variant="icon"
                              title="Wishlist">
                        <x-lucide-heart class="w-5 h-5" />
                    </x-button>
                </li>
                <li>
                    <x-button variant="icon"
                              title="Cart"
                              data-dropdown-toggle="cartDropdown">
                        <x-lucide-shopping-bag class="w-5 h-5" />
                        <x-badge>2</x-badge>
                    </x-button>
                    <x-web.cart-dropdown />
                </li>
                <li>
                    @if (true)
                        <x-button variant="icon"
                                  title="Account"
                                  data-dropdown-toggle="accountDropdown">
                            <x-lucide-user-round class="w-5 h-5" />
                        </x-button>
                        <x-web.account-dropdown />
                    @else
                        <x-button href="/login"
                                  type="link"
                                  variant="icon"
                                  title="Login">
                            <x-lucide-user-round class="w-5 h-5" />
                        </x-button>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

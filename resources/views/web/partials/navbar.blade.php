<nav class="sticky top-0 z-20 w-full bg-white shadow start-0">
    <div class="flex items-center justify-between max-w-screen-xl gap-4 p-4 mx-auto lg:space-x-12">
        <div class="flex items-center gap-4">
            <div class="shrink-0 lg:hidden">
                <x-button variant="icon"
                          title="Menu"
                          data-drawer-target="category-drawer"
                          data-drawer-show="category-drawer">
                    <x-lucide-menu class="w-5 h-5" />
                </x-button>
            </div>
            <a href="/"
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

                @include('web.partials.category-dropdown')
            </div>

            <form class="relative hidden grow lg:block">
                <label for="default-search"
                       class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-4">
                        <x-lucide-search class="w-5 h-5 text-gray-500" />
                    </div>
                    <input type="text"
                           id="default-search"
                           class="block w-full p-2.5 px-12 text-sm text-gray-500 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:border-gray-300 focus:ring-offset-2 focus:ring-2 focus:ring-primary-700 transition ease-in-out duration-150"
                           placeholder="Search for products..."
                           required />
                    <button type="button"
                            class="absolute inset-y-0 flex items-center hidden end-0 pe-4">
                        <x-lucide-x class="w-5 h-5 text-gray-500" />
                    </button>
                </div>
                @if (false)
                    <div class="absolute p-2 w-full bg-white rounded-md shadow top-[120%]">
                        @if (true)
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
                <li class="lg:hidden">
                    <x-button variant="icon"
                              title="Search"
                              data-modal-target="search-modal"
                              data-modal-toggle="search-modal">
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
                        <x-lucide-shopping-cart class="w-5 h-5" />
                        <x-badge>2</x-badge>
                    </x-button>
                    @include('web.partials.cart-dropdown')
                </li>
                <li>
                    @if (true)
                        <x-button variant="icon"
                                  title="Account"
                                  data-dropdown-toggle="accountDropdown">
                            <x-lucide-user-round class="w-5 h-5" />
                        </x-button>
                        @include('web.partials.account-dropdown')
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

{{-- mobile category drawer --}}
@include('web.partials.category-drawer')

{{-- mobile search modal --}}
@include('web.partials.search-modal')

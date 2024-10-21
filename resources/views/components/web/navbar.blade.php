<nav class="top-0 z-20 w-full bg-white border-b border-gray-200 start-0 ">
    <div class="flex items-center justify-between max-w-screen-xl gap-4 p-4 mx-auto lg:space-x-12">
        <div class="flex items-center gap-4">
            <x-button variant="icon"
                      title="Menu"
                      data-drawer-target="category-drawer"
                      data-drawer-show="category-drawer"
                      aria-controls="category-drawer"
                      class="md:hidden">
                <x-lucide-menu class="w-5 h-5" />
            </x-button>
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
                          data-drawer-target="category-drawer"
                          data-drawer-show="category-drawer"
                          aria-controls="category-drawer"
                          class="items-center hidden gap-2 md:flex">
                    <x-lucide-layout-grid class="w-5 h-5" />
                    Categories
                </x-button>
                <x-web.category-drawer />
            </div>

            <form class="hidden grow md:block">
                <label for="default-search"
                       class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="text"
                           id="default-search"
                           class="block w-full py-2.5 ps-4 text-sm text-gray-500 border border-gray-300 rounded-lg bg-transparent  focus:outline-none focus:border-gray-300 focus:ring-offset-2 focus:ring-2 focus:ring-primary-500 transition ease-in-out duration-150"
                           placeholder="Search for products..."
                           required />

                    <div class="absolute inset-y-0 flex items-center pointer-events-none end-0 pe-4">
                        <x-lucide-search class="w-5 h-5 text-gray-500" />
                    </div>
                </div>
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
                              id="cartDropdownButton"
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
                                  id="accountDropdownButton"
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

<x-dropdown id="cartDropdown"
            class="w-72">
    <x-slot:header>
        <h5 class="font-medium text-lg text-gray-700 text-center">Your Cart</h5>
    </x-slot:header>
    <ul class="p-4 max-h-44 overflow-y-auto space-y-4">
        <x-web.cart-dropdown-item />
        <x-web.cart-dropdown-item />
        <x-web.cart-dropdown-item />
    </ul>
    <div class="p-4">
        <div class="flex items-center gap-4 justify-between mb-5">
            <h5 class="font-medium text-lg text-gray-700 shrink-0">Total <span class="text-sm text-gray-500">(2
                    items)</span></h5>
            <span class="font-medium text-lg text-gray-700 shrink-0">Rs. 1990.99</span>
        </div>
        <ul class="flex items-center gap-4 justify-between">
            <li class="grow">
                <x-button type="link"
                          class="w-full"
                          variant="secondary"
                          href="/cart">View Cart</x-button>
            </li>
            <li class="grow">
                <x-button type="link"
                          class="w-full"
                          href="/checkout">Checkout</x-button>
            </li>
        </ul>
    </div>
</x-dropdown>

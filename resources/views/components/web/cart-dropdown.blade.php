<x-dropdown id="cartDropdown"
            class="w-72">
    <x-slot:header>
        <h5 class="text-lg font-medium text-center text-gray-700">Your Cart</h5>
    </x-slot:header>
    @if (true)
        <ul class="p-2 space-y-1 overflow-y-auto max-h-44">
            <x-web.cart-dropdown-item />
            <x-web.cart-dropdown-item />
            <x-web.cart-dropdown-item />
        </ul>
        <div class="p-4">
            <div class="flex items-center justify-between gap-4 mb-5">
                <h5 class="text-lg font-medium text-gray-700 shrink-0">Total <span class="text-sm text-gray-500">(2
                        items)</span></h5>
                <span class="text-lg font-medium text-gray-700 shrink-0">Rs. 1990.99</span>
            </div>
            <ul class="flex items-center justify-between gap-4">
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
    @else
        <div class="p-4 text-sm text-center text-gray-500">
            Your cart is empty
        </div>
    @endif
</x-dropdown>

<x-dropdown id="accountDropdown">
    <x-slot:header>
        <div>Welcome!</div>
        <div class="font-medium truncate">John Doe</div>
    </x-slot:header>
    <ul class="py-2">
        <li>
            <x-dropdown-link>My Account</x-dropdown-link>
        </li>
        <li>
            <x-dropdown-link>Wishlist</x-dropdown-link>
        </li>
        <li>
            <x-dropdown-link>Orders</x-dropdown-link>
        </li>
    </ul>
    <div class="py-2">
        <x-dropdown-link>Sign out</x-dropdown-link>
    </div>
</x-dropdown>

<x-dropdown id="categoryDropdown">
    <ul class="py-2 overflow-y-auto max-h-44">
        <li>
            <x-dropdown-link data-dropdown-toggle="categoryDropdown-1.1"
                             data-dropdown-placement="right-start"
                             class="flex items-center justify-between">
                Electronics
                <x-lucide-chevron-right class="w-4 h-4 ms-3" />
            </x-dropdown-link>

            <x-dropdown id="categoryDropdown-1.1">
                <ul class="py-2">
                    <li>
                        <x-dropdown-link>Smart Phones</x-dropdown-link>
                    </li>
                    <li>
                        <x-dropdown-link>Headphones</x-dropdown-link>
                    </li>
                    <li>
                        <x-dropdown-link>Earbuds</x-dropdown-link>
                    </li>
                    <li>
                        <x-dropdown-link>Powerbanks</x-dropdown-link>
                    </li>
                </ul>
            </x-dropdown>
        </li>
        <li>
            <x-dropdown-link>Health &amp; Beauty</x-dropdown-link>
        </li>
        <li>
            <x-dropdown-link>Home Appliances</x-dropdown-link>
        </li>
        <li>
            <x-dropdown-link>Home &amp; Lifestyle</x-dropdown-link>
        </li>
    </ul>
</x-dropdown>

<x-drawer id="category-drawer">
    <div class="h-full overflow-y-auto">
        <ul class="divide-y divide-gray-200">
            <li>
                <x-web.category-drawer-item>Category 1</x-web.category-drawer-item>
            </li>
            <li>
                <x-web.category-drawer-item>Category 2</x-web.category-drawer-item>
            </li>
            <li>
                <x-web.category-drawer-item>Category 3</x-web.category-drawer-item>
            </li>
            <li>
                <x-web.category-drawer-item data-collapse-toggle="category-4-dropdown">
                    Category 4
                    <x-lucide-chevron-down
                                           class="w-5 h-5 text-gray-400 transition duration-150 group-focus:text-gray-700" />
                </x-web.category-drawer-item>

                <ul id="category-4-dropdown"
                    class="hidden m-4 mr-0 divide-y divide-gray-200">
                    <li>
                        <x-web.category-drawer-item>Sub Category 1</x-web.category-drawer-item>
                    </li>
                    <li>
                        <x-web.category-drawer-item>Sub Category 2</x-web.category-drawer-item>
                    </li>
                    <li>
                        <x-web.category-drawer-item>Sub Category 3</x-web.category-drawer-item>
                    </li>
                </ul>
            </li>
            <li>
                <x-web.category-drawer-item>Category 5</x-web.category-drawer-item>
            </li>
        </ul>
    </div>
</x-drawer>

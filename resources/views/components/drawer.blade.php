@props(['id'])

<aside id="{{ $id }}"
       {{ $attributes->merge(['class' => 'fixed top-0 left-0 z-40 flex flex-col h-screen p-4 duration-300 ease-in-out transform -translate-x-full bg-white w-72']) }}
       tabindex="-1">
    <div class="flex items-center justify-between gap-4 mb-8">
        <a href="#"
           class="flex items-center space-x-3 shrink-0">
            <img src="https://flowbite.com/docs/images/logo.svg"
                 class="h-8"
                 alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
        </a>

        <x-button type="button"
                  variant="icon"
                  data-drawer-hide="{{ $id }}"
                  aria-controls="{{ $id }}"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600">
            <x-lucide-x class="w-5 h-5" />
            <span class="sr-only">Close menu</span>
        </x-button>
    </div>

    {{ $slot }}
</aside>

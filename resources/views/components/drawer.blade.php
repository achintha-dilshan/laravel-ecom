@props(['id'])

<aside id="{{ $id }}"
       {{ $attributes->merge(['class' => 'fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto -translate-x-full bg-white w-80 transform ease-in-out duration-300']) }}
       tabindex="-1">
    <div class="flex items-center justify-between gap-4">
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

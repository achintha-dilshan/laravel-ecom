<nav class="my-4"
     aria-label="Breadcrumb">
    <div class="max-w-screen-xl px-4 mx-auto">
        <ol class="inline-flex flex-wrap items-center gap-2">
            <li class="inline-flex items-center">
                <a href="/"
                   class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition duration-150 ease-in-out hover:text-primary-600">
                    <x-lucide-house class="w-4 h-4" />
                    Home
                </a>
            </li>
            {{ $slot }}
        </ol>
    </div>
</nav>

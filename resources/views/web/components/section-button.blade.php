<a href="{{ $href ?? 'javascript:void(0)' }}" class="group">
    <div class="flex items-center gap-2">
        <span class="text-sm font-medium text-gray-500 transition duration-150 ease-in-out group-hover:text-primary-600">{{ $slot }}</span>
        <span class="p-1 text-gray-500 transition duration-150 ease-in-out bg-white border rounded-full group-hover:text-primary-600 group-hover:border-primary-200">
            <x-lucide-chevron-right class="w-5 h-5" />
        </span>
    </div>
</a>

<a href="{{ $href ?? 'javascript:void(0)' }}">
    <div class="flex items-center gap-2">
        <span class="text-sm font-medium text-gray-500">{{ $slot }}</span>
        <span class="p-1 text-gray-500 bg-white border rounded-full">
            <x-lucide-chevron-right class="w-5 h-5" />
        </span>
    </div>
</a>

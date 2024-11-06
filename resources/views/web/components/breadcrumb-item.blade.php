@props(['isCurrent' => false, 'href' => 'javascript:void(0)'])

<li>
    <div class="flex items-center gap-2">
        <x-lucide-chevron-right class="w-5 h-5 text-gray-400" />
        @if ($isCurrent)
            <a href="javascript:void(0)"
               class="text-sm font-medium text-gray-400 pointer-events-none">{{ $slot }}</a>
        @else
            <a href="{{ $href }}"
               class="text-sm font-medium text-gray-600 hover:text-primary-600">{{ $slot }}</a>
        @endif
    </div>
</li>

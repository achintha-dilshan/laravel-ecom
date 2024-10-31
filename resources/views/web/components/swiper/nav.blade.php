@props(['direction'])

@php
    // Determine the base classes and specific direction classes
    $baseClasses = 'absolute z-10 hidden -translate-y-1/2 group top-1/2 md:block';
    $directionClasses = strtolower($direction) === 'prev' ? 'swiper-navigation-prev left-4' : 'swiper-navigation-next right-4';

    // Merge classes conditionally based on direction
    $classes = "{$baseClasses} {$directionClasses}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <button type="button" class="p-2 transition duration-150 ease-in-out rounded-full bg-white/40 hover:bg-white/60 group-[.swiper-button-disabled]:pointer-events-none group-[.swiper-button-disabled]:opacity-50">
        @if (strtolower($direction) === 'prev')
            <x-lucide-chevron-left class="w-5 h-5 text-gray-600" />
        @else
            <x-lucide-chevron-right class="w-5 h-5 text-gray-600" />
        @endif
    </button>
</div>
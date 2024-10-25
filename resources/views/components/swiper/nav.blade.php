@props(['direction'])

@php
    $classes = 'absolute z-10 hidden -translate-y-1/2 group top-1/2 md:block';

    if (strtolower($direction) == 'prev') {
        $classes .= ' swiper-nav-prev left-4';
    }

    if (strtolower($direction) == 'next') {
        $classes .= ' swiper-nav-next right-4';
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        @if (strtolower($direction) == 'prev')
            <button type="button"
                    class="p-2 transition duration-150 ease-in-out rounded-full bg-white/40 hover:bg-white/60 group-[.swiper-button-disabled]:pointer-events-none group-[.swiper-button-disabled]:opacity-50">
                <x-lucide-chevron-left class="w-5 h-5 text-gray-600" />
            </button>
        @endif

        @if (strtolower($direction) == 'next')
            <button type="button"
                    class="p-2 transition duration-150 ease-in-out rounded-full bg-white/40 hover:bg-white/60 group-[.swiper-button-disabled]:pointer-events-none group-[.swiper-button-disabled]:opacity-50">
                <x-lucide-chevron-right class="w-5 h-5 text-gray-600" />
            </button>
        @endif
    @endif

</div>

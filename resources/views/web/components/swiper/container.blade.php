@props(['showNavigation' => false, 'showPagination' => false, 'wrapperClass' => ''])

<div {{ $attributes->merge(['class' => 'swiper']) }}>
    <div class="swiper-wrapper {{ $wrapperClass }}">
        {{ $slot }}
    </div>

    <!-- Pagination -->
    @if ($showPagination)
        @isset($pagination)
            {{ $pagination }}
        @else
            <x-swiper.pagination />
        @endisset
    @endif

    <!-- Navigation -->
    @if ($showNavigation)
        @isset($navigation)
            {{ $navigation }}
        @else
            <x-swiper.nav direction="prev" />
            <x-swiper.nav direction="next" />
        @endisset
    @endif
</div>

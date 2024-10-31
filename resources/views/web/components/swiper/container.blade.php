<div {{ $attributes->merge(['class' => 'swiper']) }}>
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>

    <!-- Pagination -->
    @isset($pagination)
        {{ $pagination }}
    @else
        <x-swiper.pagination />
    @endisset

    <!-- Navigation -->
    @isset($navigation)
        {{ $navigation }}
    @else
        <x-swiper.nav direction="prev" />
        <x-swiper.nav direction="next" />
    @endisset
</div>

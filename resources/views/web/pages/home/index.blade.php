<x-web::layout>
    {{-- hero section --}}
    @include('web.pages.home.partials.hero-slider')

    {{-- category section --}}
    <section class="my-10">
        <x-web::section-title title="Browse Categories"
                              targetTitle="Shop Now" />

        {{-- category slider --}}
        @include('web.pages.home.partials.category-slider')
    </section>

    <section class="my-10">
        <x-web::section-title title="New Arrivals"
                              targetTitle="View More" />
        <div class="flex items-start gap-4">
            <x-web::product-card />
        </div>
    </section>
</x-web::layout>

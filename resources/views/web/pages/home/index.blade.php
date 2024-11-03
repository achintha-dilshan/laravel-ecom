<x-web::layout>
    {{-- hero section --}}
    @include('web.pages.home.partials.hero-section')

    {{-- category section --}}
    @include('web.pages.home.partials.category-section')

    {{-- featured section --}}
    @include('web.pages.home.partials.featured-section')

    <section class="my-10">
        <x-web::section-title title="New Arrivals"
                              targetTitle="View More" />
        <div class="flex items-start gap-4">
            <x-web::product-card />
        </div>
    </section>
</x-web::layout>

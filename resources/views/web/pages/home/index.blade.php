<x-web::layout>
    @include('web.pages.home.partials.hero-slider')

    <section class="my-10">
        <div class="flex items-start gap-4">
            <x-web::product-card />
        </div>
    </section>
</x-web::layout>

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-4 gap-y-8">
    @for ($i = 0; $i < 20; $i++)
        <x-web::product-card />
    @endfor
</div>

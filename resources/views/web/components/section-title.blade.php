@props(['title', 'targetTitle', 'href'])

<div class="py-2.5 mb-5 border-b border-gray-200">
    <div class="flex flex-col items-start justify-between gap-1 sm:flex-row">
        <h2 class="text-2xl font-bold text-gray-600">{{ $title }}</h2>
        <x-web::section-button href="{{ $href ?? 'javascript:void(0)' }}">{{ $targetTitle }}</x-web::section-button>
    </div>
</div>

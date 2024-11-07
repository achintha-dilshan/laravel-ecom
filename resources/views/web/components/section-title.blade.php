@props(['title', 'targetTitle', 'href'])

<div class="py-2.5 mb-5 border-b-2 border-gray-300">
    <div class="flex flex-col items-start justify-between gap-1 sm:flex-row">
        <h2
            class="relative text-2xl font-bold text-gray-600  after:content-[''] after:absolute after:h-[2px] after:w-[110%] after:bg-primary-600 after:rounded-r-full after:left-0 sm:after:-bottom-3 after:-bottom-[46px]">
            {{ $title }}</h2>

        @isset($targetTitle)
            <x-web::section-button href="{{ $href ?? 'javascript:void(0)' }}">{{ $targetTitle }}</x-web::section-button>
        @endisset
    </div>
</div>

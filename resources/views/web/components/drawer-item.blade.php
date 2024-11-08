<a {{ $attributes->merge(['class' => 'flex items-center justify-between gap-4 px-4 py-2 text-sm font-normal text-gray-700 transition duration-150 group focus:font-semibold', 'href' => 'javascript:void(0);']) }}>
    {{ $slot }}
</a>

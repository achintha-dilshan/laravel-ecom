<a {{ $attributes->merge(['class' => 'flex items-center justify-between gap-4 px-4 py-2 text-base font-normal text-gray-500 transition duration-150 group focus:text-gray-700 focus:font-medium', 'href' => 'javascript:void(0);']) }}>
    {{ $slot }}
</a>

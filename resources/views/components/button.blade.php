@props(['type' => 'button', 'variant' => 'primary'])

@php
    $commonClasses =
        'relative block font-medium text-sm text-center focus:outline-none disabled:opacity-25 transition ease-in-out duration-150';

    $classes =
        $commonClasses .
        ' px-4 py-2 bg-primary-700 border border-transparent rounded-md text-white hover:bg-primary-800 focus:bg-primary-800 active:bg-primary-900';

    if (strtolower($variant) == 'secondary') {
        $classes =
            $commonClasses . ' px-4 py-2 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50';
    }

    if (strtolower($variant) == 'soft') {
        $classes = $commonClasses . ' px-4 py-2 bg-gray-100 rounded-md text-gray-700 hover:bg-gray-200';
    }

    if (strtolower($variant) == 'icon') {
        $classes = $commonClasses . ' p-2 bg-white rounded-full text-gray-700 hover:bg-gray-100';
    }
@endphp

@if ($type == 'link')
    <a role="button"
       {{ $attributes->merge(['class' => $classes, 'title' => '', 'href' => 'javascript:void(0);']) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['type' => $type, 'class' => $classes, 'title' => '']) }}
            title="Btttt">
        {{ $slot }}
    </button>
@endif

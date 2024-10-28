@props(['type' => 'button', 'variant' => 'primary'])

@php
    $defaultClasses =
        'relative block font-medium text-sm text-center focus:outline-none disabled:opacity-25 transition ease-in-out duration-150';

    $classes =
        $defaultClasses .
        ' px-5 py-2.5 bg-primary-700 border border-primary-700 hover:border-primary-800 rounded-md text-white hover:bg-primary-800 focus:bg-primary-800';

    if (strtolower($variant) == 'secondary') {
        $classes =
            $defaultClasses . ' px-5 py-2.5 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50';
    }

    if (strtolower($variant) == 'soft') {
        $classes =
            $defaultClasses .
            ' px-5 py-2.5 bg-gray-100 rounded-md border border-gray-100 hover:border-gray-200 text-gray-700 hover:bg-gray-200';
    }

    if (strtolower($variant) == 'icon') {
        $classes =
            $defaultClasses .
            ' p-2 bg-white rounded-full text-gray-700 hover:bg-gray-100 border border-transparent hover:border-gray-100';
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

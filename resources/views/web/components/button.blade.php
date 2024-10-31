@props([
    'type' => 'button', 
    'variant' => 'primary'
])

@php
    // Base button classes
    $defaultClasses = 'relative block font-medium text-sm text-center focus:outline-none disabled:opacity-25 transition ease-in-out duration-150';
    
    // Build variant-specific classes
    $classes = match(strtolower($variant)) {
        'secondary' => 'px-5 py-2.5 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 rounded-md',
        'soft' => 'px-5 py-2.5 bg-gray-100 text-gray-700 hover:bg-gray-200 border border-gray-100 hover:border-gray-200 rounded-md',
        'icon' => 'p-2 bg-white rounded-full text-gray-700 hover:bg-gray-100 border-transparent hover:border-gray-100',
        default => 'px-5 py-2.5 bg-primary-700 text-white hover:bg-primary-800 border border-primary-700 hover:border-primary-800 rounded-md'
    };

    // Final classes string
    $classes = $defaultClasses . ' ' . $classes;
@endphp

@if ($type === 'link')
    <a role="button" {{ $attributes->merge(['class' => $classes, 'href' => 'javascript:void(0);']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
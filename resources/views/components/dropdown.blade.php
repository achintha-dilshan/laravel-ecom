@props(['id'])

<div id="{{ $id }}"
     {{ $attributes->merge(['class' => 'z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44']) }}>

    <!-- dropdown header -->
    @isset($header)
        <div class="px-4 py-3 text-sm text-gray-900 ">
            {{ $header }}
        </div>
    @endisset

    <!-- dropdown body -->
    {{ $slot }}
</div>

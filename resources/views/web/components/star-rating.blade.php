@props(['rating' => '0', 'count' => '0'])

<div {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    <div class="relative inline-block overflow-hidden text-gray-200 align-middle">
        <div class="after:content-['★★★★★'] text-lg"></div>
        <div class="absolute top-0 left-0 overflow-hidden whitespace-nowrap text-amber-500 after:content-['★★★★★'] text-lg"
             style="width: {{ $rating }}%">
        </div>
    </div>
    <span class="text-xs text-gray-400">({{ $count }})</span>
</div>

@props(['rating' => '0', 'count' => null])

<div {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    <div class="relative inline-block overflow-hidden text-gray-200 align-middle">
        <div class="after:content-['★★★★★'] text-lg"></div>
        <div class="absolute top-0 left-0 overflow-hidden whitespace-nowrap text-amber-400 after:content-['★★★★★'] text-lg"
             style="width: {{ $rating }}%">
        </div>
    </div>
    @if ($count !== null)
        <span class="text-xs text-gray-400">({{ $count }})</span>
    @endif
</div>

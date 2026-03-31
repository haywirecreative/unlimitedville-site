{{-- Star rating component - displays 4.5 stars --}}
@props(['size' => 'sm'])
@php $cls = $size === 'lg' ? 'w-[13px] h-[13px]' : 'w-3 h-3'; @endphp
<div class="flex gap-0.5">
    @for($i = 0; $i < 4; $i++)
        <x-icons.star class="{{ $cls }}" />
    @endfor
    <x-icons.star-half class="{{ $cls }}" />
</div>
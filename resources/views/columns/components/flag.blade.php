@php
    $code = $getCode();
    $size = $getSize();
@endphp

<div>
    code : {{ $code }} 

    <x-icon name="flag-country-{{ $code }}" />

    <x-flag-language-en />

    <x-filament::icon
    alias="filament-flags::country-{{ $code }}"
    wire:target="search"
    class="h-5 w-5 text-gray-500 dark:text-gray-400"
/>
</div>
@php
    $code = $getCode();
    $size = $getSize();
@endphp

<div>
    code : {{ $code }} 
    <x-icon name="flag-language-{{ $code }}" class="{{ $size }}" />
</div>
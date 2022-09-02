@props(['status' => 'info'])

@php
    if ($status === 'info') { $bgColer = 'bg-blue-300'; }
    elseif ($status === 'error') { $bgColer = 'bg-red-500'; }
@endphp

@if (session('message'))
<div class="{{ $bgColer }} w-1/2 mx-auto p-2">{{ session('message') }}</div>
@endif

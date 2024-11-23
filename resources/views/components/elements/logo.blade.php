@props(['bgColor' => 'primary'])
@php
    $bgColorClasses = [
        'primary' => 'bg-[#1D1E28]',
        'secondary' => 'bg-[#2F323E]',
    ];
@endphp

<div {{ $attributes->merge([
    'class' => 'flex items-center gap-2 w-max ' . $bgColorClasses[$bgColor]
]) }}>
    <img src="{{ asset('/icons/logo.png') }}" alt="" class="aspect-square">
    <p class="font-black text-white text-4xl font-['Montserrat']">CinemaLog</p>
</div>

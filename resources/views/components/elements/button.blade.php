@props(['color' => 'primary', 'size' => 'small', 'type' => 'submit', 'onclick' => ''])

@php
    $colorClasses = [
        'primary' => 'bg-[#419EB9]',
        'secondary' => 'border-white border',
    ];
    $sizeClasses = [
        'small' => 'px-4 py-2 text-sm',
        'large' => 'px-8 py-4 text-xl',
    ];
    $typeClasses = [
        'submit' => 'submit',
        'button' => 'button',
    ];
@endphp

<button
    {{ $attributes->merge(['class' => 'text-white rounded-full ' . $colorClasses[$color] . ' ' . $sizeClasses[$size] . ' ' , 'type' => $typeClasses[$type], 'onclick' => $onclick]) }}>
    {{ $slot }}
</button>

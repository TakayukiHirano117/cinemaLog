@props(['placeholder' => 'keyword', 'icon' => 'search', 'size' => 'small'])

@php
    $placeholderClasses = [
        'keyword' => 'キーワードで検索',
    ];
    $sizeClasses = [
        'small' => 'py-2.5 px-4',
    ];
    $iconClasses = [
        // asset関数に渡す
        'search' => "/icons/search.svg",
        'add-image' => "/icons/add-image.svg",
        'angle-double-small-left' => "/icons/angle-double-small-left.svg",
        'angle-double-small-right' => "/icons/angle-double-small-right.svg",
        'angle-double-down' => "/icons/angle-double-down.svg",
        'angle-double-left' => "/icons/angle-double-left.svg",
        'angle-double-right' => "/icons/angle-double-right.svg",
        'calendar-day' => "/icons/calendar-day.svg",
        'check' => "/icons/check.svg",
        'cross' => "/icons/cross.svg",
        'filter' => "/icons/filter.svg",
        'logo' => "/icons/logo.svg",
        'pencil' => "/icons/pencil.svg",
        'plus' => "/icons/plus.svg",
        'power' => "/icons/power.svg",
    ];
@endphp

<div>
    {{-- asset($iconClasses[$icon]) --}}
    {{-- アイコンはimgタグでinput要素の上に重ねて配置 --}}
    <img src="{{ asset($iconClasses[$icon]) }}" alt="" class="invert-[0.69] sepia-[0.09] saturate-[5.62] hue-rotate-[191deg] brightness-[0.89] contrast-[0.88] h-3.5 w-3.5 absolute ml-4 mt-3">
    <input type="text"
        {{ $attributes->merge(['class' => 'rounded-lg bg-[#FCFCFC] h-[36px] w-[332px] text-sm font-medium pl-10' . ' ' . $sizeClasses[$size], 'placeholder' => $placeholderClasses[$placeholder]]) }} />
</div>

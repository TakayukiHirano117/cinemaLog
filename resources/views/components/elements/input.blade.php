@props(['placeholder' => 'keyword', 'icon' => '', 'size' => 'small'])

@php
    $placeholderClasses = [
        'keyword' => 'キーワードで検索',
    ];
    $sizeClasses = [
        'small' => 'py-2.5 px-4',
    ];
    $iconClasses = [
        // asset関数に渡す
        'search' => "before:bg-[url('/icons/search.svg')]",
    ];
@endphp

<div {{ $attributes->merge(['class' => "inline-block relative before:content-[''] before:w-3.5 before:h-3.5 before:inline-block before:absolute before:pt-1.5 before:pl-3" . ' ' . $iconClasses[$icon] ])}}>
    <input type="text"
        {{ $attributes->merge(['class' => 'rounded-lg bg-[#FCFCFC] h-[36px] w-[332px] text-sm font-medium placeholder:pl-4' . ' ' . $sizeClasses[$size], 'placeholder' => $placeholderClasses[$placeholder]]) }} />
        {{ asset('/icons') }}
</div>

@props(['placeholder' => 'outline'])

@php
    $placeholderClasses = [
        'outline' => '映画のストーリーを簡単にまとめてみましょう。登場人物や主要な出来事を押さえてください。',
        'body' => '映画を見てどう感じましたか？印象に残ったシーンやキャラクターについて書いてください。',
    ];
@endphp

<textarea name="" id="" cols="30" rows="10"
    {{ $attributes->merge([
        'class' => 'rounded-lg p-4 w-[580px] resize-none bg-[#FCFCFC] font-medium  ',
        'placeholder' => $placeholderClasses[$placeholder],
    ]) }}></textarea>

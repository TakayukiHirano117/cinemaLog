@props(['title' => '', 'message' ,'btnLabel' => '', 'onclick' => ''])

@php
    $messageClasses = [
        'edit' => '編集を取り消します。編集中のデータは保存されません。よろしいですか？',
        'delete' => '削除します。削除したデータは元に戻せません。よろしいですか？',
    ];
@endphp

<div class="flex flex-col rounded-lg w-[480px] bg-[#2F323E] text-white p-8 gap-8">
    <div class="flex flex-col gap-4">
        <p class="text-xl font-bold">{{ $title }}</p>
        <p class="font-normal">{{ $messageClasses[$message] }}</p>
    </div>
    <div class="flex gap-4 justify-end">
        {{-- <button class="text-white rounded-full border border-white px-4 py-2 text-sm font-medium hover:opacity-80">キャンセル</button> --}}
        {{-- <button class="text-white rounded-full bg-[#419EB9]  px-4 py-2 text-sm font-medium hover:opacity-80">確定</button> --}}
        {{-- <x-elements.button color="secondary" size="small">キャンセル</x-elements.button>
        <x-elements.button color="primary" size="small">削除</x-elements.button> --}}
        {{ $slot }}
    </div>
</div>

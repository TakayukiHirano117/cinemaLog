<x-layout>
    {{-- button --}}
    <x-elements.button color="primary" size="small" type="submit" onclick="alert('ボタンが押されました！')">ボタン1
        小</x-elements.button>
    <x-elements.button color="primary" size="large">ボタン1 大</x-elements.button>
    <x-elements.button color="secondary" size="small">ボタン2 小</x-elements.button>
    <x-elements.button color="secondary" size="large">ボタン2 大</x-elements.button>
    {{-- input --}}
    <x-elements.input placeholder="keyword" size='small' icon="search" />
    {{-- textarea --}}
    <label for="">あらすじ</label><br>
    <x-elements.textarea placeholder="outline" class="h-[160px]"></x-elements.textarea>
    {{-- select --}}
    <form action="{{ route('form_select') }}" method="POST" class="bg-[url('/icons/check.svg')] bg-center pl-5">
        @csrf
        <x-elements.select :options="$categories" name="category" onclick="" id="category"></x-elements.select>
        <button type="submit">送信</button>
    </form>

    <select name="" id="" class="appearance-none ml-4 pl-10 bg-no-repeat bg-[.5rem_center] bg-left" style="background-image: url('/icons/check.svg');">
        <option value="" class="">hello</option>
        <option value="" class="">sample</option>
        <option value="" class="">bye</option>
    </select>

    <x-elements.datepicker ></x-elements.datepicker>
    <x-elements.logo bgColor="secondary"></x-elements.logo>
    <x-elements.header></x-elements.header>
    <x-elements.dialog title="編集取り消し確認" message="edit" >
        <x-elements.button color="secondary" size="small">キャンセル</x-elements.button>
        <x-elements.button color="primary" size="small">編集</x-elements.button>
    </x-elements.dialog>
    <x-elements.dialog title="削除確認" message="delete" >
        <x-elements.button color="secondary" size="small">キャンセル</x-elements.button>
        <x-elements.button color="tertiary" size="small">削除</x-elements.button>
    </x-elements.dialog>
    <x-elements.slider></x-elements.slider>
</x-layout>

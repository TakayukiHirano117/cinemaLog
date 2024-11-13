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
    <form action="{{ route('form_select') }}" method="POST">
        @csrf
        <x-elements.select :options="$categories" name="category" onclick="" id="category"></x-elements.select>
        <button type="submit">送信</button>
    </form>
    <form action="{{ route('form_select') }}" method="POST">
        @csrf
        <x-elements.select :options="$sortItems" name="sort" onclick="" id="sort"></x-elements.select>
        <button type="submit">送信</button>
    </form>
    <form action="{{ route('form_select') }}" method="POST">
        @csrf
        <select name="sample" id="sample">
            <option value="1">a</option>
            <option value="2">b</option>
            <option value="3">c</option>
        </select>
        <button type="submit">送信</button>
    </form>
</x-layout>

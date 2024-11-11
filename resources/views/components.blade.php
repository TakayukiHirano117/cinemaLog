<x-layout>
    <x-elements.button color="primary" size="small" type="submit" onclick="alert('ボタンが押されました！')">ボタン1 小</x-elements.button>
    <x-elements.button color="primary" size="large">ボタン1 大</x-elements.button>
    <x-elements.button color="secondary" size="small">ボタン2 小</x-elements.button>
    <x-elements.button color="secondary" size="large">ボタン2 大</x-elements.button>
    <x-elements.input placeholder="keyword" size='small' icon="search" />
    <label for="">あらすじ</label><br>
    <x-elements.textarea placeholder="outline" class="h-[160px]"></x-elements.textarea>
    <x-elements.select :options="$categories" type="category"></x-elements.select>
    <x-elements.select :options="$sortItems" type="sort"></x-elements.select>
</x-layout>

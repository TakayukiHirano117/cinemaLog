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
    <select name="" id="" class="bg-[url('/icons/check.svg')] bg-no-repeat bg-[length:w-3.5_h-3.5] bg-[]">
        <option value="" class="">hello</option>
    </select>

    {{-- <form action="{{ route('form_select') }}" method="POST">
        @csrf
        <x-elements.select :options="$sortItems" name="sort" onclick="" id="sort"></x-elements.select>
        <button type="submit">送信</button>
    </form> --}}
    {{-- <form action="{{ route('form_select') }}" method="POST">
        @csrf
        <select name="sample" id="sample">
            <option value="1">a</option>
            <option value="2">b</option>
            <option value="3">c</option>
        </select>
        <button type="submit">送信</button>
    </form> --}}
    <div class="relative inline-block w-64">
  <!-- 隠されたネイティブselect -->
  <select class="hidden" id="custom-select" >
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>

  <!-- カスタムドロップダウン -->
  <div class="bg-white border border-gray-300 rounded-lg shadow-sm">
    <button
      id="dropdown-button"
      class="flex items-center justify-between w-full p-2 focus:outline-none"
    >
      <span class="flex items-center">
        <!-- 初期選択の画像 -->
        <span
          class="w-5 h-5 bg-no-repeat bg-contain mr-2"
          style="background-image: url('/icons/check.svg');"
        ></span>
        Option 1
      </span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5 text-gray-600"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        />
      </svg>
    </button>
    <!-- ドロップダウンの選択肢 -->
    <div
      id="dropdown-menu"
      class="hidden bg-white border border-gray-300 rounded-lg mt-1 shadow-sm"
    >
      <button
        class="flex items-center w-full p-2 hover:bg-gray-100 focus:outline-none"
        data-value="1"
        data-icon="icon1.svg"
      >
        <span
          class="w-5 h-5 bg-no-repeat bg-contain mr-2"
          style="background-image: url('/icons/check.svg');"
        ></span>
        Option 1
      </button>
      <button
        class="flex items-center w-full p-2 hover:bg-gray-100 focus:outline-none"
        data-value="2"
        data-icon="icon2.svg"
      >
        <span
          class="w-5 h-5 bg-no-repeat bg-contain mr-2"
          style="background-image: url('/icons/check.svg');"
        ></span>
        Option 2
      </button>
      <button
        class="flex items-center w-full p-2 hover:bg-gray-100 focus:outline-none"
        data-value="3"
        data-icon="icon3.svg"
      >
        <span
          class="w-5 h-5 bg-no-repeat bg-contain mr-2"
          style="background-image: url('/icons/check.svg');"
        ></span>
        Option 3
      </button>
    </div>
  </div>
</div>

<script>
  // ドロップダウン制御
  const dropdownButton = document.getElementById("dropdown-button");
  const dropdownMenu = document.getElementById("dropdown-menu");
  const selectElement = document.getElementById("custom-select");

  dropdownButton.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
  });

  dropdownMenu.addEventListener("click", (e) => {
    if (e.target.tagName === "BUTTON") {
      const selectedValue = e.target.getAttribute("data-value");
      const selectedIcon = e.target.getAttribute("data-icon");

      
      // ボタンの表示を更新
      dropdownButton.querySelector("span:first-child span").style.backgroundImage =
        `url(${selectedIcon})`;
      dropdownButton.querySelector("span:first-child").innerText = e.target.innerText.trim();

      // ネイティブ select を更新
      selectElement.value = selectedValue;

      // メニューを閉じる
      dropdownMenu.classList.add("hidden");
    }
  });

  document.addEventListener("click", (e) => {
    if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add("hidden");
    }
  });
</script>
</x-layout>

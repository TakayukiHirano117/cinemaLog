<div class="flex justify-between items-center bg-[#2F323E] px-16">
    <x-elements.logo bgColor="secondary"/>
    <div class="flex gap-1 items-center">
        <img src="{{ asset('/icons/power.svg') }}" alt="" class="w-4 h-4 brightness-[1.06] saturate-[1.00] sepia-[1.00] saturate-[0] invert-[0.87] hue-rotate-[130deg] brightness-[1.06] contrast-[1.05]">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-white">ログアウト</button>
        </form>
    </div>
</div>

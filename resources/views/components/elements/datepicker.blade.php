{{-- <input type="date" class="py-2 px-4 rounded-md bg-[#FCFCFC] w-full"> --}}
{{-- <div>
    <input type="text" class="py-2 px-4 rounded-md bg-[#FCFCFC] w-full" onfocus="clickDatePicker()" placeholder="日付を選択">
    <input type="date" name="" id="datePicker" class="hidden">
</div>
 --}}
<div class="relative">
    <img src="{{ asset('/icons/calendar-day.svg') }}" alt=""
        class="invert-[0.69] sepia-[0.09] saturate-[5.62] hue-rotate-[191deg] brightness-[0.89] contrast-[0.88] h-4 w-4 absolute right-4 mt-3">
    <input type="text" id="flatpickr" class="py-2 px-4 rounded-md bg-[#FCFCFC] w-full" placeholder="日付を選択">
</div>

<script>
    flatpickr('#flatpickr');
</script>

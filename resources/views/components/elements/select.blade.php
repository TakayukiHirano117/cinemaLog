@props(['options' => '', 'name' => 'sort', 'onclick' => '', 'id' => '', 'selected' => ''])

<select {{ $attributes->merge([
        'class' => 'bg-[#2F323E] text-white',
        'name' => $name,
        'onclick' => $onclick,
        'id' => $id
    ]) }}>
    @foreach ($options as $option)
        <option value="{{ $option['id'] }}" id="{{ $option['id'] }}">{{ $option['name'] }}</option>
    @endforeach
</select>


<select>
    @if ($type === 'category')
        @foreach ($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
    @elseif($type === 'sort')
        @foreach($options as $key => $val)
            <option value="{{$key}}">{{ $val }}</option>
        @endforeach
    @endif
</select>

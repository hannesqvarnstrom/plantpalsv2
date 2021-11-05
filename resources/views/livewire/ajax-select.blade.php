<select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="{{ $name }}" wire:model='chosenValue'>

    @foreach ($options as $option)
        <option @if ($selected === $option['value'])
            class="text-orange-600"
            
            selected
    @endif
    value="{{ $option['value'] }}">{{ $option['label'] }}
    </option>
    @endforeach

</select>

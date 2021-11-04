<div class="mb-4" {{ $attributes }}>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ $id }}">
        {{ $label }}
    </label>
    @if ($textarea)
        <textarea id="{{ $id }}" name="{{ $name }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            @if ($required) required @endif>{{ $value }}</textarea>
    @else
        <input @if ($value)value="{{ $value }}" @endif type="{{ $type }}" @if ($required) required @endif name="{{ $name }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    @endif
</div>

<div class="mb-4" {{$attributes}}>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{$id}}">
        {{$label}}
      </label>
    <input type="{{$type}}" @if($required) required @endif name="{{$name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
</div>
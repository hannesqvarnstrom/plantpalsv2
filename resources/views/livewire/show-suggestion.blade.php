<a wire:click="toggle" class="
cursor-pointer
text-purple-700
hover:text-purple-900
">{{$suggestion->sci_name}}, <small>suggested at {{$suggestion->created_at}}</small></a>
<x-jet-dialog-modal wire:model="showSuggestion">
<x-slot name="title">Viewing suggestion</x-slot>
    <x-slot name="content">
        @include('suggestions.show')
    </x-slot>
    <x-slot name="footer">
        <a wire:click="toggle" class="
        cursor-pointer
        text-purple-700
        hover:text-purple-900
        ">Close</a>
    </x-slot>
</x-jet-dialog-modal>

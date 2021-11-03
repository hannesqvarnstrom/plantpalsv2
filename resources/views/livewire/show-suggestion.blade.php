<a wire:click="toggle" class="
cursor-pointer
text-purple-700
hover:text-purple-900
">{{$suggestion->sci_name}}, <small>suggested at {{$suggestion->created_at}}</small></a>
<x-jet-dialog-modal wire:model="showSuggestion">
<x-slot name="title">Is this a title?</x-slot>
    <x-slot name="content">Is this content?</x-slot>
    <x-slot name="footer">Is this a footer?!?!?!</x-slot>
</x-jet-dialog-modal>

<x-card>

    <x-slot name="cardHeader"><a wire:click="toggle" class="cursor-pointer text-purple-700 hover:text-purple-900">
            {{ $suggestion->sci_name }}
        </a>
    </x-slot>

    <x-slot name="cardTag">
        by <a href="" class="text-purple-700 hover:text-purple-900">{{ $suggestion->user->name }}</a> /
        {{ $suggestion->taxon_type }}
    </x-slot>

    <x-slot name="cardFooter">
        Suggested at {{ $suggestion->created_at }}
    </x-slot>

    <x-jet-dialog-modal wire:model="showSuggestion">
        <x-slot name="title">Viewing suggestion</x-slot>
        <x-slot name="content">
            @include('suggestions.show')
        </x-slot>
        <x-slot name="footer">
            @can('approve suggestion')
                <x-jet-secondary-button wire:click="approve" class="text-sm">
                    Approve suggestion
                </x-jet-secondary-button>

                <x-jet-secondary-button class="text-sm bg-yellow-500">
                    <a href="{{ route('suggestions.edit', $suggestion) }}">Edit suggestion</a>
                </x-jet-secondary-button>
            @endcan
            <x-jet-danger-button wire:click="toggle">
                Close
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</x-card>

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
            @if (!$success && $status === '')
                @include('suggestions.show')
            @else
                <p>{{ $status }} <a class="text-lg text-purple-600"
                        href="{{ route($route . '.edit', $resource) }}">here!</a></p>
            @endif
        </x-slot>
        <x-slot name="footer">
            @can('approve suggestion')
                <x-jet-secondary-button wire:click="approve" class="text-sm">
                    Approve suggestion
                </x-jet-secondary-button>
            @endcan
            <x-jet-danger-button wire:click="toggle">
                @if (!$success && $status === '')
                    Close
                @else
                    <a href="/dashboard">
                        Close
                    </a>

                @endif
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</x-card>

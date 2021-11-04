<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white py-10 px-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <h2>Suggestions</h2>
                    <div>
                        <h3>Your pending suggestions ({{$pendingSuggestions->count()}})</h3>
                        @foreach($pendingSuggestions as $p)
                        <li class="list-none">
                            @livewire('show-suggestion', ['suggestion' => $p], key($p->id))
                        </li>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

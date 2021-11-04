<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <form method="post" id="update"
                action="{{ route('suggestions.update', ['suggestion' => $suggestion->id]) }}"
                class="bg-white shadow-md rounded p-8 mb-4">
                @method('PUT')
                @csrf
                <h1 class="text-3xl text-center">Editing suggestion</h1>
                <x-form-field :value="$suggestion->sci_name" :name="'sci_name'" :label="'Scientific Name'"
                    :required="true" />
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Taxon type
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="taxon_type">
                        <option @if ($suggestion->taxon_type === '')selected @endif value="">Not sure</option>
                        <option @if ($suggestion->taxon_type === 'Variety')selected @endif value="Variety">Variety</option>
                        <option @if ($suggestion->taxon_type === 'Species')selected @endif value="Species">Species</option>
                        <option @if ($suggestion->taxon_type === 'Genus')selected @endif value="Genus">Genus</option>
                        <option @if ($suggestion->taxon_type === 'Family')selected @endif value="Family">Family</option>
                    </select>
                </div>
                <x-form-field :value="$suggestion->message" :textarea="true" :name="'message'"
                    :label="'Anything else you want to mention? (optional)'" />

            </form>
            <form method="post" id="approve" action="{{ route('suggestions.approve', $suggestion) }}">
                @csrf

            </form>
            <form method="post" id="delete" action="{{ route('suggestions.destroy', $suggestion) }}">
                @csrf
                @method('DELETE')
            </form>

            <x-jet-button form="update" type="submit">
                Save
            </x-jet-button>
            <x-jet-secondary-button form="approve" type="submit">
                Approve suggestion
            </x-jet-secondary-button>
            <x-jet-danger-button type="submit" form="delete">
                Delete
            </x-jet-danger-button>
        </div>
    </div>
</x-app-layout>

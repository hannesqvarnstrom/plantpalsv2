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
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="taxon_type">
                        Taxon type
                    </label>
                    @livewire('ajax-select', [
                    'name' => 'taxon_type',
                    'selected' => $suggestion->taxon_type,
                    'chosenValue' => $suggestion->taxon_type,
                    'resource' => $suggestion,
                    'options' => [
                    [
                    'value' => '',
                    'label' => 'Not sure'
                    ],
                    [
                    'value' => 'Variety',
                    'label' => 'Variety'
                    ],
                    [
                    'value' => 'Species',
                    'label' => 'Species'],
                    [
                    'value' => 'Genus',
                    'label' => 'Genus'],
                    [
                    'value' => 'Family',
                    'label' => 'Family'
                    ],
                    ]])
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

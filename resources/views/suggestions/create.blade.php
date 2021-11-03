<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('suggestions.store') }}"
                class="bg-white shadow-md rounded p-8 mb-4">
                @csrf
                <h1 class="text-3xl text-center">Send a suggestion</h1>
                <x-form-field :name="'sci_name'" :label="'Scientific Name'" :required="true"/>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Taxon type
                      </label>
                    <select required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="taxon_type">
                        <option value="Variety">Variety</option>
                        <option value="Species">Species</option>
                        <option value="Genus">Genus</option>
                        <option value="Family">Family</option>
                    </select>
                </div>
                <x-form-field :textarea="true" :name="'message'" :label="'Anything else you want to mention? (optional)'" />
                <x-submit-button>
                    Send
                </x-submit-button>
            </form>
        </div>
    </div>
</x-app-layout>
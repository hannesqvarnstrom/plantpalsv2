<x-app-layout>
   

    <div class="py-12">
        <h1 class="text-xl text-center">Send a suggestion</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('suggestions.store') }}"
                class="bg-white shadow-md rounded p-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Scientific name
                      </label>
                    <input name="sci_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Taxon type
                      </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="taxon_type">
                        <option value="Variety">Variety</option>
                        <option value="Species">Species</option>
                        <option value="Genus">Genus</option>
                        <option value="Family">Family</option>
                    </select>
                </div>
                <div class="mb-4">
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message">
                    </textarea>
                </div>
                <div class="mb-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Send</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>

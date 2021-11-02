<x-app-layout>
    <h1>Send a suggestion</h1>

    <form method="POST" action="{{route('suggestions.store)')}}">
    @csrf
    <input name="sci_name" placeholder="Scientific Name"/>
        <select name="taxon_type">
            <option value="Variety">Variety</option>
            <option value="Species">Species</option>
            <option value="Genus">Genus</option>
            <option value="Family">Family</option>
        </select>
        <textarea name="message">
        </textarea>
        <button type="submit">Send</button>
    </form>
</x-app-layout>
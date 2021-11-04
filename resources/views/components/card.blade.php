<div class="bg-white p-5 block border my-3">
    @isset($cardHeader)
        <h3 class="text-xl font-bold block">{{ $cardHeader }}<h3>
            @endisset

            @isset($cardTag)
                <p class="md:float-right sm:float-none text-sm text-gray-500">{{ $cardTag }}</p>
            @endisset

            {{ $slot }}

            @isset($cardFooter)
                <small>{{ $cardFooter }}</small>
            @endisset
</div>

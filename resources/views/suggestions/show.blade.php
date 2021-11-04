<?php /** \App\Models\Suggestion $suggestion */
?>

<div>
    <small class="text-sm text-gray-500 ">{{ $suggestion->taxon_type }}</small>
    <h1 class="text-2xl font-bold">{{ $suggestion->sci_name }}</h1>

    @if ($suggestion->message)
        <p>{{ $suggestion->message }}</p>
    @endif

    <small>
        @if ($suggestion->approved)
            Approved by {{ $suggestion->approved_by }}
            at {{ $suggestion->approved_at }}
        @else
            Not approved yet
        @endif
    </small>
</div>

<?php /** \App\Models\Suggestion $suggestion */?>

<div>
    <h1 class="text-xl">{{$suggestion->sci_name}}</h1>

    @if($suggestion->message)
        <p>{{$suggestion->message}}</p>
    @endif

    <small>
        @if($suggestion->approved)
            Approved by {{$suggestion->approved_by}}
            at {{$suggestion->approved_at}}
        @else
        Not approved yet
        @endif
    </small>
</div>
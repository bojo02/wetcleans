@if($ticket->status->slug == 'canceled')
    <span class="badge bg-danger badge-number">{{$ticket->status->name}}</span>

@elseif($ticket->status->slug == 'completed')
    <span class="badge bg-success badge-number">{{$ticket->status->name}}</span>
@else
    <span class="badge bg-primary badge-number">{{$ticket->status->name}}</span>
@endif
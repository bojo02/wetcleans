@include('admin.components.header')

@include('admin.components.menu')

    <div class="pagetitle">
      @if(empty($search))
      <h1>Очакващи почиствания за {{app('request')->input('from_date') ?? date('d/m/Y')}} @if(!empty(app('request')->input('to_date'))) до {{app('request')->input('to_date')}} @endif  <a style="float:right;" href="{{route('admin.ticket.create')}}" class="btn btn-success">Добави билет</a></h1>
      @else
      <h1>Резултати за: {{$search}}  <a style="float:right;" href="{{route('admin.ticket.create')}}" class="btn btn-success">Добави билет</a></h1>
      @endif
      <br>
      @if(auth()->user()->role->slug == 'admin')
      
        <form action="{{route('admin.index')}}">

          <label for="from_date">От дата <input class="form-control" id="from_date" value="{{app('request')->input('from_date') ?? date('Y-m-d')}}" name="from_date" type="date"></label>
      
          <label for="to_date">До дата <input class="form-control" id="to_date" value="{{app('request')->input('to_date') ?? date('Y-m-d')}}" name="to_date" type="date"></label>

          <label for="selected_status">Статус 
            <select class="form-control" name="selected_status" id="selected_status">
              @foreach($statuses as $status)
                <option @if(app('request')->input('selected_status') == $status->id) selected @endif value="{{$status->id}}">{{$status->name}}</option>
              @endforeach
            </select>
          </label>

          <button type="submit" class="btn btn-dark">Филтрирай</button>

        </form>
        @endif
      
     
     
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach($tickets as $ticket)

            <p style="display:none;">{{$amount = 0}}</p>

            
          
            <div class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><a href="{{route('admin.ticket.edit', ['ticket' => $ticket->id])}}"><i class="bi bi-arrow-up-left-square"> Отвори</i> </a> | {{$ticket->name}}
                 
                </h5>
                
                @if(empty(app('request')->input('to_date')))
                  <small class="text-muted"> @include('admin.components.status') <strong>{{date('H:i', strtotime($ticket->date_time))}}</strong></small>
                @else
                <small class="text-muted">@include('admin.components.status') <strong>{{date('H:i', strtotime($ticket->date_time))}} | {{date('d/m/Y', strtotime($ticket->date_time))}}</strong></small>
                @endif
              </div>
              <p class="mb-1">
                @foreach($ticket->TicketServices()->get() as $ticketService)
                  <p style="display:none;">{{$amount += $ticketService->service->price * $ticketService->quantity}}</p>
                <span>| {{$ticketService->name}}</span>
              @endforeach
              </p>
              <small class="text-muted">Тел: <a href="tel:{{$ticket->phone}}">{{$ticket->phone}}</a> |
              Адрес: <a target="_blank" href="https://www.google.com/maps/search/{{$ticket->address}} сандански">{{$ticket->address}}</a>  
            | Сума: {{$amount}}лв</small>
            </div>
            @endforeach

            <div style="padding-top:20px;">
              @if($tickets != null)
               {{$tickets->links()}}
              @endif
              </div>
            
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
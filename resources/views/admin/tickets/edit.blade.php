@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Редактиране на билет 

        @if(auth()->user()->isAdmin())
          <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.tickets.set.status', ['ticket' => $ticket->id, 'status' => $completed])}}" class="btn btn-success"><i class="bi bi-check-lg"></i> Приключване</a>
          <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.tickets.set.status', ['ticket' => $ticket->id, 'status' => $canceled])}}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Отказване</a>
        @elseif($ticket->status->id == $waiting)
          <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.tickets.set.status', ['ticket' => $ticket->id, 'status' => $completed])}}" class="btn btn-success"><i class="bi bi-check-lg"></i> Приключване</a>
          <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.tickets.set.status', ['ticket' => $ticket->id, 'status' => $canceled])}}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Отказване</a>
        @endif
      
      </h1>
    </div><!-- End Page Title -->
    @include('admin.components.status')
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.ticket.update', ['ticket' => $ticket->id])}}" method="POST" enctype="multipart/form-data">
                @CSRF
                @METHOD('PUT')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Име и Фамилия</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$ticket->name}}" class="form-control">
                  </div>
                </div>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Телефон</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" placeholder="" value="{{$ticket->phone}}" class="form-control">
                  </div>
                </div>
                @error('phone')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Адрес</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" placeholder="" value="{{$ticket->address}}" class="form-control">
                    </div>
                  </div>
                  @error('address')
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{$message}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror

                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Дата и час</label>
                    <div class="col-sm-10">
                      <input type="datetime-local" name="date_time" placeholder="" value="{{$ticket->date_time}}" class="form-control">
                    </div>
                  </div>
                  @error('date_time')
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{$message}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror

                 
                  <label for="selected_status">Статус</label>
                  <select class="form-control" name="selected_status" id="selected_status">
                    @foreach($statuses as $status)
                      <option @if($ticket->status_id == $status->id) selected @endif value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                  </select>
                 <br>
                 <br>

                 @if(auth()->user()->isAdmin())
                  <button type="submit" class="btn btn-primary">Редактиране</button>

                  <a onclick="return confirm('Сигурни ли сте?')" style="float:right;" href="{{route('admin.ticket.destroy', ['ticket' => $ticket->id])}}" class="btn btn-danger">Изтрий</a>
                @endif
            </form>

            

            <div>
              <h3 style="padding-top:20px;">Услуги  <a style="float:right;" href="{{route('admin.ticket.create.service', ['ticket' => $ticket->id])}}" class="btn btn-success">Добави нова услуга</a></h3>
             
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Услуга</th>
                  <th scope="col">Брой / КВ.М.</th>
                  <th scope="col">Цена</th>
                  <th scope="col">Действия</th>
                </tr>
              </thead>
              <tbody>

                @foreach($ticket->TicketServices()->get() as $ticketService)
               
                <tr>
                  <th scope="row">{{$ticketService->id}}</th>
                  <td>{{$ticketService->name}}</td>
                  <td>{{$ticketService->quantity}}@if($ticketService->service->is_square == 1) кв.м. @else бр. @endif * {{$ticketService->service->price}}лв.</td>
                  <td>{{$ticketService->service->price * $ticketService->quantity}}лв.  </td>
                  <td><a href="{{route('admin.ticket.edit.service', ['ticketService' => $ticketService->id])}}" class="btn btn-primary">Редактиране</a> <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.ticket.destroy.service', ['ticketService' => $ticketService->id])}}" class="btn btn-danger">Изтрий</a></td>
                </tr>
               
                @endforeach
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    @foreach($ticket->TicketServices()->get() as $ticketService)
                    <p style="display:none;">{{$amount += $ticketService->service->price * $ticketService->quantity}}</p>
                    @endforeach
                    <span>Тотал: {{$amount}}лв.</span>
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
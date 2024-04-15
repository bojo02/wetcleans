@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Добавяне на услуга</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.ticket.store.service', ['ticket' => $ticket->id])}}" method="POST">
                @CSRF
                <div class="row mb-3">
                    <label for="service">Избери услуга</label>

                    <select name="service" class="form-select" id="service">
                      @foreach($services as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                      @endforeach
                     
                    </select> 
                </div>
                @error('service')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Количество / кв.м.</label>
                  <div class="col-sm-10">
                    <input type="text" name="quantity" value="" placeholder="" class="form-control">
                  </div>
                </div>
                @error('quantity')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror

                <button type="submit" class="btn btn-success">Добави</button>
            </form>

            
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
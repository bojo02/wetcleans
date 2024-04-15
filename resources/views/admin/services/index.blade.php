@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Услуги <a style="float:right;" href="{{route('admin.service.create')}}" class="btn btn-success">Добави услуга</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($services as $service)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">
                    <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.service.delete',['service' => $service->id])}}"><i style="color:red;" class="bi bi-trash-fill"></i></a> 
                    <a href="{{route('admin.service.edit', ['service' => $service->id])}}"> <i class="bi bi-pencil-fill"></i> </a>
                    <a href="{{route('admin.service.edit', ['service' => $service->id])}}"> {{$service->id}} | {{$service->name}} | {{$service->price}}</a></h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
           @if($services != null)
            {{$services->links()}}
           @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Статуси <a style="float:right;" href="{{route('admin.status.create')}}" class="btn btn-success">Добави статус</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($statuses as $status)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><a href="{{route('admin.status.edit', ['status' => $status->id])}}"> 
                    <a href="{{route('admin.status.edit', ['status' => $status->id])}}"> <i class="bi bi-pencil-fill"></i> </a>
                    <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.status.delete',['status' => $status->id])}}"><i style="color:red;" class="bi bi-trash-fill"></i></a> 
                    {{$status->id}} > {{$status->name}} > ({{$status->slug}})
                    
                  </h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
           @if($statuses != null)
            {{$statuses->links()}}
           @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
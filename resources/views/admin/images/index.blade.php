@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Галерия <a style="float:right;" href="{{route('admin.gallery.create')}}" class="btn btn-success">Добави снимка</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($images as $image)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">
                    <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.gallery.delete',['image' => $image->id])}}"><i style="color:red;" class="bi bi-trash-fill"></i></a> 
                     <img style="width: 50px; height:50px;" src="{{$image->src}}" alt=""> </a></h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
           @if($images != null)
            {{$images->links()}}
           @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
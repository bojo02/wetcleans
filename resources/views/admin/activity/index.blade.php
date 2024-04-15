@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Activity LOG <a style="float:right;" href="{{route('admin.activity.create')}}" class="btn btn-success">Добави LOG</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($notifications as $notification)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">
                    @if(auth()->user()->findNotification(auth()->user()->id, $notification->id)->seen == 1)
                    
                    <a href="{{route('admin.activity.make.unseen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:green;" class="bi bi-eye-fill"></i></a>

                    @else
                        <a href="{{route('admin.activity.make.seen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:red;" class="bi bi-eye-slash-fill"></i></a>
                    @endif

                    <a href="{{route('admin.activity.edit', ['notification' => $notification->id])}}"> <i class="bi bi-pencil-fill"></i> </a>

                    <a href="{{route('admin.activity.show', ['notification' => $notification->id])}}"> <i style="color:darkgreen;" class="bi bi-arrow-right-square-fill"></i> </a>
                    
                    <span>{{  Str::limit($notification->title, 25) }}</span>
                  </h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
              @if($notifications != null)
                {{$notifications->links()}}
              @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
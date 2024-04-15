@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Нотификация - {{$notification->created_at->diffForHumans()}}</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @if(auth()->user()->findNotification(auth()->user()->id, $notification->id)->seen == 1)
                    
                      @if(auth()->user()->isAdmin())
                        <a style="font-size:30px;" href="{{route('admin.notification.make.unseen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:green;" class="bi bi-eye-fill"></i></a>
                      @endif

                    @else
                        <a style="font-size:30px;" href="{{route('admin.notification.make.seen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:red;" class="bi bi-eye-slash-fill"></i></a>
                    @endif
            
            <div style="border:1px solid black; padding:10px;">
                <p>{!!$notification->title!!}</p>
            </div>
     
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
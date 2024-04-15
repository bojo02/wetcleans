@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Редактиране на нотификация {{$notification->created_at->diffForHumans()}}</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @if(auth()->user()->findNotification(auth()->user()->id, $notification->id)->seen == 1)
                    
            <a style="font-size:30px;" href="{{route('admin.notification.make.unseen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:green;" class="bi bi-eye-fill"></i></a>

            @else
                <a style="font-size:30px;" href="{{route('admin.notification.make.seen', ['notification' => $notification->id, 'user' => auth()->user()->id])}}"><i style="color:red;" class="bi bi-eye-slash-fill"></i></a>
            @endif
          
            <form action="{{route('admin.notification.update', ['notification' => $notification->id])}}" method="POST" enctype="multipart/form-data">
                @CSRF
                @METHOD('PUT')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Текст на нотификацията</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" value="{{$notification->title}}" class="form-control">
                  </div>
                </div>
                @error('title')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror

                <button type="submit" class="btn btn-primary">Обнови</button>

                <a onclick="return confirm('Сигурни ли сте?')" style="float:right;" href="{{route('admin.notification.delete', ['notification' => $notification->id])}}" class="btn btn-danger">Изтрий</a>
            </form>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
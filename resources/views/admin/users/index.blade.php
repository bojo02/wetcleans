@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Потребители <a style="float:right;" href="{{route('admin.user.create')}}" class="btn btn-success">Добави потребител</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($users as $user)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><a href="{{route('admin.user.edit', ['user' => $user->id])}}"> 
                    <a href="{{route('admin.user.edit', ['user' => $user->id])}}"> <i class="bi bi-pencil-fill"></i> </a>
                    <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.user.delete',['user' => $user->id])}}"><i style="color:red;" class="bi bi-trash-fill"></i></a>
                    {{$user->id}} | {{$user->name}} | ({{$user->email}}) | {{$user->role->name}}</a></h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
           @if($users != null)
            {{$users->links()}}
           @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
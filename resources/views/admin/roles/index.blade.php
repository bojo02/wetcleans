@include('admin.components.header')

@include('admin.components.menu')

 

    <div style="padding-bottom:10px;" class="pagetitle">
      
        <h1>Роли <a style="float:right;" href="{{route('admin.role.create')}}" class="btn btn-success">Добави роля</a></h1>
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">

            @foreach ($roles as $role)

            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><a href="{{route('admin.role.edit', ['role' => $role->id])}}"> 
                    <a href="{{route('admin.role.edit', ['role' => $role->id])}}"> <i class="bi bi-pencil-fill"></i> </a>
                    <a onclick="return confirm('Сигурни ли сте?')" href="{{route('admin.role.delete',['role' => $role->id])}}"><i style="color:red;" class="bi bi-trash-fill"></i></a>
                    {{$role->id}} > {{$role->name}} > ({{$role->slug}})</h5>
                </div>
              </div>
                
            @endforeach

            
          
           <div style="padding-top:20px;">
           @if($roles != null)
            {{$roles->links()}}
           @endif
           </div>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
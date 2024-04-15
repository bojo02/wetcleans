@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Редактиране на потребител</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.user.update', ['user' => $user->id])}}" method="POST">
                @CSRF
                @METHOD('PUT')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Име и Фамилия</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                  </div>
                </div>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Имейл</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" value="{{$user->email}}" placeholder="Пример: test@test.com" class="form-control">
                  </div>
                </div>
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Парола</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" placeholder="" class="form-control">
                  </div>
                </div>
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                


                <label for="role_id">Избери роля
                  <select class="form-control" name="role_id" id="role_id">
                    @foreach($roles as $role)
                      <option @if($role->id == $user->role_id) selected @endif value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select>
                </label>
              
                <br>
                <br>

                <button type="submit" class="btn btn-primary">Обнови</button>

                <a onclick="return confirm('Сигурни ли сте?')" style="float:right;" href="{{route('admin.user.delete', ['user' => $user->id])}}" class="btn btn-danger">Изтрий</a>
            </form>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
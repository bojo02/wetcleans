@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Добавяне на нова роля</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.role.store')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Име на ролята</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="" class="form-control">
                  </div>
                </div>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" name="slug" value="" placeholder="Пример: admin, employee" class="form-control">
                  </div>
                </div>
                @error('slug')
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
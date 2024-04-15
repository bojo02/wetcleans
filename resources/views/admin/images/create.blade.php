@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Добавяне на нова снимка/и към галерията</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.gallery.store')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Избери снимка</label>
                  <div class="col-sm-10">
                    <input multiple type="file" name="images[]" class="form-control">
                  </div>
                </div>
                @error('images')
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
@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Добавяне на нова услуга</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.service.store')}}" method="POST">
                @CSRF
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Име на услугата</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Цена</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" placeholder="Пример: 49.99" class="form-control">
                  </div>
                </div>
                @error('price')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror

                <input name="is_square" id="is_square" type="checkbox">
                <label for="is_square">Услугата в квадратни метри ли е?</label>
                <br>
               <br>

                <button type="submit" class="btn btn-success">Добави</button>
            </form>
           
          
          </div><!-- End List group Advanced Content -->

      </div>
    </section>



 @include('admin.components.footer')
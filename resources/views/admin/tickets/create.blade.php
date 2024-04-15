@include('admin.components.header')

@include('admin.components.menu')

 

    <div class="pagetitle">
      <h1>Добавяне на нов билет</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
         
           <!-- List group with Advanced Contents -->
           <div class="list-group">
          
            <form action="{{route('admin.ticket.store')}}" method="POST">
                @CSRF
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Име и Фамилия</label>
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
                  <label for="inputEmail" class="col-sm-2 col-form-label">Телефон</label>
                  <div class="col-sm-10">
                    <input type="text" name="phone" placeholder="" class="form-control">
                  </div>
                </div>
                @error('phone')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Адрес</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" placeholder="" class="form-control">
                    </div>
                  </div>
                  @error('address')
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{$message}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror

                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Дата и час</label>
                    <div class="col-sm-10">
                      <input type="datetime-local" name="date_time" placeholder="" class="form-control">
                    </div>
                  </div>
                  @error('date_time')
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
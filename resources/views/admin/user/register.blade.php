@include('admin.components.header')

<main>
    <div class="container">
      @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(Session::has('wrong'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{Session::get('wrong')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">WetCleans</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Създай акаунт</h5>
                    
                  </div>

                  <form action="{{route('register.attempt')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @CSRF
                    <div class="col-12">
                      <label for="yourName" class="form-label">Име и Фамилия</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Моля, въведете вашето име!</div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Имейл</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Моля, въведете валиден имейл!</div>
                    </div>
                    @error('email')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Парола</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    @error('password')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror

                    <div class="col-12">
                      <label for="yourPassword2" class="form-label">Потвърждаване на паролата</label>
                      <input type="password" name="password_confirmation" class="form-control" id="yourPassword2" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                 
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Създай</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Имаш акаунт? <a href="{{route('login')}}">Влез</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
               От <a href="https://saitmax.com/">SaitMax</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

@include('admin.components.footer')
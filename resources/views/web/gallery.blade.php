@include('web.components.header-page')

@include('web.components.menu-pages')

<!--==================================================-->
<!-- Start cleeny breatcome Area -->
<!--==================================================-->

<div class="breatcome-area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Галерия</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Галерия</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .modal-dialog{
              max-width: 100%;
            }
            .carousel-control{
              color: black;
            }
            </style>

       
       
       
        
        <div class="breatcome-shape">
            <img src="assets/images/breatcome-shape.png" alt="breatcome-shape">
        </div>
    </div>
    <div class="intro__bg">
        <canvas id="intro__canvas" data-colors='["#FFC703", "#ffff", "#2F6DFF"]'></canvas>
    </div>
</div>

<br>

<div class="container">

    <div style="text-align: center">
        <h3>Част от нашите почиствания</h3>
    </div>

    <style>
        .col-4 img {
            width: 400px; height: 300px;
            margin-top:20px;
            object-fit: cover;
}
    </style>

    <div class="row" style="text-align: center">
        @foreach($images as $image)
            <div class="col-4"   style=" object-fit: cover; object-position: 100% 0;">
                <a  href="{{$image->src}}" data-toggle="lightbox" data-gallery="example-gallery" class="img">
                    <img style="border:3px solid black;" src="{{$image->src}}" class="img-fluid">
                </a>
            </div>
        @endforeach
        
       
        
    </div>
    <br>
<br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
<script src="{{asset('assets/js/modal.js')}}"></script>
 <script>
  import Lightbox from 'bs5-lightbox';

const options = {
	keyboard: true,
	size: 'fullscreen'
};

document.querySelectorAll('.my-lightbox-toggle').forEach((el) => el.addEventListener('click', (e) => {
	e.preventDefault();
	const lightbox = new Lightbox(el, options);
	lightbox.show();
}));


 </script>

<!--==================================================-->
<!-- end cleeny map Area -->
<!--==================================================-->

@include('web.components.footer')
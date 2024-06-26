<body>
<!-- loder -->
<div class="loader-wrapper">
	<div class="loader"></div>
	<div class="loder-section left-section"></div>
	<div class="loder-section right-section"></div>
  </div>



<!--==================================================-->
<!-- Start cleeny header-top-section -->
<!--==================================================-->

	<div class="header-top-section style-two">
		<div class="container">
			<div class="row align-items-center d-flex">
				<div class="col-lg-6">
					<div class="header-address-info">
						<p> <i class="bi bi-geo-alt"></i>Град Сандански <span> <i class="bi bi-envelope-open"></i> info@wetcleans.com </span></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="header-top-right text-right">
						<div class="hendrio-social-icon">
						<ul>
							<li><a href="https://www.facebook.com/wetcleans"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							@if(auth()->user())
							<li><a href="{{route('admin.index')}}"><i class="bi bi-file-lock-fill"></i></a></li>
							@endif
						</ul>
					</div>
                    <a href="tel:+359897064520">
                        <div class="phone-number">
                            <p> <i class="fas fa-phone-square-alt"></i> <span>Телефон :</span> +359 89 706 4520 </p>
                        </div>
                    </a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--==================================================-->
<!-- end cleeny header-top-section -->
<!--==================================================-->




<!--==================================================-->
<!-- Start cleeny Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="cleeny_nav_manu">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-3">
				<div class="logo">
					<a class="logo_img" href="{{route('home')}}" title="wetcleans logo">
						<img src="{{asset('images/logo-wetcleans.png')}}" alt="logo">
					</a>
					<a class="main_sticky" href="{{route('home')}}" title="wetcleans logo">
						<span class="mobile-logo-texst2">WetCleans</span>
					</a>
				</div>
			</div>
			<div class="col-lg-9">
				<nav class="cleeny_menu">
					<ul class="nav_scroll">
                        <li><a href="{{route('home')}}">Начало</a></li>
						<li><a href="{{route('aboutUs')}}">За нас</a></li>
						<li><a href="{{route('services')}}">Услуги <i class="bi bi-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{route('divani')}}">Почистване на дивани</a></li>
								<li><a href="{{route('matraci')}}">Пране на матраци</a></li>
								<li><a href="{{route('stolove')}}">Почистване на столове</a></li>
								<li><a href="{{route('prozorci')}}">Почистване на прозорци</a></li>
								<li><a href="{{route('kilimi')}}">Почистване на килими</a></li>
								<li><a href="{{route('kilimi')}}">Почистване на автосалони</a></li>
							</ul>
						</li>
						<li><a href="{{route('gallery')}}">Галерия</a></li>
						<li><a href="{{route('contacts')}}">Контакти</a></li>
					</ul>
					
					<div class="cleeny-btn">
						<a href="{{route('home')}}/#appointment">Запази час</a>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>



<!--==================================================-->
<!-- End cleeny Main Menu Area -->
<!--==================================================-->
@include('web.components.phone-menu')
<!--==================================================-->
<!-- Start Curser Section Here -->
<!--==================================================-->
<div class="curser"></div>
<div class="curser2"></div>
<!--==================================================-->
<!-- Ends Curser Section Here -->
<!--==================================================-->
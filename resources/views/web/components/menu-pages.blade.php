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
<!-- Start cleeny header-top-section -->
<!--==================================================-->

<div class="header-top-area">
<div class="container">
	<div class="row align-items-center d-flex">
		<div class="col-lg-4">
			<div class="header-address-logo">
				<a href="{{route('home')}}"><img src="{{asset('images/logo-wetcleans.png')}}" alt="wetcleans logo"></a>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="header-top-left">
				<div class="cleeny-social-icon">
					<ul>
						<li><a href="tel:+359 89 706 4520"><i class="fas fa-phone-alt"></i>+359 89 706 4520</a></li>
						<li><a href="mailto:info@wetcleans.com"><i class="bi bi-envelope"></i>info@wetcleans.com</a></li>
						<li class="upper"><a href="{{route('contacts')}}"><i class="bi bi-alarm"></i>Пон - Пет 08:00 to 18:00</a></li>
					</ul>
				</div>
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
<div id="sticky-header" class="cleeny_nav_manu style-two">
	<div class="container">
		<div class="row upper d-flex align-items-center">
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
				</nav>
			</div>
			<div class="col-lg-3">
				<div class="sticke-upper d-flex align-items-center">
				
					<div class="cleenys-btn">
						<a href="{{route('contacts')}}">Запази час <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('web.components.phone-menu')
<!--==================================================-->
<!-- End cleeny Main Menu Area -->
<!--==================================================-->
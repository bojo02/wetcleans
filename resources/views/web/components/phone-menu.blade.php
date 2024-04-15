<!-- cleeny Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		
		<nav class="cleeny_menu">
			<a href="{{route('home')}}"><span class="mobile-logo-texst">WetCleans</span></a>
			<ul class="nav_scroll">
            <li><a href="{{route('home')}}">Начало</a></li>
            <li><a href="{{route('aboutUs')}}">За нас</a></li>
						<li><a href="{{route('services')}}">Услуги <i class="bi bi-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{route('services')}}">Всички</a></li>
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
</div>
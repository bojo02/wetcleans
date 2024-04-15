@include('web.components.header')

@include('web.components.menu')






<!--==================================================-->
<!-- Start cleeny hero Area -->
<!--==================================================-->


	<div class="hero-area d-flex align-items-center">
		<div class="container">
			<div class="row hero align-items-center">
				<div class="col-lg-6">
					<div class="hero-contant">
						<h5>WetCleans</h5>
						<h1>Професионално почистване</h1>
						<h1>в град <span>Сандански</span></h1>
						<p>Нуждаете се от почистване?<br>Не се колебайте да се свържете с нас!</p>
						<div class="cleeny-btn">
							<a href="{{route('services')}}">Услуги ></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-thumb" data-tilt>
						<img src="{{asset('assets/images/main-image.png')}}" alt="hero-thumb">
					</div>
				</div>
			</div>
			<div id="particles-js"></div>
		</div>
		
		
	</div>

<!--==================================================-->
<!-- end cleeny hero Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start cleeny feature Area -->
<!--==================================================-->

	<div class="feature-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="feature-single-box d-flex">
						<div class="feature-icon">
							<img src="assets/images/feature-icon.png" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Почистване на Текстил</h3>
							<p class="feature-text"><a href="">Автосалони</a>, <a href="">матраци</a>, <a href="">дивани</a>, <a href="">столове</a></p>
						</div>
					</div>
				</div> 
				<div class="col-lg-4 col-md-6">
					<div class="feature-single-box d-flex">
						<div class="feature-icon">
							<img src="assets/images/feature-icon2.png" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Почистване на прозорци</h3>
							<p class="feature-text">Премахване на петна и следи по прозорците, мухъл, мръсотия и прах</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-single-box d-flex">
						<div class="feature-icon">
							<img src="assets/images/feature-icon3.png" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Почистване на столове</h3>
							<p class="feature-text">Почистване на столове, кожени столове фотьойли и др.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	
<!--==================================================-->
<!-- end cleeny feature Area -->
<!--==================================================-->







<!--==================================================-->
<!-- Start cleeny about Area -->
<!--==================================================-->

	<div class="about-area">
		<div class="container">
			<div class="row about align-items-center">
				<div class="col-lg-6">
					<div class="about-thumb">
						<img src="assets/images/about-thumb.png" alt="about-thumb">
						
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section-title text-left">
						<h5 class="section-sub-title">За нас</h5>
						<h1 class="section-main-title">Защо да изберете нас?</h1>
						<p class="section-title-descr">Нашата мисия е да предлагаме безупречно отношение към своите клиенти и висококачествено обслужване. </p>
					</div>
					<div class="about-box d-flex">
						<ul class="about-list">
							<li><i class="bi bi-check-circle-fill"></i>Гъвкавост и надеждност</li>
							<li><i class="bi bi-check-circle-fill"></i>Висококачествено почистване</li>
							<li><i class="bi bi-check-circle-fill"></i>Професионално отношение</li>
						</ul>
						<div class="counter-single-box">
							<div class="counter-icon">
								<img src="assets/images/counter-icon.png" alt="">
							</div>
							<div class="counter-number">
								<h1 class="counter">100</h1>
								<h1>%</h1>
							</div>
							<p class="counter-text">Доволни клиенти</p>	
						</div>
					</div>
					<div class="cleeny-btn">
						<a href="{{route('aboutUs')}}">Виж още <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="about-shape2">
				<img src="{{asset('assets/images/about-shape2.png')}}" alt="about-shape2">
			</div>
		</div>	
	</div>

<!--==================================================-->
<!-- end cleeny about Area -->
<!--==================================================-->
<div class="service-area" id="appointment">
    <div class="container">
        <div class="row">

				@include('web.components.contact')


				<div class="col-lg-12">
					<div class="section-title text-center">
						<h5 style="font-size:18px;" class="section-sub-title">Нашите услуги</h5>
						<h1 class="section-main-title">Професионално почистване</h1>
					</div>
				</div>
				<div class="service_list owl-carousel">
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-divan.jpg')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Почистване на дивани</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Дълбоки замърсявания</li>
									<li><i class="bi bi-check-lg"></i> Мокро почистване</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('divani')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-matrak.jpg')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Почистване на матраци</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Дълбоки замърсявания</li>
									<li><i class="bi bi-check-lg"></i> Мокро почистване</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('matraci')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon2.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-stolove.jpg')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Почистване на столове</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Мокро почистване</li>
									<li><i class="bi bi-check-lg"></i> Дълбоко почистване</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('stolove')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-prozorci.jpg')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Почистване на прозорци</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Премахване на петна</li>
									<li><i class="bi bi-check-lg"></i> Двустранно почистване</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('prozorci')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon3.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-kilimi.webp')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Почистване на килими</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Дълбоко почистване</li>
									<li><i class="bi bi-check-lg"></i> Мокро почистване</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('kilimi')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="service-single-box">
							<div class="service-thumb">
								<img src="{{asset('images/pochistvane-na-avtosalon.jpg')}}" alt="service-img">
							</div>
							<div class="service-content">
								<h3 class="service-title">Автосалони</h3>
								<ul class="service-list">
									<li><i class="bi bi-check-lg"></i> Обикновен салон</li>
									<li><i class="bi bi-check-lg"></i> Кожен салон</li>
								</ul>
								<div class="service-btn">
									<a href="{{route('avtosaloni')}}">Отвори <i class="bi bi-arrow-right"></i></a>
								</div>
								<div class="service-icon">
									<img src="{{asset('assets/images/service-icon2.png')}}" alt="service-icon">
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="service-shape">
				<img src="assets/images/service-shape-1.png" alt="service-shape-1">
			</div>
		</div>
	</div>

<!--==================================================-->
<!-- end cleeny service Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start cleeny work Area -->
<!--==================================================-->

	<div class="work-area">
		<div class="container">
			<div class="row work">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h5 class="section-sub-title">Нашият процес</h5>
						<h1 class="section-main-title">Професионално почистване</h1>
						<p class="section-title-descr">Competently repurpose go forward benefits without goal-oriented ROI
						conveniently target e-business opportunities whereas</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="work-single-box">
						<div class="work-icon">
							<img src="assets/images/work-icon.png" alt="work-icon">
							<div class="work-number">
								<span>1</span>
							</div>
						</div>
						<div class="work-content">
							<h3 class="work-title">Запитване</h3>
							<p class="work-description">Обадете ни се или попълнете контактната форма</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="work-single-box">
						<div class="work-icon">
							<img src="assets/images/work-icon2.png" alt="work-icon">
							<div class="work-number">
								<span>2</span>
							</div>
						</div>
						<div class="work-content">
							<h3 class="work-title">Безплатен оглед</h3>
							<p class="work-description">Организираме безплатен оглед и изготвяме оферта</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="work-single-box">
						<div class="work-icon">
							<img src="assets/images/work-icon3.png" alt="work-icon">
							<div class="work-number">
								<span>3</span>
							</div>
						</div>
						<div class="work-content">
							<h3 class="work-title">Почистване</h3>
							<p class="work-description">След оглед, изпращаме екип до вашият<br> адрес</p>
						</div>
					</div>
				</div>
			</div>
			<div class="work-shape">
				<img src="assets/images/work-shape.png" alt="work-shape">
			</div>
			<div class="work-shape2">
				<img src="assets/images/work-shape2.png" alt="work-shape2">
			</div>
			<div class="work-shape3 bounce-animate4">
				<img src="assets/images/work-shape3.png" alt="work-shape3">
			</div>
			<div class="work-shape4 bounce-animate5">
				<img src="assets/images/spray.png" alt="work-shape4">
			</div>
		</div>
	</div>



<!--==================================================-->
<!-- end cleeny work Area -->
<!--==================================================-->






@include('web.components.footer')
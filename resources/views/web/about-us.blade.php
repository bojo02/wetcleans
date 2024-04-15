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
                        <h1>За нас</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">За нас</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breatcome-shape">
            <img src="assets/images/breatcome-shape.png" alt="breatcome-shape">
        </div>
    </div>
    <div class="intro__bg">
        <canvas id="intro__canvas" data-colors='["#FFC703", "#ffff", "#2F6DFF"]'></canvas>
    </div>
</div>

<!--==================================================-->
<!-- end cleeny breatcome Area -->
<!--==================================================-->







<!--==================================================-->
<!-- Start cleeny about Area -->
<!--==================================================-->

<div class="about-area style-two">
    <div class="container">
        <div class="row about align-items-center">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <img src="{{asset('images/about-us.png')}}" alt="about-thumb">
                    <div class="about-shape3 bounce-animate3">
                        <img src="assets/images/about-shape3.png" alt="about-shpe3">
                    </div>
                    <div class="about-shape4 bounce-animate5">
                        <img src="assets/images/about-shape4.png" alt="about-shpe4">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h5 class="section-sub-title">За нас</h5>
                    <h1 class="section-main-title">Чистотата е здраве</h1>
                    <h1 class="section-main-title">и подобрява живота.</h1>
                    <p class="section-title-descr">От самото начало, WetCleans е била ангажирана с 
                        използването на еко-приятелски и безопасни почистващи продукти, които защитават както 
                        нашата планета, така и здравето на нашите клиенти. Нашата посветеност към иновациите и 
                        постоянното усъвършенстване на нашите методики и техники за почистване ни позволява да 
                        постигаме изключителни резултати всеки път.</p>
                </div>
                <div class="about-box d-flex">
                    <ul class="about-list">
                        <li><i class="bi bi-check-circle-fill"></i>Персонализирано Обслужване</li>
                        <li><i class="bi bi-check-circle-fill"></i>Професионален Екип</li>
                        <li><i class="bi bi-check-circle-fill"></i>Доверие и Надеждност</li>
                    </ul>
                    <div class="counter-single-box">
                        <div class="counter-icon">
                            <img src="assets/images/counter-icon.png" alt="">
                        </div>
                        <div class="counter-number">
                            <h1 class="counter">100</h1>
                            <h1>%</h1>
                        </div>
                        <p class="counter-text">Качество</p>	
                    </div>
                </div>
                <div class="cleeny-btn">
                    <a href="{{route('contacts')}}">Запази час <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>	
</div>

<!--==================================================-->
<!-- end cleeny about Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start cleeny address Area -->
<!--==================================================-->


<div class="address-area style-two">
<div class="container">
    <div class="row address align-items-center">
        <div class="col-lg-5">
            <div class="address-conten">
                <h1 class="address-title">Свържете се с нас</h1>
                <h1 class="address-title">за да изготвим оферта!</h1>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="address-thumb">
                <img src="{{asset('images/good.png')}}" alt="">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="cleeny-btn">
                <a href="tel:+359 89 706 4520"><i class="bi bi-telephone-fill"></i> Телефон : +359 89 706 4520</a>
            </div>
        </div>
    </div>
</div>
</div>


<!--==================================================-->
<!-- end cleeny address Area -->
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
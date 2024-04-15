@include('web.components.header-page')

@include('web.components.menu-pages')


<!--==================================================-->


<div class="breatcome-area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Услуги</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Услуги</li>
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
<!-- start cleeny service Area -->
<!--==================================================-->

<div class="service-area style-two upper">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="section-title text-left">
                <h5 class="section-sub-title">Услуги</h5>
                <h1 class="section-main-title">Професионално почистване</h1>
                <h1 class="section-main-title">Какво предлагаме?</h1>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="section-title text-left">
                <p>Ние разбираме колко важно е да живеете в чиста и здравословна среда. Ето защо предлагаме широка гама от услуги за почистване, 
                    проектирани да отговорят на всяка ваша нужда.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-divan.jpg')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Почистване на дивани</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Дълбоки замърсявания</li>
                                <li><i class="bi bi-check-lg"></i> Мокро почистване</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('divani')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon11.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-matrak.jpg')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Почистване на матраци</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Дълбоки замърсявания</li>
                                <li><i class="bi bi-check-lg"></i> Мокро почистване</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('matraci')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon12.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-stolove.jpg')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Почистване на столове</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Мокро почистване</li>
                                <li><i class="bi bi-check-lg"></i> Дълбоко почистване</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('stolove')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon13.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-prozorci.jpg')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Почистване на прозорци</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Премахване на петна</li>
                                <li><i class="bi bi-check-lg"></i> Двустранно почистване</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('prozorci')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon14.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-kilimi.webp')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Почистване на килими</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Дълбоко почистване</li>
                                <li><i class="bi bi-check-lg"></i> Мокро почистване</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('kilimi')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon15.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="service-single-box">
                <div class="service-thumb">
                    <img src="{{asset('images/pochistvane-na-avtosalon.jpg')}}" alt="service-img">
                </div>
                <div class="service-content">
                    <div class="service-content2">
                        <div class="content-inner">
                            <h3 class="service-title">Автосалони</h3>
                            <ul class="service-list">
                                <li><i class="bi bi-check-lg"></i> Обикновен салон</li>
                                <li><i class="bi bi-check-lg"></i> Кожен салон</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-btn">
                        <a href="{{route('avtosaloni')}}">Отвори <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('assets/images/service-icon16.png')}}" alt="service-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--==================================================-->
<!-- end cleeny service Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start cleeny address Area -->
<!--==================================================-->


<div class="address-area style-three">
<div class="container">
    <div class="row address align-items-center">
        @include('web.components.contact')
    </div>
</div>
</div>


<!--==================================================-->
<!-- end cleeny address Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start cleeny pricing Area -->
<!--==================================================-->








@include('web.components.footer')
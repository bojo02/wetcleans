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
                        <h1>Почистване На Килими и Мокети</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване На Килими и Мокети</li>
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
<!-- Start cleeny service-details Area -->
<!--==================================================-->

<div class="service-details-area">
    <div class="container">
        <div class="row">
            @include('web.components.sidebar-service')
            <div class="col-lg-8">
                <div class="service-sidber">
                    <h2 class="sidber-title">Вашият Експерт в Почистването на Килими и Мокети</h2>
                    <p style="font-size:20px;" class="sidber-desc">
                        В WetCleans, ние разбираме колко е важно да се поддържа чист и здравословен домашен или офис интериор. Нашият професионален екип предлага висококачествени услуги по почистване на килими и мокети, които не само премахват замърсяванията и петната, но и придават нов живот на вашите текстилни настилки.
                    </p>
                        <h2 class="sidber-title">Защо да изберете нас?</h2>
                        <ul style="padding:20px; padding-top:0px;">
                            <li  style="font-size:20px; padding-top:0px;" class="sidber-desc">
                                Използваме само най-съвременното и ефективно оборудване за почистване на килими и мокети, гарантирайки отлични резултати всеки път.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Нашите специалисти са обучени да се справят с всякакви видове петна и замърсявания, като гарантират безупречно чистота и свежест.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                За нас е важно не само да почистим вашите килими и мокети, но и да защитим околната среда. Затова използваме препарати, които са безопасни за вас, вашето семейство и домашни любимци.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Разбираме, че всеки клиент има уникални нужди. Предлагаме персонализирани решения, които отговарят точно на вашите изисквания и бюджет.
                            </li>
                            
                        </ul>
                    <div class="sidber-thumb">
                       
                                <img src="{{asset('images/kilimi.jpg')}}" alt="sidber-thumb">
                           
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Нашите услуги включват:</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Стандартно почистване на килими: Премахване на прах и леки петна.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Дълбоко почистване на килими и мокети: Използване на специализирани техники и препарати за премахване на упорити петна и алергени.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Почистване след преливане: Специални методи за почистване на килими и мокети, замърсени от разливи на течности.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Освежаване и дезодориране: Връщане на приятния аромат и свежест на вашите килими и мокети.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">
                        Не позволявайте на замърсяванията и петната да отнемат красотата на вашите килими и мокети. Свържете се с нас днес за безплатна консултация и оценка на нуждите ви. Нека WetCleans се погрижи за чистотата и комфорта във вашия дом или офис.
                    </p>
                    
                </div>
                <div style="margin-left:0px;" class="cleeny-btn">
                    <a href="{{route('contacts')}}">Запази час <i class="bi bi-arrow-right"></i></a>
                </div>
              
              
               
            </div>
        </div>
    </div>
</div>









<!--==================================================-->
<!-- end cleeny service-details Area -->
<!--==================================================-->

@include('web.components.footer')
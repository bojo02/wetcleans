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
                        <h1>Почистване На Столове</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване на столове</li>
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
                    <h2 class="sidber-title">Професионално почистване на столове</h2>
                    <p style="font-size:20px;" class="sidber-desc">
                        Независимо дали става въпрос за офис столове, които са използвани дълги часове всеки ден, или за домашни любимци, които са част от вашето ежедневие у дома, ние сме тук, за да върнем тяхната свежест и комфорт. С гордост предлагаме професионално почистване на столове, адаптирано към вашите нужди и изисквания.
                    </p>
                        <h2 class="sidber-title">Защо да изберете нас?</h2>
                        <ul style="padding:20px; padding-top:0px;">
                            <li  style="font-size:20px; padding-top:0px;" class="sidber-desc">
                                Професионализъм и опит: Нашият екип е обучен да работи с различни материали и замърсявания, гарантирайки висококачествено почистване на всеки стол.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Персонализирани решения: Разбираме, че всеки случай е уникален. Предлагаме индивидуален подход, за да отговорим на конкретните потребности на вашия мебел.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Екологично почистване: Използваме екологично чисти и безопасни за дома и офиса препарати, защото здравето на нашите клиенти и тяхното окружение е приоритет за нас.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Гъвкавост: Ние сме на ваше разположение по всяко време, за да се впишем в натоварения ви график и да предоставим услугите ни, когато е най-удобно за вас.
                            </li>
                        </ul>
                    <div class="sidber-thumb">
                       
                                <img src="{{asset('images/stolove.jpg')}}" alt="sidber-thumb">
                           
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Нашите услуги включват:</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Дълбоко почистване: Премахваме всички петна и замърсявания, връщайки оригиналния вид и цвят на столовете ви.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Дезинфекция: В съвременния свят, здравето е на първо място. Нашата услуга включва дезинфекция, за да се уверим, че вашите столове са безопасни и свободни от бактерии и вируси.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Освежаване на тъкани: Специализирани сме в обработката на всички видове тъкани, включително велур, кожа и др., за да върнем мекотата и комфорта на вашите столове.
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">
                        Ако вашите столове се нуждаят от професионално внимание и грижа, не се колебайте да се свържете с нас още днес. Нашата мисия е да върнем комфорта и красотата на вашите мебели, така че вие и вашето пространство отново да блестите заедно.
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
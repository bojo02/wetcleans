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
                        <h1>Почистване на Автосалони</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване на автосалони</li>
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
                    <h2 class="sidber-title">Експерт в Почистването на Автосалони</h2>
                    <p style="font-size:20px;" class="sidber-desc">
                        WetCleans е вашият надежден партньор за професионално почистване на автосалони. В нашия бранш, чистотата не е просто въпрос на външен вид, тя е знак за уважение към нашите клиенти и техните автомобили. Ние разбираме колко е важно за вас да поддържате вашите превозни средства в перфектно състояние, и затова предлагаме безкомпромисно качество на услугите за почистване на автосалони.
                    </p>
                        <h2 class="sidber-title">Защо да изберете нас?</h2>
                        <ul style="padding:20px; padding-top:0px;">
                            <li  style="font-size:20px; padding-top:0px;" class="sidber-desc">
                                Използвайки съвременни технологии и специализирани препарати, ние предлагаме дълбоко почистване на всички повърхности във вашите автомобили.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                След извършване на ремонтни дейности, нашият екип е тук, за да възстанови идеалната чистота на вашите пространства.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Предлагаме също така персонализирани планове за редовна поддръжка, за да гарантираме, че вашите автосалони винаги изглеждат безупречно.
                            </li>
                          
                            
                        </ul>
                    <div class="sidber-thumb">
                       
                                <img src="{{asset('images/avtosaloni.jpg')}}" alt="sidber-thumb">
                           
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Нашите услуги включват:</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Нашите специалисти са висококвалифицирани и разполагат с богат опит в областта на почистването.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Разбираме, че всеки бизнес има уникални нужди, и предлагаме персонализирани решения, които отговарят на специфичните изисквания на вашия автосалон.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Използваме екологично чисти и безопасни за здравето препарати, което е доказателство за нашата отговорност към околната среда и вашето здраве.
                            </li>
                           
                        </ul>
                    </div>
                </div>

                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">
                        Готови сте да дадете на вашите автосалони това дължимото внимание? Свържете се с нас днес за безплатна консултация и оценка. Нашата цел е да предоставим не само услуги за почистване, но и да създадем дълготрайни партньорства с нашите клиенти.
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
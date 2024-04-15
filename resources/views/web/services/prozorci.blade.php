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
                        <h1>Почистване На Прозорци</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване на прозорци</li>
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
                        В днешния бърз и забързан свят, времето е ценно. Нашата мисия в WetCleans е да Ви предоставим услуги за професионално почистване на прозорци, които да Ви спестят време и усилия, осигурявайки при това безупречна чистота и блестяща яснота на Вашите прозорци.
                    </p>
                        <h2 class="sidber-title">С какво сме полезни?</h2>
                        
                            <p  style="font-size:20px; padding-top:0px;" class="sidber-desc">
                                Ние предлагаме внимателно и задълбочено почистване на прозорците Ви, като отстраняваме всички замърсявания, пръстови отпечатъци и други петна, оставяйки стъклата кристално чисти.
                            </p>
                            

                    <div class="sidber-thumb">
                       
                                <img src="{{asset('images/prozorci.jpg')}}" alt="sidber-thumb">
                           
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Защо да ни изберете?</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Нашите специалисти са обучени да работят ефективно и да предоставят услуги от най-високо качество.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                За нас е важно не само да почистим вашите прозорци, но и да запазим околната среда, използвайки безопасни и екологични препарати.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Разбираме, че всеки клиент има уникални нужди и предпочитания. Ние сме готови да се адаптираме към вашето график и изисквания, предоставяйки надеждна и точна услуга.
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">
                        За повече информация относно нашите услуги или за запитвания, моля не се колебайте да се свържете с нас. Можете да ни намерите на <a href="tel:+359 89 706 4520">+359 89 706 4520</a> или да ни изпратите запитване чрез нашата <a href="{{route('contacts')}}">контактна форма</a>  на уебсайта. Нашите специалисти са готови да Ви помогнат да върнете блясъка на Вашите прозорци!
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
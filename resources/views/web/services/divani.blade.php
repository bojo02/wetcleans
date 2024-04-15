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
                        <h1>Почистване на дивани</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване на дивани</li>
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
                    <h2 class="sidber-title">Защо е важно редовното почистване на диваните?</h2>
                    <p style="font-size:20px;" class="sidber-desc">Диваните са едни от най-ползваните мебели във всеки дом, където семействата 
                        прекарват часове в отдих и развлечения. С времето, тъканите абсорбират прах, мръсотии и различни алергени, които могат 
                        да засегнат качеството на въздуха в дома ви и да предизвикат алергични реакции. Професионалното почистване помага за 
                        премахването на тези нежелани елементи, поддържайки вашите мебели в перфектно състояние.</p>
                        <h2 class="sidber-title">Нашите услуги</h2>
                    <p style="font-size:20px;" class="sidber-desc style-two">Ние предлагаме цялостно почистване на дивани, като използваме 
                        само най-качествените и безопасни продукти. Нашите методи са доказано ефективни срещу всички видове 
                        петна, дори и най-упоритите, като същевременно защитаваме цветовете и тъканите на вашите дивани. Независимо дали става 
                        въпрос за петно от вино, следи от домашни любимци или просто обща мръсотия, ние имаме решението за вас.</p>
                    <div class="sidber-thumb">
                        <img src="{{asset('images/divani.jpg')}}" alt="sidber-thumb">
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Защо да изберете нас?</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Професионален екип: Нашите специалисти са обучени да се справят с всякакви предизвикателства, свързани с почистването на дивани, като гарантират отлични резултати всеки път.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Съобразност с околната среда: Използваме екологично чисти препарати, които са безопасни както за вас, така и за планетата.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Достъпни цени: Предлагаме конкурентни цени, които отговарят на качеството на нашите услуги.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Гъвкавост: Разбираме, че всеки клиент има уникални нужди и предпочитания, затова предлагаме индивидуални решения, които отговарят точно на вашите изисквания.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sidber-single-box">
                            <div class="sidber-icon">
                                <img src="assets/images/sidber-icon.png" alt="sidber-icon">
                            </div>
                            <div  class="sidber-content">
                                <h3 class="sidber-title">Важен елемент</h3>
                                <p  class="sidber-text">Диваните са не просто място за сядане, те са централна точка във всеки един дом.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sidber-single-box">
                            <div class="sidber-icon">
                                <img src="assets/images/sidber-icon2.png" alt="sidber-icon">
                            </div>
                            <div class="sidber-content">
                                <h3 class="sidber-title">По-добър живот</h3>
                                <p class="sidber-text">Почистването на диваните удължава живот им и подобрява качеството на въздуха в дома.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">За повече информация относно нашите услуги и за да запазите час за почистване, моля, посетете нашия уебсайт или се свържете с нас директно. Нека заедно създадем по-чист и здравословен дом за вас</p>
                    
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
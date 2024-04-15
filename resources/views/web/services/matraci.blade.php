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
                        <h1>Почистване На Матраци</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Почистване на матраци</li>
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
                    <h2 class="sidber-title">Защо е важно редовното почистване на матраци?</h2>
                    <p style="font-size:20px;" class="sidber-desc">Вашият матрак е повече от място за сън. Той е оазис на спокойствие, 
                        който поддържа вашето здраве и благополучие. С времето обаче матраците могат да се превърнат в скривалище за прахови акари, 
                        бактерии, мъртви кожни клетки и други алергени, които могат да засегнат качеството на вашия сън и да предизвикат алергии или 
                        респираторни проблеми.</p>
                        <h2 class="sidber-title">Нашите услуги по почистване на матраци</h2>
                    <p style="font-size:20px;" class="sidber-desc style-two">В WetCleans, ние разбираме колко е важно да поддържате вашия
                         матрак чист и безопасен за вашето здраве. Нашата специализирана услуга по почистване на матраци използва най-съвременни технологии 
                         и продукти за дълбоко почистване, които премахват не само петната и миризмите, но и 99.9% от всички алергени, осигурявайки ви спокоен 
                         и здравословен сън.</p>
                    <div class="sidber-thumb">
                        <div class="row">
                            <div style="padding:20px;" class="col-sm-12 col-md-6">
                                <img style="width: 400px" src="{{asset('images/matraci.webp')}}" alt="sidber-thumb">
                            </div>
                            <div style="padding:20px;" class="col-sm-12 col-md-6">
                                <img style="width: 400px" src="{{asset('images/matraci2.webp')}}" alt="sidber-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="sidber-right">
                        <h2 class="sidber-title style-two">Как работи нашият процес?</h2>
                        <ul style="padding:20px;">
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Оценка и Предварителна Подготовка: Нашият експертен екип извършва първоначална оценка на състоянието на вашия матрак, за да идентифицира специфични проблеми и да определи най-подходящия метод за почистване.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Дълбоко Почистване: Използваме специализирани машини и безопасни за околната среда препарати, които дълбоко проникват в матрака, за да премахнат всички замърсители.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Дезинфекция и Освежаване: След дълбокото почистване, матракът се дезинфекцира и освежава, като се използват натурални и антибактериални продукти за най-добро качество на въздуха в спалнята.
                            </li>
                            <li  style="font-size:20px; padding-top:10px;" class="sidber-desc">
                                Финална Инспекция: Извършваме финална проверка, за да се уверим, че сте напълно доволни от резултата и че вашето легло е перфектно чисто и готово за употреба.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sidber-left">
                    <h2 class="sidber-title style-three">Връзка с нас</h2>
                    <p  style="font-size:20px;" class="sidber-desc">Не оставяйте почистването на вашите матраци за "някой друг ден". Свържете се с нас днес за безплатна консултация и оценка, и вижте сами как WetCleans може да подобри качеството на вашия сън и живот.</p>
                    
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
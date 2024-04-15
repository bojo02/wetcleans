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
                        <h1>Контакти</h1>
                    </div>
                    <div class="breatcome-text">
                        <ul>
                            <li><a href="{{route('home')}}"><i class="bi bi-house-door-fill"></i>Начало</a></li>
                            <li class="upper">Контакти</li>
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

<div class="address-area style-three">
    <div class="container">
        <div class="row address align-items-center">
            @include('web.components.contact')
        </div>
    </div>
    </div>

<!--==================================================-->
<!-- Start cleeny contact Area -->
<!--==================================================-->


<div class="contact-area style-three">
<div class="container">
    <div class="row">
        
        <div class="col-lg-6">
           
        </div>
        <div class="col-lg-6">
            <div class="contact_from_box">
                    <div class="contact_title">
                        <h3 id="success">Връзка с нас</h3>
                    </div>
                    <form action="{{route('contact.form.send')}}" method="POST" id="dreamit-form">
                        @CSRF
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_box">
                                    <input type="text" required name="name" placeholder="Име и Фамилия *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_box">
                                    <input type="phone" required name="phone" placeholder="Телефон *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_box">
                                    <input type="email" required name="email" placeholder="Имейл *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_box">
                                    <input type="text" name="address" placeholder="Адрес (по-желание)">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_box">
                                    <textarea name="msg" id="message" required cols="30" rows="10" placeholder="Съобщение *"></textarea>
                                </div>
                                <div class="quote_button">
                                    <button class="btn" type="submit">Изпрати запитване <i class="bi bi-arrow-right"></i></button>
                                </div>

                                @if(Session::has('success'))
                                    <br>
                                    <p style="color:green;"> {{Session::get('success')}}</p>
                                @endif
                            </div>
                        </div>
                    </form>
                <div id="status" class="error"></div>
            </div>
        </div>
        
    </div>
</div>
</div>



<!--==================================================-->
<!-- end cleeny contact Area -->
<!--==================================================-->



<!--==================================================-->
<!-- start cleeny map Area -->
<!--==================================================-->


<div class="map-area">
    <div class="col-lg-12">
        <div class="mapouter fixed-height">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas" src="https://www.google.com/maps?q=%D0%A1%D0%B0%D0%BD%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B8&amp;t&amp;z=11&amp;ie=UTF8&amp;iwloc&amp;output=embed"></iframe>
                <a href="https://www.whatismyip-address.com"></a>
            </div>
        </div>
    </div>
</div>



<!--==================================================-->
<!-- end cleeny map Area -->
<!--==================================================-->

@include('web.components.footer')
<!--==================================================-->
<!-- start cleeny service Area -->
<!--==================================================-->


            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h1 class="section-main-title">Запази час</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-from">
                    <form action="{{route('filling.form')}}" method="POST">
                        @CSRF
                        <div class="row contact_bg">
                            <div class="col-lg-2 col-md-4">
                                <!--form_box-->
                                <div class="form_box">
                                    <input type="text" name="name" placeholder="Име и фамилия *">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <!--form_box-->
                                <div class="form_box">
                                    <input type="text" name="phone" placeholder="Телефон *">
                                </div>
     
                            
                            </div>
                           

                            <div class="col-lg-3 col-md-4">
                                <!--form_box-->
                                <div class="form_box">
                                <input min="08:00" max="18:00" type="datetime-local" id="birthdaytime" name="date_time">
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4">
                                <!--form_box-->
                                <div class="form_box">
                                    <input type="text" name="address" placeholder="Адрес *">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4">
                                <!--form_box-->

                                <div style="width:100%;" class="multiselect">
                                    <div class="selectBox form_field_inner style-two" onclick="showCheckboxes()">
                                      <select>
                                        <option>Избери услуга/и</option>
                                      </select>
                                      <div class="overSelect"></div>
                                    </div>
                                    <div id="checkboxes">
                                        @foreach ($services as $service)
                                            <label for="service_{{$service->id}}">
                                                <input type="checkbox" id="service_{{$service->id}}" name="service_{{$service->id}}" />{{$service->name}} | ({{$service->price}}лв. @if($service->is_square == 1)/ кв.м. @endif)
                                                @if($service->is_square == 0)
                                                <select name="quantity_{{$service->id}}">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                                @else
                                                <input name="quantity_{{$service->id}}" class="form-control" placeholder="Въведи общо квадратни метри" type="number">
                                                @endif
                                            </label>
                                            <hr>
                                        @endforeach
                                        

                                        
                                        

                                    </div>
                                  </div>
                            </div>

                            <style>
                                label > select{
                                    float: right;
                                }
                            </style>

                            <script>
                            var expanded = false;

                            function showCheckboxes() {
                            var checkboxes = document.getElementById("checkboxes");
                            if (!expanded) {
                                checkboxes.style.display = "block";
                                expanded = true;
                            } else {
                                checkboxes.style.display = "none";
                                expanded = false;
                            }
                            }

                            </script>

                            <style>
                                .multiselect {
                                width: 200px;
                                }

                                .selectBox {
                                position: relative;
                                }

                                .selectBox select {
                                width: 100%;
                                font-weight: bold;
                                }

                                .overSelect {
                                position: absolute;
                                left: 0;
                                right: 0;
                                top: 0;
                                bottom: 0;
                                }

                                #checkboxes {
                                display: none;
                                border: 1px #dadada solid;
                                }

                                #checkboxes label {
                                display: block;
                                }

                                #checkboxes label:hover {
                                background-color: #1e90ff;
                                }
                            </style>
                            
                            <div style="text-align:center;" class="col-lg-12 col-md-12">
                                <div style="padding-top:20px;" class="contact-form-button">
                                    <button type="submit">Запази<i class="bi bi-arrow-right"></i></button>
                                </div>

                                @if(Session::has('success'))
                                <br>
                                <p style="color:green;"> {{Session::get('success')}}</p>
                            @endif
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            
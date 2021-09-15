@extends('layouts.app')

@section('content')

    <style>
        ::selection {
            background-color: #ff6161;

        }

        .flex div {
            width: 100%;
        }

        #res {
            border:  14px solid #ff6161;
            text-align: center;
            background-color: #ecd49a;
        }

       .flex {
           display: flex;
           flex-direction: column;
           align-items: center;
       }

       .flex a {
           cursor: pointer;
       }

        .flex a:hover {
            color: white;
            background-color: black;
            background-color:  #ff6161;
            transition: all .1s ease ;
            padding: 20px;
        }

       .container {
           padding: 20px;
           margin: auto;
           max-width: 1200px;
           width: 100%;
       }

    </style>
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element page-section bg-color clearfix" style="padding: 100px 0">

        <div class="container dark">
            <div class="row">
                <div class="col-xl-7 col-lg-9 offset-1">
                    <div class="heading-block mb-4 border-bottom-0">
                        <div class="before-heading color-light">Наша компания</div>
                        <h2 class="nott ls0 font-weight-normal">Сентрас кредит</h2>
                    </div>
                    <p>Группа «Сентрас» – группа инновационных компаний, работающих в финансовой сфере, компаний.</p>


                </div>
            </div>
        </div>
        <div class="hero-img">
            <div class="fslider" data-arrows="true" data-autplay="5000" data-pagi="false" data-speed="400" data-pause="4000" data-loop="true">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"><img src="demos/beauty-kit/images/hero/news-jump.png" alt="Slider Image"></div>
                        <div class="slide"><img src="demos/beauty-kit/images/hero/news-profit.png" alt="Slider Image"></div>
                        <div class="slide"><img src="demos/beauty-kit/images/hero/team-logo.png" alt="Slider Image"></div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap p-0">

            <div class="section m-0 p-0 page-section bg-color-light">
                <div class="row no-gutters align-items-stretch">
                    <div class="col-md-6 bg-color"><img src="demos/beauty-kit/images/sections/about.png" alt="Image"></div>
                    <div class="col-md-6 pl-4 pt-0 pt-md-3 align-self-center">
                        <div class="col-padding">
                            <div class="heading-block border-0">
                                <div class="before-heading color">Наши проекты</div>
                                <h2 class="nott ls1 font-weight-bold" style="font-size: 34px">О нас</h2>
                                <p>ТОО  "Микрофинансовая организация Сентрас Кредит" БИН: 050940002384<br>
                                    ИИК kz416017131000000119<br>
                                    АО Народный банк Казахстана<br>
                                    БИК HSBKKZKX<BR>
                                    Кбе 17, КНП-423
                                </p>
                            </div>
                            <p></p>
                            <a href="{{ route('about') }}" data-scrollto="#price" class="button button-circle button-large bg-color2 font-weight-normal ml-0" data-offset="85" data-easing="easeInOutExpo" data-speed="1250">Подробнее <i class="icon-caret-right m-0"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <section id="res" class="section page-section m-0">
                <div class="container">
                    <h2>Отчеты</h2>
                    <hr class="hr">
                    <div class="flex">
                        <div>
                        <a href="explain.pdf">Пояснительная записка</a>
                        <hr class="hr">
                        </div>

                        <div>
                            <a href="start.pdf" >Баланс</a>
                            <hr class="hr">
                        </div>

                        <div>
                            <a href="start2.pdf" >Баланс</a>
                            <hr class="hr">
                        </div>

                        <div>
                            <a href="прибыли_и_убытки.pdf" >Прибыль и Убытки</a>
                            <hr class="hr">
                        </div>

                       <div>
                           <a href="движения_средств.pdf" >Движения средств</a>
                           <hr class="hr">
                       </div>

                        <div>
                            <a href="license.pdf">Лицензия</a>
                            <hr class="hr">
                        </div>

                           <div>
                               <a href="license2.pdf" ">Лицензия</a>
                               <hr class="hr">
                           </div>


                        <div>
                            <a href="change.pdf">Изменения капитала</a>
                            <hr class="hr">
                        </div>
                    </div>
                </div>
            </section>

            </div>
        </div>
        </div>
    </section>

@endsection

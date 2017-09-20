<?php 

use App\Variables;
use App\Canciones;
use App\Galeria;
use App\Calendario;
use App\Servicios;

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Willy Flechas DJ</title>

    <!-- Library CSS -->

    <link href="css/harmony_library.css" rel="stylesheet">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">


    <!-- Icons CSS -->

    <link href="fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->

    <link href="css/harmony_style.css" rel="stylesheet">

    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <style type="text/css">
        .rsuno{
            margin-left: -7px;
        }
    </style>
</head>

<body class="har_middle_titles">

    <!-- Preloader -->

    <div class="har_preloader">

        <span class="har_logo_eq">

            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>

        </span>

    </div>

    <!-- Preloader End -->



  




   <!-- Header -->

   <header>       




    <nav class="har_light_nav har_transp_nav">

        <div class="container">



            <!-- Logo -->


            <a href="/" class="har_logo" style="margin-left: 0px!important;"><img src="/img/logosintext.png" alt="" style="max-height: 35px;float: left;">
                <img class="texto-logo" src="/img/texto-blanco.png" style="max-height: 34px" alt="">
                <!-- <div style="float: left;"><span style="font-family:'Nexa'; text-transform: capitalize; font-weight: 200; font-size: 19px"><strong>Willy</strong>Flechas<br><nr style="font-size: 8px; font-weight: light">EVENTOS Y ESPECTACULOS</nr></span></div> -->
            </a>


            <!-- Logo End-->


            <div class="har_top_menu_mobile_link">

                <i class="ti ti-menu"></i>

            </div>
            <!-- Top Menu -->
            <div class="har_top_menu_cont">
                <ul class="har_top_menu">
                    <li class="har_parent"><a href="#servicios">Nuestros Servicios</a>
                    </li>
                    <li class="har_parent"><a href="#noticias">Noticias</a>
                    </li>
                    <li class="har_parent"><a href="#next_event">Evento</a>
                    </li>
                    <li class="har_parent"><a href="#canciones">Canciones</a>
                    </li> 
                    <li class="har_parent"><a href="#calendario">Calendario</a>
                    </li>
                    <li class="har_parent"><a href="#galeria">Galeria</a>
                    </li>
                    <li class="har_parent"><a href="#instagram">Instagram</a>
                    </li> 
                    <li class="har_parent"><a href="#contacto">Contáctame</a>
                    </li>                
                </ul>
            </div>
            <!-- Top Menu End -->
        </div>
        <!-- container end -->
    </nav>
</header>
<!-- Header End -->
<!-- Firefly -->
<div class="har_firefly" data-total="60" data-minPixel="1" data-maxPixel="5"></div>
<!-- Slide Down -->
<a class="har_scroll_down har_go" href="#har_content" data-0="opacity:1; bottom:40px;" data--400-bottom="opacity:0; bottom:80px;">
    <b data-0="height:40px" data--400-bottom="height:55px"></b>
    Scroll
</a>
<!-- Slider -->
<div class="har_slider_carousel">

    <!-- Item -->

    <div class="har_slider har_wht_txt">

        <div class="har_slider_img har_image_bck" data-image="{{Variables::valor('banner1')}}"></div>

        <!-- Over -->

        <div class="har_over" data-color="#000" data-opacity="0"></div>

        <!-- Slider Texts -->

        <div class="container">

            <div class="har_slide_txt har_slide_left_middle text-left" data-0="opacity:1; margin-top:0px" data--400-bottom="opacity:0; margin-top:-100px">

                <div class="har_slide_title">{{Variables::valor('TitBanner1')}}</div>

                <div class="har_slide_subtitle">{{Variables::valor('SubTitBanner1')}}</div>

            </div> 

        </div>

        <!-- Slider Texts End -->

    </div>

    <!-- Item -->

    <div class="har_slider  har_wht_txt">

        <div class="har_slider_img har_image_bck" data-image="{{Variables::valor('banner2')}}"></div>

        <!-- Over -->

        <div class="har_over" data-color="#000" data-opacity="0"></div>

        <!-- Slider Texts -->

        <div class="container">

           <div class="har_slide_txt har_slide_left_middle text-left" data-0="opacity:1; margin-top:0px" data--400-bottom="opacity:0; margin-top:-100px">

            <div class="har_slide_title">{{Variables::valor('TitBanner2')}}</div>

            <div class="har_slide_subtitle">{{Variables::valor('SubTitBanner2')}}</div>

        </div>

    </div>

    <!-- Slider Texts End -->

</div>

<!-- container end -->

</div>

<!-- Slider End -->

<!-- Main Section -->

<section id="har_content" class="har_content">
    <!-- SERVICIOS -->
    <section class="har_section har_image_bck" id="servicios">
        <div class="container text-center">
            <h2>Nuestros Servicios</h2>
            <h3>Tenemos todo lo que necesitas para tu evento!</h3>
            <div class="har_icon_boxes row text-center">
                <div class="har_team_slider">
                    @foreach($servicios as $servicio)
                    <a href="{{$servicio->enlace}}">
                        <div class="har_icon_box har_team_box">
                            <div class="har_icon_box_photo">
                                <img src="{{$servicio->imagen}}" alt="">
                            </div>
                            <h4><b>{{$servicio->titulo}}</b> <br></h4>
                        </div> 
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end SERVICIOS -->
    <!-- section -->

    <section class="har_section har_image_bck" id="noticias">

        <div class="container-fluid text-center">



            <!-- row -->

            <div class="row har_auto_height">



                <!-- item -->

                <div class="col-md-4 har_image_bck har_wht_txt" data-color="#003D66">

                    <div class="har_simple_block_mini">

                        <h2>{{Variables::valor('TitNoticia1')}}</h2>

                        <h3>{{Variables::valor('SubTitNoticia1')}}</h3>

                        <p>{{Variables::valor('textNoticia1')}} </p>

                    </div>

                </div>



                <!-- item -->

                <div class="col-md-4 har_image_bck har_wht_txt" data-color="#06588D">

                    <div class="har_simple_block_mini">

                        <h2>{{Variables::valor('TitNoticia2')}}</h2>

                        <h3>{{Variables::valor('SubTitNoticia2')}}</h3>

                        <p>{{Variables::valor('textNoticia2')}} </p>

                    </div>

                </div>



                <!-- item -->

                <div class="col-md-4 har_image_bck har_wht_txt" data-color="#003D66">

                    <div class="har_simple_block_mini">

                        <h2>{{Variables::valor('TitNoticia3')}}</h2>

                        <h3>{{Variables::valor('SubTitNoticia3')}}</h3>

                        <p>{{Variables::valor('textNoticia3')}} </p>

                    </div>

                </div>



            </div>

            <!-- row end -->



        </div>

        <!-- container end -->



    </section>

    <!-- section end -->





    <!-- section -->

    <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="{{Variables::valor('FondoEvento')}}" data-stellar-background-ratio="0.2" id="next_event">



        <!-- Over -->

        <div class="har_over" data-color="#333" data-opacity="0.8"></div>



        <div class="container text-center">



            <h2>MixCloud</h2>




            <!-- CountDown -->

           <iframe id="mixcloudframe" width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&light=1&autoplay=1&feed=%2Fwillyflechas%2F" frameborder="0" ></iframe>


            <div class="row">

                <div class="col-md-6 col-md-offset-3">



                    <h3>Mantenterse informado.</h3>

                    <form action="#">

                        <input type="text" class="form-control" placeholder="E-mail Adress">

                        <input type="submit" class="btn" value="Subscribe">

                    </form>

                    {{-- <p>Please trust us, we will never send you spam.</p> --}}

                </div>     



            </div>



        </div>

        <!-- container end -->

    </section>

    <!-- section end -->
    <!-- DESCARGAS -->
    <section class="har_section har_image_bck" data-color="#f2f2f2" id="canciones">
        <div class="container text-center">
            <h2>Descargas</h2>
            <h3>Aquí podrás descargar nuestros más recientes mixes y remixes totalmente gratis!</h3>
            <div class="har_team_slider">
                @foreach($canciones as $index => $cancion)
                <div class="har_shop_al_item_bl">
                    <a href="{{$cancion->enlace}}" class="har_shop_al_item" target="_blank" download="">
                        <span class="har_shop_item_disk">
                            <span class="har_shop_item_cover har_image_bck" data-image="{{$cancion->imagen}}"></span>
                            <span class="har_shop_item_env"></span>
                            <span class="har_shop_item_vinyl">
                                <span class="har_shop_item_vinyl_img har_image_bck" data-image="{{$cancion->imagen}}"></span>
                                <span class="har_shop_item_vinyl_hole"></span>
                            </span>
                        </span>
                    </a>
                    <h4>{{$cancion->nombre}}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end DESCARGAS -->
    <!-- CALENDARIO -->
    
    <section class="har_section har_image_bck" style="background: #06588d">
        <div class="container-fluid har_wht_txt text-center">
            <div class="row har_new_events">
        <div class="container text-center" style="padding-bottom: 0px;">
            <h2>Calendario</h2>
            <h3>Disponibilidad y eventos</h3>
        </div>
                <a href="#" class="har_new_events_item col-md-3">
                    <div class="har_new_events_item_desc har_image_bck" data-color="#06588D">
                        <span>{{Calendario::find(1)->fecha}} </span>
                        <h4>{{Calendario::find(1)->nombre}}</h4>
                        <h5><span class="ti ti-location-pin"></span>{{Calendario::find(1)->ubicacion}}</h5>
                    </div>
                    <span class="har_new_events_item_img har_image_bck" data-image="{{Calendario::find(1)->imagen}}"><b>Ver</b></span>
                </a>
                <a href="#" class="har_new_events_item col-md-3">
                    <div class="har_new_events_item_desc har_image_bck" data-color="#06588D">
                        <span>{{Calendario::find(2)->fecha}} </span>
                        <h4>{{Calendario::find(2)->nombre}}</h4>
                        <h5><span class="ti ti-location-pin"></span>{{Calendario::find(2)->ubicacion}}</h5>
                    </div>
                    <span class="har_new_events_item_img har_image_bck" data-image="{{Calendario::find(2)->imagen}}"><b>Ver</b></span>
                </a>
                <a href="#" class="har_new_events_item col-md-3">
                    <div class="har_new_events_item_desc har_image_bck" data-color="#06588D">
                        <span>{{Calendario::find(3)->fecha}} </span>
                        <h4>{{Calendario::find(3)->nombre}}</h4>
                        <h5><span class="ti ti-location-pin"></span>{{Calendario::find(3)->ubicacion}}</h5>
                    </div>
                    <span class="har_new_events_item_img har_image_bck" data-image="{{Calendario::find(3)->imagen}}"><b>Ver</b></span>
                </a>
                <a href="#" class="har_new_events_item col-md-3">
                    <div class="har_new_events_item_desc har_image_bck" data-color="#06588D">
                        <span>{{Calendario::find(4)->fecha}} </span>
                        <h4>{{Calendario::find(4)->nombre}}</h4>
                        <h5><span class="ti ti-location-pin"></span>{{Calendario::find(4)->ubicacion}}</h5>
                    </div>
                    <span class="har_new_events_item_img har_image_bck" data-image="{{Calendario::find(4)->imagen}}"><b>Ver</b></span>
                </a>
            </div>
        </div>
    </section>
    <!-- end CALENDARIO -->
    <section class="har_section har_image_bck" id="galeria">

        <div class="container-fluid text-center">



            <h2>Galeria de fotos</h2>

            <h3>Fotografica <br>

                {{-- Don’t stay aside be the part of our performance --}}

            </h3>



            <!-- filters -->

            <div class="button-group filter-button-group">

                <a data-filter="*">Todos</a>

                <a data-filter=".event">Evento</a>

                <a data-filter=".musician">Musica</a>

                <a data-filter=".mediam">Media</a>

            </div>

            <!-- filters end -->



            <!-- grid -->

            <div class="har_portfolio grid">



                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto1')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title1')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle1')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande1')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>



                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase2')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto2')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title2')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle2')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande2')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>



                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase3')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto3')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title3')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle3')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande3')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>



                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase4')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto4')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title4')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle4')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande4')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>







                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item event {{Galeria::valor('clase5')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto5')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title5')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle5')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande5')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>



                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase6')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto6')}}" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_title">{{Galeria::valor('Title6')}}</span>

                            <span class="har_port_subtitle">{{Galeria::valor('Subtitle6')}}</span>

                            <span class="har_port_icons">

                                <a href="#"><i class="ti ti-link"></i></a>

                                <a href="{{Galeria::valor('FotoGrande6')}}" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>





            </div>

            <!-- grid end -->



        </div>

        <!-- container end -->



    </section>
    <!-- REDES SOCIALES -->

    <section class="har_section har_image_bck har_wht_txt" id="testimonials" data-color="#292929" style="background-color: rgb(41, 41, 41);">
        <div class="text-center" style="padding-bottom: 40px">
            <br><br>
            <h2>Redes Sociales</h2>
            <div class="har_icon_boxes row text-centered har_team_slider_bw" style="margin-top: 0px;">
                <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active" class="noactive" style="">
                    <a class="col-xs-2 col-xs-offset-1 rstres" href="https://vimeo.com/user2512212/" target="_blank">
                        <div class="har_news_block text-center rsdos" style="transition-delay: 0.1s; background-color: cornflowerblue; ">
                                <i class="ti ti-vimeo har_icon_box rsuno"></i>
                        </div>
                    </a>
                    <a class="col-xs-2 rstres" href="https://www.instagram.com/willy_flechas/" target="_blank">
                        <div class="har_news_block text-center rsdos" style="transition-delay: 0.1s; background-color: hotpink; ">
                                <i class="ti ti-instagram har_icon_box rsuno"></i>
                        </div>
                    </a>
                    <a class="col-xs-2 rstres" href="https://www.facebook.com/djwillyflechas/" target="_blank">
                        <div class="har_news_block text-center rsdos" style="transition-delay: 0.1s; background-color: darkblue; ">
                                <i class="ti ti-facebook har_icon_box rsuno"></i>
                        </div>
                    </a>
                    <a class="col-xs-2 rstres" href="https://twitter.com/willyflechas/" target="_blank">
                        <div class="har_news_block text-center rsdos" style="transition-delay: 0.1s; background-color: darkturquoise; ">
                                <i class="ti ti-twitter har_icon_box rsuno"></i>
                        </div>
                    </a>
                    <a class="col-xs-2 rstres" href="https://www.mixcloud.com/willyflechas/" target="_blank">
                        <div class="har_news_block text-center rsdos" style="transition-delay: 0.1s; background-color: gray; ">
                                <i class="ti ti-soundcloud har_icon_box rsuno"></i>
                        </div>
                    </a>                                       
                </div>
            </div>
        </div>
    </section>
    <!-- end REDES SOCIALES -->
    @include('layouts.contacto')
    @include('layouts.footer')

</div>
<!-- Page End -->

<!-- JQuery -->
<script src="js/jquery-1.12.3.min.js"></script> 
<!-- Library JS -->
<script src="js/jquery.firefly-0.2.min.js"></script> 
<script src="js/harmony_library.js"></script> 
<script src="js/jquery.mb.YTPlayer.min.js"></script> 
<!-- Theme JS -->
<script src="js/harmony_script.js"></script>
@include("layouts.mute")
</body>
</html>
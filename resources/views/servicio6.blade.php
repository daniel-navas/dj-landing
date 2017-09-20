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

    <link href="/css/harmony_library.css" rel="stylesheet">
    <link href="/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">


    <!-- Icons CSS -->

    <link href="/fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->

    <link href="/css/harmony_style.css" rel="stylesheet">

    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
                    <li class="har_parent"><a href="/#servicios">Nuestros Servicios</a>
                    </li>
                    <li class="har_parent"><a href="/#noticias">Noticias</a>
                    </li>
                    <li class="har_parent"><a href="/#next_event">Evento</a>
                    </li>
                    <li class="har_parent"><a href="/#canciones">Canciones</a>
                    </li> 
                    <li class="har_parent"><a href="/#calendario">Calendario</a>
                    </li>
                    <li class="har_parent"><a href="/#galeria">Galeria</a>
                    </li>
                    <li class="har_parent"><a href="/#instagram">Redes</a>
                    </li> 
                    <li class="har_parent"><a href="/#contacto">Contáctame</a>
                    </li>                
                </ul>
            </div>
            <!-- Top Menu End -->
        </div>
        <!-- container end -->
    </nav>
</header>
    <!-- section end -->

    <section class="har_section har_image_bck" id="galeria">

        <div class="container-fluid text-center">



            <h2 style="font-family:'Montserrat', sans-serif; margin-top: 155px">Producer</h2>


            <p style="font-size: 16px; margin-top: 30px">Contamos con una gran experiencia en la realización, producción y desarrollo de eventos sociales. Múltiples parejas y quinceañeras a nivel nacional, decidieron contar con nuestros servicios para la realización con gran éxito de su evento, a tal punto que el portal internacional especializado en Bodas Zankyou nos ubica en el top 10 a nivel nacional en la realización de los mismos. Solicita tu cotización ya mismo y reserva tu fecha con tiempo. <br>
                <br>
                <a href="#contacto"><button type="link" href="#contacto">COTIZACION</button></a>
</p>

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

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto1')}}" alt="">

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

                        <img src="{{Galeria::valor('foto2')}}" alt="">

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

                <div class="col-sm-4 har_portfolio_item grid-item event {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto2')}}" alt="">

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

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="{{Galeria::valor('foto1')}}" alt="">

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

   @include('layouts.contacto')
@include('layouts.footer')
</div>
<!-- Page End -->

<!-- JQuery -->
<script src="/js/jquery-1.12.3.min.js"></script> 
<!-- Library JS -->
<script src="/js/jquery.firefly-0.2.min.js"></script> 
<script src="/js/harmony_library.js"></script> 
<script src="/js/jquery.mb.YTPlayer.min.js"></script> 
<!-- Theme JS -->
<script src="/js/harmony_script.js"></script>
</body>
</html>
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

                <a href="/" class="har_logo" style="margin-left: 0px!important;"><img src="/img/logo.png" alt="" style="max-height: 35px;float: left;">
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

            <h2 style="font-family:'Montserrat', sans-serif; margin-top: 155px">Bodas y 15 años</h2>

            <p style="font-size: 16px; margin-top: 30px">Contamos con una gran experiencia en la realización, producción y desarrollo de eventos sociales. Múltiples parejas y quinceañeras a nivel nacional, decidieron contar con nuestros servicios para la realización con gran éxito de su evento, a tal punto que el portal internacional especializado en Bodas Zankyou nos ubica en el top 10 a nivel nacional en la realización de los mismos. Solicita tu cotización ya mismo y reserva tu fecha con tiempo. <br>
                <br>
                <a href="#contacto"><button type="link" href="#contacto">COTIZACION</button></a>
            </p>

            <!-- grid -->

            <div class="har_portfolio grid">

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-1.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-1.jpg" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase2')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-2.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-2.jpg" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-3.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-3.jpg" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase4')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-4.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-4.jpg" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item event {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-5.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-5.jpg" class="lightbox"><i class="ti ti-search"></i></a>

                            </span>

                        </span>

                    </div>

                </div>

                <!-- item -->

                <div class="col-sm-4 har_portfolio_item grid-item {{Galeria::valor('clase1')}}">

                    <div class="har_portfolio_item_cont">

                        <img src="/img/servicios/1/1-6.jpg" alt="">

                        <span class="har_port_titles">

                            <span class="har_port_icons">

                                <a href="/img/servicios/1/1-6.jpg" class="lightbox"><i class="ti ti-search"></i></a>

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
    <!-- Footer -->
    <footer class="har_image_bck text-center har_wht_txt" data-color="#000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Copyrights -->
                    <h2>Willy Flechas</h2>
                    <!-- Social Buttons -->
                    <div class="har_footer_social">

                        <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">

                            <a href="#"><i class="ti ti-facebook har_icon_box"></i></a>

                            <a href="#"><i class="ti ti-instagram har_icon_box"></i></a>

                            <a href="#"><i class="ti ti-soundcloud har_icon_box"></i></a>

                            <a href="#"><i class="ti ti-youtube har_icon_box"></i></a>

                            <a href="#"><i class="ti ti-twitter har_icon_box"></i></a>

                            <a href="#"><i class="ti ti-pinterest har_icon_box"></i></a>
                        </div>
                    </div>
                    <p>© 2017 Willy Flechas Dj / <a href="http://sebastianagreda.com" target="_blank">Sebastian Agreda Desarrollo Web - Movíl</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
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
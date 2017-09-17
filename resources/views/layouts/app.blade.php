<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador Willy</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">



        <link href="vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bower_components/nouislider/distribute/nouislider.min.css" rel="stylesheet">
        <link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bower_components/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
        <link href="vendors/farbtastic/farbtastic.css" rel="stylesheet">
        <link href="vendors/bower_components/chosen/chosen.css" rel="stylesheet">
        <link href="vendors/summernote/dist/summernote.css" rel="stylesheet">

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">        
        <!-- CSS -->
        <link href="css/app_1.min.css" rel="stylesheet">
        <link href="css/app_2.min.css" rel="stylesheet">

    </head>
    <body>
        <header id="header" class="clearfix" data-ma-theme="blue">
            <ul class="h-inner">
               
                <li class="hi-logo hidden-xs">
                    <a href="index.html">Administrador Willy</a>
                </li>

                <li class="pull-right">
                    <ul class="hi-menu">

                        <li class="dropdown">
                            <ul class="dropdown-menu dm-icon pull-right">
                               
                                <li class="divider hidden-xs"></li>
                                <li class="hidden-xs">
                                    <a data-ma-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                </li>
                                <li>
                                    <a data-ma-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                </li>
                            </ul>
                        </li>
                      
                    </ul>
                </li>
            </ul>

            
        </header>

        <section id="main">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="s-profile">
                    <a href="" data-ma-action="profile-menu-toggle">
                        <div class="sp-pic">
                            <img src="img/demo/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="sp-info">
                            Administrador

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        
                        <li>
                            <a href="/logout"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    
                   <li class="active">
                        <a href="banner-principal"><i class="zmdi zmdi-home"></i> Banner Principal</a>
                    </li> 
                    <li class="active">
                        <a href="servicios"><i class="zmdi zmdi-home"></i> Servicios</a>
                    </li>
                     <li class="active">
                        <a href="noticias"><i class="zmdi zmdi-home"></i> Noticias</a>
                    </li>
                    {{--  <li class="active">
                        <a href="eventos"><i class="zmdi zmdi-home"></i> Eventos</a>
                    </li> --}}
                    <li class="active">
                        <a href="calendario"><i class="zmdi zmdi-home"></i> Calendario</a>
                    </li>
                     <li class="active">
                        <a href="canciones"><i class="zmdi zmdi-home"></i> Canciones</a>
                    </li>
                     <li class="active">
                        <a href="galeria"><i class="zmdi zmdi-home"></i> Galeria</a>
                    </li>
                     
                   

                </ul>
            </aside>

        

        </section>

 <section id="content">

        @yield("content")
 </section>
        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>

      
        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
        <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>



        <script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
        <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
        <script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
        <script src="vendors/summernote/dist/summernote-updated.min.js"></script>


        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="vendors/bower_components/chosen/chosen.jquery.js"></script>
        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="vendors/fileinput/fileinput.min.js"></script>
        <script src="vendors/farbtastic/farbtastic.min.js"></script>
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
        <script src="js/app.min.js"></script>
    </body>
  </html>

<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/app_1.min.css" rel="stylesheet">
        <link href="css/app_2.min.css" rel="stylesheet">
    </head>

    <body>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

        <div class="login-content">
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
                <div class="lcb-form">
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                             <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                            <i class="input-helper"></i>
                            Recuerdame 
                        </label>
                    </div>

                    <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>

                </div>
                <div class="lcb-navigation">
                    {{-- <a href="" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a> --}}
                    {{-- <a href="" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Olvido su Contraseña</span></a> --}}
                </div>
                
            </div>

           

            <!-- Forgot Password -->
            {{-- <div class="lc-block" id="l-forget-password">
                <div class="lcb-form">
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <a href="" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>
                </div>

                <div class="lcb-navigation">
                    <a href="" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Sign in</span></a>
                    <a href="" data-ma-action="login-switch" data-ma-block="#l-register"><i class="zmdi zmdi-plus"></i> <span>Register</span></a>
                </div>
            </div> --}}
        </div>

        </form>


        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>
    </body>
</html>

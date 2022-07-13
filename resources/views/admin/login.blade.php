

<!DOCTYPE html>
<html class=" ">
    <head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Login Administrator | Takelars Globalindo Nusantara</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Bismillah semoga lancar dan berkah. Aamiin" name="description" />
        <meta content="Muhammad Fiqri Alfayed" name="author" />

        <link rel="shortcut icon" href="{{ asset($provider->company_logo) }}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('/admin/images/apple-touch-icon-57-precomposed.png' )}}">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/admin/images/apple-touch-icon-114-precomposed.png' )}}">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/admin/images/apple-touch-icon-72-precomposed.png' )}}">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/admin/images/apple-touch-icon-144-precomposed.png' )}}">    <!-- For iPad Retina display -->

        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ asset('/admin/plugins/pace/pace-theme-flash.css' )}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('/admin/plugins/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/fonts/font-awesome/css/font-awesome.css' )}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/css/animate.min.css" rel="stylesheet' )}}" type="text/css"/>
        <link href="{{ asset('/admin/plugins/perfect-scrollbar/perfect-scrollbar.css' )}}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="{{ asset('/admin/plugins/icheck/skins/square/orange.css') }}" rel="stylesheet" type="text/css" media="screen"/>        
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ asset('/admin/css/style.css' )}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/css/responsive.css' )}}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">
        <div class="login-wrapper">
            <div id="login" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
                <h1><a href="#" title="Login Page" tabindex="-1" style="background-image: url({{ asset($provider->company_logo_text) }})">PT Takelars Globalindo Nusantara</a></h1>
                @if (session()->get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form name="loginform" id="loginform" action="/adm-login" method="POST">
                    @csrf
                    <p>
                        <label for="username">Nama Pengguna<br />
                        <input type="text" name="username" id="username" class="input" value="{{ old('username') }}" size="20" /></label>
                    </p>
                    <p>
                        <label for="password">Kata Sandi<br />
                            <input type="password" name="password" id="password" class="input" value="{{ old('password') }}" size="20" /></label>
                    </p>
                    {{-- <p class="forgetmenot">
                        <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Ingat saya</label>
                    </p> --}}
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Masuk" />
                    </p>
                </form>
                <p id="nav">
                    <a class="float-left" href="#">Lupa Kata Sandi?</a>
                </p>
            </div>
        </div>
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

        <!-- CORE JS FRAMEWORK - START --> 
        <script src="{{ asset('/admin/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/js/popper.min.js') }}" type="text/javascript"></script> 
        <!-- <script src="{{ asset('/admin/js/jquery.easing.min.js" type') }}="text/javascript"></script>  -->
        <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/plugins/pace/pace.min.js') }}" type="text/javascript"></script>  

        <script src="{{ asset('/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="{{ asset('/admin/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- CORE TEMPLATE JS - START --> 
        <script src="{{ asset('/admin/js/scripts.js') }}" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="{{ asset('/admin/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/admin/js/chart-sparkline.js') }}" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 
    </body>
</html>




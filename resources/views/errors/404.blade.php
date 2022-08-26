
<!DOCTYPE html>
<html class=" ">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>404 Error Page | Admin Takelars Globalindo Nusantara</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Takelars Globalindo Nusantara" name="description" />
        <meta content="Muhammad Fiqri Alfayed" name="author" />

        <link rel="shortcut icon" href="{{ asset('/admin/images/favicon.png') }}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('/admin/images/apple-touch-icon-57-precomposed.png') }}">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/admin/images/apple-touch-icon-114-precomposed.png') }}">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/admin/images/apple-touch-icon-72-precomposed.png') }}">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/admin/images/apple-touch-icon-144-precomposed.png') }}">    <!-- For iPad Retina display -->

        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ asset('/admin/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ asset('/admin/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/admin/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">

        <div class="col-xl-12">
            <section class="box nobox">
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <h1 class="page_error_code text-primary">404</h1>
                            <h1 class="page_error_info">Oops! Halaman Tidak Ditemukan.</h1>

                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <form action="javascript:;" method="post" class="page_error_search" style="width: 60%;">
                                        <div class="text-center page_error_btn">
                                            <a class="btn btn-primary btn-lg" href='{{ url()->previous() }}'><i class='fa fa-location-arrow'></i> &nbsp; Kembali</a>
                                        </div>
                                    </form>
                                </div></div>

                        </div>
                    </div>
                </div>
            </section></div>

        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

        <!-- CORE JS FRAMEWORK - START --> 
        <script src="{{ asset('/admin/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/js/popper.min.js') }}" type="text/javascript"></script> 
        {{-- <script src="{{ asset('/admin/js/jquery.easing.min.js') }}" type="text/javascript"></script> --}}
        <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/plugins/pace/pace.min.js') }}" type="text/javascript"></script>  

        <script src="{{ asset('/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('/admin/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
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
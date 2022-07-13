@extends('admin.layouts.main')

@section('styles')
  <link href="{{ asset('/admin/plugins/morris-chart/css/morris.css' )}}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('/admin/plugins/jquery-ui/smoothness/jquery-ui.min.css' )}}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('/admin/plugins/jvectormap/jquery-jvectormap-2.0.1.css' )}}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('/admin/plugins/icheck/skins/minimal/white.css' )}}" rel="stylesheet" type="text/css" media="screen"/>   
@endsection

@section('scripts')
  <script src="{{ asset('/admin/plugins/jquery-ui/smoothness/jquery-ui.min.js' )}}" type="text/javascript"></script> 
  <script src="{{ asset('/admin/plugins/sparkline-chart/jquery.sparkline.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/easypiechart/jquery.easypiechart.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/morris-chart/js/raphael-min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/morris-chart/js/morris.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/gauge/gauge.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/plugins/icheck/icheck.min.js' )}}" type="text/javascript"></script>
  <script src="{{ asset('/admin/js/blo-dashboard.js' )}}" type="text/javascript"></script>
@endsection

@section('content')
  <section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">
              <div class="float-left">
                <h1 class="title">Blog</h1>
              </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
          <section class="box nobox">
            <div class="content-body">
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="r4_counter db_box">
                          <i class='float-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                          <div class="stats">
                              <h4><strong>450K</strong></h4>
                              <span>Blog Page Views</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="r4_counter db_box">
                          <i class='float-left fa fa-user icon-md icon-rounded icon-orange'></i>
                          <div class="stats">
                              <h4><strong>6243</strong></h4>
                              <span>New Visitors</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="r4_counter db_box">
                          <i class='float-left fa fa-database icon-md icon-rounded icon-purple'></i>
                          <div class="stats">
                              <h4><strong>99.9%</strong></h4>
                              <span>Server Up</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="r4_counter db_box">
                          <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                          <div class="stats">
                              <h4><strong>1433</strong></h4>
                              <span>New Users</span>
                          </div>
                      </div>
                  </div>
              </div> <!-- End .row --> 
              
              <div class="row">



                  <div class="col-lg-12 col-md-12 col-12">
                      <div class="r1_maingraph db_box">
                          <span class='float-left'>
                              <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                          </span>
                          <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
                      </div>
                  </div>

              </div> <!-- End .row -->

              <div class="row">
                  <div class="col-lg-6 col-md-12 col-12">

                      <div class="r1_graph1 db_box db_box_large">
                          <span class='bold'>98.95%</span>
                          <span class='float-right'><small>SERVER UP</small></span>
                          <div class="clearfix"></div>
                          <span class="db_dynamicbar">Loading...</span>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12">

                      <div class="r1_graph2 db_box db_box_large">
                          <span class='bold'>2332</span>
                          <span class='float-right'><small>USERS ONLINE</small></span>
                          <div class="clearfix"></div>
                          <span class="db_linesparkline">Loading...</span>
                      </div>

                  </div>
              </div>
            </div>
          </section>
        </div>
    </section>
  </section>
@endsection
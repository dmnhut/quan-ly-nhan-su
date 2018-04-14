<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/ico"/>

    <title>Quản lý nhân sự</title>

    <!-- Bootstrap -->
    <link href="{{url('giaodien/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{url('giaodien/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{url('giaodien/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{url('giaodien/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{url('giaodien/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet">

    <!-- JQVMap -->
    <link href="{{url('giaodien/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>

    <!-- bootstrap-daterangepicker -->
    <link href="{{url('giaodien/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('giaodien/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Quản Lý Nhân Sự</span></a>
                </div>
                <br/>

                <!-- sidebar menu -->
            @include('layouts.menu')
            <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
            @include('layouts.menufooter')
            <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
    @include('layouts.header')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        @yield('content')
        <!-- /page content -->

        </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('giaodien/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{url('giaodien/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- FastClick -->
    <script src="{{url('giaodien/vendors/fastclick/lib/fastclick.js')}}"></script>

    <!-- NProgress -->
    <script src="{{url('giaodien/vendors/nprogress/nprogress.js')}}"></script>

    <!-- Chart.js -->
    <script src="{{url('giaodien/vendors/Chart.js/dist/Chart.min.js')}}"></script>

    <!-- gauge.js -->
    <script src="{{url('giaodien/vendors/gauge.js/dist/gauge.min.js')}}"></script>

    <!-- bootstrap-progressbar -->
    <script src="{{url('giaodien/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

    <!-- iCheck -->
    <script src="{{url('giaodien/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Skycons -->
    <script src="{{url('giaodien/vendors/skycons/skycons.js')}}"></script>

    <!-- Flot -->
    <script src="{{url('giaodien/vendors/Flot/jquery.flot.js')}}"></script>

    <script src="{{url('giaodien/vendors/Flot/jquery.flot.pie.js')}}"></script>

    <script src="{{url('giaodien/vendors/Flot/jquery.flot.time.js')}}"></script>

    <script src="{{url('giaodien/vendors/Flot/jquery.flot.stack.js')}}"></script>

    <script src="{{url('giaodien/vendors/Flot/jquery.flot.resize.js')}}"></script>

    <!-- Flot plugins -->
    <script src="{{url('giaodien/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>

    <script src="{{url('giaodien/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>

    <script src="{{url('giaodien/vendors/flot.curvedlines/curvedLines.js')}}"></script>

    <!-- DateJS -->
    <script src="{{url('giaodien/vendors/DateJS/build/date.js')}}"></script>

    <!-- JQVMap -->
    <script src="{{url('giaodien/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>

    <script src="{{url('giaodien/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>

    <script src="{{url('giaodien/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="{{url('giaodien/vendors/moment/min/moment.min.js')}}"></script>

    <script src="{{url('giaodien/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('giaodien/build/js/custom.min.js')}}"></script>
@yield('script')
</body>
</html>

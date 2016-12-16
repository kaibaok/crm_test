<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>

    <!-- Bootstrap -->
    <link href="/public/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/public/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/public/js/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/public/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/public/css/custom.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/public/js/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- JQVMap -->
    <link href="/public/js/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- menu left -->
       @include("admin.menuleft")
        <!-- end menu lef -->

        <!-- top navigation -->
        @include("admin.menutop")
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         @yield("rightcontent")
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="/">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/public/js/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/public/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- NProgress -->
    <script src="/public/js/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/public/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/public/js/custom.js"></script>
    <!-- FastClick -->
    <script src="/public/js/fastclick/lib/fastclick.js"></script>
     <!-- Chart.js -->
    <script src="/public/js/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/public/js/gauge.js/dist/gauge.min.js"></script>
    <!-- iCheck -->
    <script src="/public/js/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/public/js/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/public/js/Flot/jquery.flot.js"></script>
    <script src="/public/js/Flot/jquery.flot.pie.js"></script>
    <script src="/public/js/Flot/jquery.flot.time.js"></script>
    <script src="/public/js/Flot/jquery.flot.stack.js"></script>
    <script src="/public/js/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/public/js/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/public/js/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/public/js/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/public/js/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/public/js/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/public/js/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/public/js/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/public/js/moment/min/moment.min.js"></script>
    <script src="/public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {{-- Meta, title, CSS, favicons, etc. --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>

    {{-- Bootstrap --}}
    <link href="/public/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="/public/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{-- NProgress --}}
    <link href="/public/js/nprogress/nprogress.css" rel="stylesheet">
    {{-- bootstrap-progressbar --}}
    <link href="/public/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    {{-- bootstrap-daterangepicker --}}
    {{-- <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> --}}
    {{-- Custom Theme Style --}}
    <link href="/public/css/custom.css" rel="stylesheet">
    {{-- iCheck --}}
    <link href="/public/js/iCheck/skins/flat/green.css" rel="stylesheet">
    
    @yield("css")
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        {{-- menu left --}}
       @include("admin.menuleft")
        {{-- end menu lef --}}

        {{-- top navigation --}}
        @include("admin.menutop")
        {{-- /top navigation --}}

        {{-- page content --}}
        <div class="right_col" role="main">
         @yield("rightcontent")
        </div>
        {{-- /page content --}}

        {{-- footer content --}}
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="/">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        {{-- /footer content --}}
      </div>
    </div>

    {{-- jQuery --}}
    <script src="/public/js/jquery/dist/jquery.min.js"></script>
    {{-- Bootstrap --}}
    <script src="/public/js/bootstrap/dist/js/bootstrap.min.js"></script>
    {{-- NProgress --}}
    <script src="/public/js/nprogress/nprogress.js"></script>
    {{-- bootstrap-progressbar --}}
    <script src="/public/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    {{-- Custom Theme Scripts --}}
    <script src="/public/js/custom.js"></script>
    {{-- FastClick --}}
    <script src="/public/js/fastclick/lib/fastclick.js"></script>
    {{-- Chart.js --}}
    {{-- <script src="/public/js/Chart.js/dist/Chart.min.js"></script> --}}
    {{-- gauge.js --}}
    <script src="/public/js/gauge.js/dist/gauge.min.js"></script>
    {{-- iCheck --}}
    <script src="/public/js/iCheck/icheck.min.js"></script>
    {{-- DateJS --}}
    {{-- <script src="/public/js/DateJS/build/date.js"></script> --}}

    {{-- Parsley --}}
    <script src="/public/js/parsleyjs/dist/parsley.js"></script>
    {{-- check user --}}
    <script src="/public/js/cus_admin.js"></script>

    @yield("js")

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {{-- Meta, title, CSS, favicons, etc. --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield("title")</title>

    {{-- Bootstrap --}}
    <link href="/public/admin/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/admin/js/jquery/dist/jquery-ui.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="/public/admin/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{-- NProgress --}}
    <link href="/public/admin/js/nprogress/nprogress.css" rel="stylesheet">
    {{-- bootstrap-progressbar --}}
    <link href="/public/admin/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    {{-- Custom Theme Style --}}
    <link href="/public/admin/css/custom.css" rel="stylesheet">
    {{-- iCheck --}}
    <link href="/public/admin/js/iCheck/skins/flat/green.css" rel="stylesheet">


   <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
   <link href="/public/admin/js/imageupload/dist/css/bootstrap-imageupload.css" rel="stylesheet">
   <link href="/public/admin/js/pnotify/dist/pnotify.css" rel="stylesheet">
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
    <script src="/public/admin/js/jquery/dist/jquery.min.js"></script>
    <script src="/public/admin/js/jquery/dist/jquery-ui.min.js"></script>
    {{-- Bootstrap --}}
    <script src="/public/admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
    {{-- NProgress --}}
    <script src="/public/admin/js/nprogress/nprogress.js"></script>
    {{-- bootstrap-progressbar --}}
    <script src="/public/admin/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    {{-- Custom Theme Scripts --}}
    <script src="/public/admin/js/custom.js"></script>
    {{-- FastClick --}}
    <script src="/public/admin/js/fastclick/lib/fastclick.js"></script>
    {{-- Chart.js --}}
    {{-- <script src="/public/admin/js/Chart.js/dist/Chart.min.js"></script> --}}
    {{-- gauge.js --}}
    <script src="/public/admin/js/gauge.js/dist/gauge.min.js"></script>
    {{-- iCheck --}}
    <script src="/public/admin/js/iCheck/icheck.min.js"></script>
    {{-- DateJS --}}
    {{-- <script src="/public/admin/js/DateJS/build/date.js"></script> --}}
    {{-- Parsley --}}
    <script src="/public/admin/js/parsleyjs/dist/parsley.js"></script>
    <script src="/public/admin/js/ckeditor/ckeditor.js"></script>
    <script src="/public/admin/js/ckeditor/ckfinder/ckfinder.js"></script>
    <script src="/public/admin/js/moment/min/moment.min.js"></script>
    <script src="/public/admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/public/admin/js/pnotify/dist/pnotify.js"></script>
    <script src="/public/admin/js/imageupload/dist/js/bootstrap-imageupload.js"></script>
    <script> var _token = $('meta[name="csrf-token"]').attr('content'); </script>
    @yield("js")
    <script src="/public/admin/js/cus_admin.js"></script>

  </body>
</html>

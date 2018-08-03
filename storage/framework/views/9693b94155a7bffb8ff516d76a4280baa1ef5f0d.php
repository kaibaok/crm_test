<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php /* Meta, title, CSS, favicons, etc. */ ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo $__env->yieldContent("title"); ?></title>

    <?php /* Bootstrap */ ?>
    <link href="/public/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php /* Font Awesome */ ?>
    <link href="/public/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <?php /* NProgress */ ?>
    <link href="/public/js/nprogress/nprogress.css" rel="stylesheet">
    <?php /* bootstrap-progressbar */ ?>
    <link href="/public/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <?php /* bootstrap-daterangepicker */ ?>
    <?php /* <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> */ ?>
    <?php /* Custom Theme Style */ ?>
    <link href="/public/css/custom.css" rel="stylesheet">
    <?php /* iCheck */ ?>
    <link href="/public/js/iCheck/skins/flat/green.css" rel="stylesheet">

    <?php echo $__env->yieldContent("css"); ?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php /* menu left */ ?>
       <?php echo $__env->make("admin.menuleft", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php /* end menu lef */ ?>

        <?php /* top navigation */ ?>
        <?php echo $__env->make("admin.menutop", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php /* /top navigation */ ?>

        <?php /* page content */ ?>
        <div class="right_col" role="main">
         <?php echo $__env->yieldContent("rightcontent"); ?>
        </div>
        <?php /* /page content */ ?>

        <?php /* footer content */ ?>
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="/">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <?php /* /footer content */ ?>
      </div>
    </div>

    <?php /* jQuery */ ?>
    <script src="/public/js/jquery/dist/jquery.min.js"></script>
    <?php /* Bootstrap */ ?>
    <script src="/public/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php /* NProgress */ ?>
    <script src="/public/js/nprogress/nprogress.js"></script>
    <?php /* bootstrap-progressbar */ ?>
    <script src="/public/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <?php /* Custom Theme Scripts */ ?>
    <script src="/public/js/custom.js"></script>
    <?php /* FastClick */ ?>
    <script src="/public/js/fastclick/lib/fastclick.js"></script>
    <?php /* Chart.js */ ?>
    <?php /* <script src="/public/js/Chart.js/dist/Chart.min.js"></script> */ ?>
    <?php /* gauge.js */ ?>
    <script src="/public/js/gauge.js/dist/gauge.min.js"></script>
    <?php /* iCheck */ ?>
    <script src="/public/js/iCheck/icheck.min.js"></script>
    <?php /* DateJS */ ?>
    <?php /* <script src="/public/js/DateJS/build/date.js"></script> */ ?>

    <?php /* Parsley */ ?>
    <script src="/public/js/parsleyjs/dist/parsley.js"></script>
    <?php /* check user */ ?>
    <script src="/public/js/cus_admin.js"></script>

    <?php echo $__env->yieldContent("js"); ?>

  </body>
</html>

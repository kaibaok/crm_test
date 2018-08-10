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
    <link href="/public/admin/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/admin/js/jquery/dist/jquery-ui.min.css" rel="stylesheet">
    <?php /* Font Awesome */ ?>
    <link href="/public/admin/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <?php /* NProgress */ ?>
    <link href="/public/admin/js/nprogress/nprogress.css" rel="stylesheet">
    <?php /* bootstrap-progressbar */ ?>
    <link href="/public/admin/js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <?php /* Custom Theme Style */ ?>
    <link href="/public/admin/css/custom.css" rel="stylesheet">
    <?php /* iCheck */ ?>
    <link href="/public/admin/js/iCheck/skins/flat/green.css" rel="stylesheet">


   <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
   <link href="/public/admin/js/imageupload/dist/css/bootstrap-imageupload.css" rel="stylesheet">
   <link href="/public/admin/js/pnotify/pnotify.custom.min.css" rel="stylesheet">
   <?php echo $__env->yieldContent("css"); ?>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php /* menu left */ ?>
       <?php echo $__env->make("admin.menuleft", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php /* end menu lef */ ?>

        <?php /* top navigation */ ?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
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
    <script src="/public/admin/js/jquery/dist/jquery.min.js"></script>
    <script src="/public/admin/js/jquery/dist/jquery-ui.min.js"></script>
    <?php /* Bootstrap */ ?>
    <script src="/public/admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php /* NProgress */ ?>
    <script src="/public/admin/js/nprogress/nprogress.js"></script>
    <?php /* bootstrap-progressbar */ ?>
    <script src="/public/admin/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <?php /* Custom Theme Scripts */ ?>
    <script src="/public/admin/js/custom.js"></script>
    <?php /* FastClick */ ?>
    <script src="/public/admin/js/fastclick/lib/fastclick.js"></script>
    <?php /* Chart.js */ ?>
    <script src="/public/admin/js/Chart.js/dist/Chart.min.js"></script>
    <?php /* iCheck */ ?>
    <script src="/public/admin/js/iCheck/icheck.min.js"></script>
    <?php /* DateJS */ ?>
    <?php /* <script src="/public/admin/js/DateJS/build/date.js"></script> */ ?>
    <?php /* Parsley */ ?>
    <script src="/public/admin/js/parsleyjs/dist/parsley.js"></script>
    <script src="/public/admin/js/ckeditor/ckeditor.js"></script>
    <script src="/public/admin/js/ckeditor/ckfinder/ckfinder.js"></script>
    <script src="/public/admin/js/moment/min/moment.min.js"></script>
    <script src="/public/admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/public/admin/js/pnotify/pnotify.custom.min.js"></script>
    <script src="/public/admin/js/imageupload/dist/js/bootstrap-imageupload.js"></script>
    <script> var _token = $('meta[name="csrf-token"]').attr('content'); </script>
    <script>
        function popupNotice(type) {
            var opts = {
                title: "Thông báo",
                text: "",
                addclass: "stack-bottomright",
                stack: {"dir1": "up", "dir2": "left", "firstpos1": 50, "firstpos2": 25}
            };
            switch (type) {
                case 'error':
                    opts.text = "Lưu thất bại";
                    opts.type = "error";
                    break;
                default:
                    opts.text = "Lưu thành công";
                    opts.type = "success";
                    break;
            }
            new PNotify(opts);
        }
    </script>
    <?php echo $__env->yieldContent("js"); ?>
    <script src="/public/admin/js/cus_admin.js"></script>
  </body>
</html>

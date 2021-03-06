<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login CRM</title>

    <!-- Bootstrap -->
    <link href="/public/admin/js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/public/admin/js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/public/admin/js/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/public/admin/js/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/public/admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post">
            <input type="hidden" name="redirect" value="admin"/>
              <h1>Đăng nhập</h1>
                <?php echo e(csrf_field()); ?>

              <div  class="form-group">
              <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(isset($params['email']) ? $params['email'] : ''); ?>" required="">
              </div>
              <div class="form-group">
                <input id="password" type="password" class="form-control"  placeholder="Mật Khẩu" name="password" required="" >

              </div>
              <div  class="form-group">
                <input type="checkbox" name="remember" value="1" <?php echo e(!empty($params['remember']) ? "checked" : ""); ?>> Ghi nhớ <br>
                <?php if($errors['error']): ?>
                    <span class="help-block">
                        <strong>Vui lòng kiểm tra lại Email hoặc Password</strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Đăng nhập</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> CRM </h1>
                  <p>© <?php echo e(date("Y")); ?> All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

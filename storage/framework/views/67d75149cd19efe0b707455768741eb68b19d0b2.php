<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area contact ptb-110 overlay">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Đăng nhập</h2>
                    </div>
                    <?php /* <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize">contact</li>
                        </ul>
                    </div> */ ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- contact start -->
<div class="contact-area pt-90">
    <div class="container">
        <div class="row">
        <!-- contact us form start -->
        <div class="row">
            <div class="col-xs-12"></div>
                <div class="contact-us-form">
                    <div class="section-title text-center">
                        <h4>Đăng nhập</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="contact-form">
                        <form id="contact-form-two" action="" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-top">
                                <div class="form-group col-xs-12">
                                    <label>Tài khoản<span class="required" title="required">*</span></label>
                                    <input name="name" type="text" class="form-control" value="<?php if(!empty($params['name'])): ?> <?php echo e($params['name']); ?> <?php endif; ?>">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Mật khẩu<span class="required" title="required">*</span></label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="submit-form form-group col-xs-12 submit-review text-center">
                                <?php if(!empty($errors)): ?> <p class="form-message-two txt_error"><?php echo e($errors['login']); ?></p><?php endif; ?>
                                <div class="clearfix"></div>
                                <button class="section-button mt-20" type="submit"><span>Đăng nhập</span></button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                   <!-- contact us form end -->
                </div>
            </div>
        <!-- google-map-area end -->
        </div>
    </div>
</div>
<!-- contact end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
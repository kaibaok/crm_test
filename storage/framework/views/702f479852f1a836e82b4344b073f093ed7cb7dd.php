<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area contact ptb-110 overlay">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Thông tin cá nhân</h2>
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
                        <h4>Thông tin cá nhân</h4>
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
                                    <input name="name" type="text" class="form-control" value="<?php if(!empty($user['name'])): ?><?php echo e($user['name']); ?><?php endif; ?>">
                                    <?php if(!empty($errors['name'])): ?> <p class="form-message-two txt_error"><?php echo e($errors['name']); ?></p><?php endif; ?>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Giới tính<span class="required" title="required">*</span></label><br>
                                    <label><input type="radio" name="gender" value="0" <?php if(isset($user['gender']) && $user['gender'] == 0): ?> checked <?php endif; ?>>Nam</label>
                                    <label><input type="radio" name="gender" value="1" <?php if(isset($user['gender']) && $user['gender'] == 1): ?> checked <?php endif; ?>>Nữ</label>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Mật khẩu<span class="required" title="required">*</span></label>
                                    <input name="password" type="password" class="form-control">
                                    <?php if(!empty($errors['password'])): ?> <p class="form-message-two txt_error"><?php echo e($errors['password']); ?></p><?php endif; ?>
                                </div>
                            </div>
                            <div class="submit-form form-group col-xs-12 submit-review text-center">
                                <div class="clearfix"></div>
                                <button class="section-button mt-20" type="submit"><span>Cập nhật</span></button>
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
<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Xác nhận đơn hàng</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize">thương hiệu thời trang nổi tiếng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- checkout start -->
<div class="checkout-area-start pt-90">
    <div class="container">
       <div class="section-title">
            <h2 class="text-uppercase mb-35 text-center">Cảm ơn</h2>
            <p class="text-center">Bạn đã đặt hàng tại website của chúng tôi. <br><br>
            Mọi chi tiết xin liên hệ : <?php echo e(CONTACT_PHONE); ?> - <?php echo e(CONTACT_PHONE2); ?></p>
        </div>
    </div>
</div>
<!-- checkout end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
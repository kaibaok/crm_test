<?php $__env->startSection('middlecontent'); ?>
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Tin tức</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><?php echo e($news->title); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shop-area-start leftsidebar mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="shop-left-sidebar">
                   <?php echo $__env->make("user.leftnavi", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-md-9">
                <?php if(empty($news)): ?>
                    No Data
                <?php else: ?>
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo $news->desc; ?>

                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- shop end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
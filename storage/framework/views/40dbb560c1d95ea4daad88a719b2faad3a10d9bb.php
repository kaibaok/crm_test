<?php $__env->startSection('middlecontent'); ?>
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">thương hiệu</h2>
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
<div class="shop-area-start leftsidebar mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="shop-left-sidebar">
                   <?php echo $__env->make("user.leftnavi", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-md-9">
                <?php if(empty($listBrand)): ?> No Data <?php else: ?>
                    <div class="tab-content mt-25">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <?php foreach($listBrand as $value): ?>
                                    <?php if(!empty($value->bimg_detail) && file_exists(BASE_IMG."brand/".$value->bimg_detail)): ?>
                                        <div class="col-xs-12 col-width">
                                            <div class="single-product mb-30">
                                                <div class="single-product-item clearfix">
                                                    <div class="single-product-img clearfix">
                                                        <a href="/p/?brand=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>">
                                                            <img class="primary-image" src="<?php echo e(URL_IMG."brand/".$value->bimg_detail); ?>" alt="<?php echo e($value->title); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <h3><a href="/p/?brand=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>"><?php echo e($value->title); ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
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
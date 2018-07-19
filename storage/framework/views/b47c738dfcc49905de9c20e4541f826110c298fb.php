<?php $__env->startSection('middlecontent'); ?>
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Tin tức</h2>
                    </div>
                    <?php /* <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize">shop</li>
                        </ul>
                    </div> */ ?>
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
                <?php if(empty($listNews)): ?>
                    No Data
                <?php else: ?>
                <div id="blog">
                    <div class="row">
                        <?php foreach($listNews as $value): ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-20">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="/nd/<?php echo e($value->id); ?>/<?php echo e($value->seo_link); ?>">
                                            <?php if(!empty($value->nimg_list) && file_exists(BASE_IMG."news/".$value->nimg_list)): ?>
                                                <img src="<?php echo e(URL_IMG."news/".$value->nimg_list); ?>" alt="<?php echo e($value->title); ?>">
                                            <?php else: ?>
                                                <img src="/public/user/img/blog/1.jpg" alt="<?php echo e($value->title); ?>">
                                            <?php endif; ?>
                                        </a>
                                        <div class="blog-date text-center">
                                             <?php  $createdAt = strtotime($value->created_at);  ?>
                                            <h2><?php echo e(date("d", $createdAt)); ?> <span><?php echo e(date("M", $createdAt)); ?></span></h2>
                                        </div>
                                    </div>
                                    <div class="single-blog-info mt-25">
                                        <h4><a href="/nd/<?php echo e($value->id); ?>/<?php echo e($value->seo_link); ?>"><?php echo e($value->title); ?></a></h4>
                                        <?php echo $value->short_desc; ?>

                                        <div class="button-comments">
                                            <div class="read-button text-center">
                                                <a class="read-more text-uppercase" href="/nd/<?php echo e($value->id); ?>/<?php echo e($value->seo_link); ?>">
                                                    Chi tiết <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="shop-item-filter margin-none">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-menu2 float-right">
                                <?php echo e($paginator->links()); ?>

                            </div>
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
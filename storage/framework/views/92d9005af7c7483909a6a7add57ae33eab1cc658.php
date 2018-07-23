<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area details ptb-110" <?php if(!empty($product->pimg_detail) && file_exists(BASE_IMG."product/".$product->pimg_detail)): ?>
                    style="background-image: url('<?php echo e(URL_IMG."product/".$product->pimg_detail); ?>')"<?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center"  >
                    <div class="banner-title">
                        <h2 class="text-uppercase"><?php echo e($product->title); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!--Start Product Details area  -->
<div class="product-detail-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="zoomWrapper clearfix">
                    <div id="img-1" class="zoomWrapper single-zoom pull-right">
                        <a href="#">
                            <?php if(!empty($product->pimg1) && file_exists(BASE_IMG."product/".$product->pimg1)): ?>
                                <img id="zoom1" src="<?php echo e(URL_IMG."product/".$product->pimg1); ?>" data-zoom-image="<?php echo e(URL_IMG."product/".$product->pimg1); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="product-thumb">
                        <ul class="p-details-slider" id="gallery_01">
                             <li>
                                <?php if(!empty($product->pimg1) && file_exists(BASE_IMG."product/".$product->pimg1)): ?>
                                    <a class="elevatezoom-gallery" href="#" data-image="<?php echo e(URL_IMG."product/".$product->pimg1); ?>" data-zoom-image="<?php echo e(URL_IMG."product/".$product->pimg1); ?>"><img src="<?php echo e(URL_IMG."product/".$product->pimg1); ?>" alt=""></a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if(!empty($product->pimg2) && file_exists(BASE_IMG."product/".$product->pimg2)): ?>
                                    <a class="elevatezoom-gallery" href="#" data-image="<?php echo e(URL_IMG."product/".$product->pimg2); ?>" data-zoom-image="<?php echo e(URL_IMG."product/".$product->pimg2); ?>"><img src="<?php echo e(URL_IMG."product/".$product->pimg2); ?>" alt=""></a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if(!empty($product->pimg3) && file_exists(BASE_IMG."product/".$product->pimg3)): ?>
                                    <a class="elevatezoom-gallery" href="#" data-image="<?php echo e(URL_IMG."product/".$product->pimg3); ?>" data-zoom-image="<?php echo e(URL_IMG."product/".$product->pimg3); ?>"><img src="<?php echo e(URL_IMG."product/".$product->pimg3); ?>" alt=""></a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="product-detail">
                    <div class="product-title">
                        <h2><?php echo e($product->title); ?></h2><br>
                        <h4>Giá:
                            <?php if($product->type_price == CONTACT_PHONE): ?> <?php echo e(CONTACT_PHONE); ?>

                            <?php else: ?>
                                <?php if($product->discount >0): ?>
                                    <?php echo e($product->discount); ?> <del><?php echo e($product->price); ?></del>
                                <?php else: ?>
                                    <?php echo e($product->price); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <h5>Trạng thái: <span>  <?php if($product->type_price == EMPTY_PRODUCT): ?> Hết hàng <?php else: ?> Còn hàng <?php endif; ?></span> </h5>
                    <h5>Thương hiệu: <span><?php echo e($product->title_brand); ?></span><br></h5>
                    <h5>Danh mục: <span><?php echo e($product->title_category); ?></span><br></h5>
                    <p class="detail"><?php echo $product->short_desc; ?></p>
                    <div class="size-quantity clearfix">
                        <div class="single-size-quantity">
                            <h4>Size:</h4>
                            <div class="search-cat">
                                <select name="size" class="category-items ">
                                    <?php foreach($listSize as $value): ?>
                                        <option value="<?php echo e($value); ?>"><?php echo e(strtoupper($value)); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="single-size-quantity">
                            <h4>Số lượng đặt:</h4>
                            <div class="search-cat">
                                <select name="number_cart" class="category-items ">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="wish-icon-hover-list mt-30 mb-30 text-left">
                        <ul>
                            <li><a href="#" data-toggle="tooltip" title="shopping cart"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget-color">
                       <h4 class="follow">Chia sẻ:</h4>
                       <ul>
                           <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                           <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                           <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                           <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-description-tab pt-50">
                    <div class="description-tab-menu section-tab-menu pb-30">
                        <ul class="clearfix" role="tablist">
                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Mô tả</a></li>
                            <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Bình luận</a></li>
                      </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                           <?php echo $product->desc; ?>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="specification">
                            <p>Bình luận</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Product Details area  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
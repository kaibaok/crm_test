<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('middlecontent'); ?>

<div class="slider-wrap">
    <?php echo $__env->make("user.slidertop", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<!-- slider bottom start -->
<div class="slider-bottom-area mt-10 mb-90 text-left">
    <div class="container-fluid">
        <div class="row">
            <?php if(!empty($homePage)): ?>
                <?php for($i = 1; $i <= 4 ; $i++): ?>
                    <?php if(!empty($homePage["himg{$i}"]) && file_exists(BASE_IMG."home/".$homePage["himg{$i}"])): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="<?php if(empty($homePage["link{$i}"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link{$i}"]); ?> <?php endif; ?>">
                                        <img src="<?php echo e(URL_IMG."home/".$homePage["himg{$i}"]); ?>" alt="banner <?php echo e($i); ?>">
                                    </a>
                                </div>
                                <div class="single-slider-info"> <?php echo $homePage["title{$i}"]; ?> </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--slider bottom end -->
<!-- men area start -->
<?php if(!empty($homePage['list_top']) && !empty($listCategory)): ?>
<?php 
    $arrListTop = explode("|", $homePage['list_top']);
 ?>
<div class="men-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <?php foreach($arrListTop as $key => $value): ?>
                                <?php  $active = ($key < 1) ? "active" : "";  ?>
                                <li role="presentation" class="<?php echo e($active); ?> text-uppercase"><a href="#<?php echo e("tab_top_".$value); ?>" aria-controls="<?php echo e("tab_top_".$value); ?>" role="tab" data-toggle="tab"><?php echo e($listCategory[$value]['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2">
                    <?php if(!empty($homePage['himg5']) && file_exists(BASE_IMG."home/".$homePage["himg5"])): ?>
                    <a href="<?php if(empty($homePage["link5"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link5"]); ?> <?php endif; ?>">
                        <img src="<?php echo e(URL_IMG."home/".$homePage["himg5"]); ?>" alt="banner 5">
                        <div class="feature-info text-left">
                            <?php echo $homePage["title5"]; ?>

                        </div>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    <?php foreach($arrListTop as $key => $value): ?>
                        <?php  $active = ($key < 1) ? "active" : "";  ?>
                        <div id="<?php echo e("tab_top_".$value); ?>" role="tabpanel" class="<?php echo e($active); ?> section-tab-item">
                            <div class="feature-slider">
                                <?php if(!empty($listTop[$value])): ?>
                                    <?php foreach($listTop[$value] as $key2 => $item): ?>
                                        <?php if(!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list'])): ?>
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#"><img class="primary-image" src="<?php echo e(URL_IMG."product/".$item['pimg_list']); ?>" alt=""></a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p class="hidden-md"><?php echo e($item['short_desc']); ?></p>
                                                                    <ul>
                                                                        <li><a href="javascript:void(0);" data-toggle="tooltip" title="Đặt hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                <?php if($item['type_price'] == 1): ?>
                                                                    <span class="new-price"><?php echo e($item['discount']); ?></span>
                                                                    <span class="old-price"><?php echo e($item['price']); ?></span>
                                                                <?php elseif($item['type_price'] == 2): ?>
                                                                    <span class="new-price">Liên lạc : <?php echo e(CONTACT_PHONE); ?></span>
                                                                <?php else: ?>
                                                                    <span class="new-price">Hết hàng</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <h3><a href="/pd/<?php echo e($item['id']); ?>/<?php echo e($item['seo_link']); ?>"><?php echo e($item['title']); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <?php if($item['is_new']): ?> <span class="black hidden-sm">new</span> <?php endif; ?>
                                                    <?php if($item['is_best_sell']): ?> <span class="red hidden-sm" <?php if($item['is_new']): ?> style="margin-left: 70px" <?php endif; ?>>hot</span> <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='/p' class='section-button'>Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- men area end -->
<!-- collection area start -->
<div class="collection-area clearfix mb-90">
    <div class="container">
        <div class="column-left pull-left pr-16">
            <div class="column-left-top clearfix mb-15">
                <div class="col-left-top-left pr-8 pull-left">
                    <?php if(!empty($homePage['himg8']) && file_exists(BASE_IMG."home/".$homePage["himg8"])): ?>
                    <a href="<?php if(empty($homePage["link8"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link8"]); ?> <?php endif; ?>">
                        <img src="<?php echo e(URL_IMG."home/".$homePage["himg8"]); ?>" alt="banner 5">
                    </a>
                    <div class="col-left-top-left-text">
                           <?php echo $homePage["title8"]; ?>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-left-top-right pl-8 pull-right">
                    <?php if(!empty($homePage['himg9']) && file_exists(BASE_IMG."home/".$homePage["himg9"])): ?>
                        <a href="<?php if(empty($homePage["link9"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link9"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg9"]); ?>" alt="banner 5">
                        </a>
                        <div class="col-left-top-right-text text-center">
                               <?php echo $homePage["title9"]; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="column-left-bottom clearfix">
                <div class="col-left-bottom-left pr-8 pull-left">
                    <?php if(!empty($homePage['himg11']) && file_exists(BASE_IMG."home/".$homePage["himg11"])): ?>
                        <a href="<?php if(empty($homePage["link11"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link11"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg11"]); ?>" alt="banner 5">
                        </a>
                       <div class="col-left-bottom-left-text">
                               <?php echo $homePage["title11"]; ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-left-bottom-right pl-8 pull-right">
                     <?php if(!empty($homePage['himg12']) && file_exists(BASE_IMG."home/".$homePage["himg12"])): ?>
                        <a href="<?php if(empty($homePage["link12"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link12"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg12"]); ?>" alt="banner 5">
                        </a>
                       <div class="col-left-bottom-right-text">
                               <?php echo $homePage["title12"]; ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="column-right pull-right hidden-sm hidden-xs">
            <?php if(!empty($homePage['himg10']) && file_exists(BASE_IMG."home/".$homePage["himg10"])): ?>
                <a href="<?php if(empty($homePage["link10"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link10"]); ?> <?php endif; ?>">
                    <img src="<?php echo e(URL_IMG."home/".$homePage["himg10"]); ?>" alt="banner 5">
                </a>
                <div class="col-right-text">
                       <?php echo $homePage["title10"]; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- collection area end -->
<!-- women area start -->
<?php if(!empty($homePage['list_middle']) && !empty($listCategory)): ?>
<?php 
    $arrListMiddle = explode("|", $homePage['list_middle']);
 ?>
<div class="women-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <?php foreach($arrListMiddle as $key => $value): ?>
                                <?php  $active = ($key < 1) ? "active" : "";  ?>
                                <li role="presentation" class="<?php echo e($active); ?> text-uppercase"><a href="#<?php echo e("tab_middle_".$value); ?>" aria-controls="<?php echo e("tab_middle_".$value); ?>" role="tab" data-toggle="tab"><?php echo e($listCategory[$value]['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    <?php foreach($arrListMiddle as $key => $value): ?>
                    <?php  $active = ($key < 1) ? "active" : "";  ?>
                        <div id="<?php echo e("tab_middle_".$value); ?>" role="tabpanel" class="<?php echo e($active); ?> section-tab-item">
                            <div class="feature-slider">
                                <?php if(!empty($listMiddle[$value])): ?>
                                    <?php  $list = $listMiddle[$value]; $nums = sizeof($list);  ?>
                                    <?php for($key2 = 0; $key2 < $nums ; $key2++): ?>
                                        <?php  $item = $list[$key2];  ?>
                                        <?php if(!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list'])): ?>
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#"><img class="primary-image" src="<?php echo e(URL_IMG."product/".$item['pimg_list']); ?>" alt=""></a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <div class="hidden-md"><?php echo e($item['short_desc']); ?></div>
                                                                    <ul>
                                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                <?php if($item['type_price'] == 1): ?>
                                                                    <span class="new-price"><?php echo e($item['discount']); ?></span>
                                                                    <span class="old-price"><?php echo e($item['price']); ?></span>
                                                                <?php elseif($item['type_price'] == 2): ?>
                                                                    <span class="new-price">Liên lạc : <?php echo e(CONTACT_PHONE); ?></span>
                                                                <?php else: ?>
                                                                    <span class="new-price">Hết hàng</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <h3><a href="/pd/<?php echo e($item['id']); ?>/<?php echo e($item['seo_link']); ?>"><?php echo e($item['title']); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <?php if($item['is_new']): ?> <span class="black hidden-sm">new</span> <?php endif; ?>
                                                    <?php if($item['is_best_sell']): ?> <span class="red hidden-sm" <?php if($item['is_new']): ?> style="margin-left: 70px" <?php endif; ?>>hot</span> <?php endif; ?>
                                                </div>
                                                <?php if($key2+1 < $nums): ?>
                                                    <?php  $item = $list[++$key2];  ?>
                                                    <?php if(!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list'])): ?>
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#"><img class="primary-image" src="<?php echo e(URL_IMG."product/".$item['pimg_list']); ?>" alt=""></a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <div class="hidden-md"><?php echo e($item['short_desc']); ?></div>
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-price">
                                                                    <?php if($item['type_price'] == 1): ?>
                                                                        <span class="new-price"><?php echo e($item['discount']); ?></span>
                                                                        <span class="old-price"><?php echo e($item['price']); ?></span>
                                                                    <?php elseif($item['type_price'] == 2): ?>
                                                                        <span class="new-price">Liên lạc : <?php echo e(CONTACT_PHONE); ?></span>
                                                                    <?php else: ?>
                                                                        <span class="new-price">Hết hàng</span>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <h3><a href="/pd/<?php echo e($item['id']); ?>/<?php echo e($item['seo_link']); ?>"><?php echo e($item['title']); ?></a></h3>
                                                            </div>
                                                        </div>
                                                        <?php if($item['is_new']): ?> <span class="black hidden-sm">new</span> <?php endif; ?>
                                                        <?php if($item['is_best_sell']): ?> <span class="red hidden-sm" <?php if($item['is_new']): ?> style="margin-left: 70px" <?php endif; ?>>hot</span> <?php endif; ?>
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='/p' class='section-button'>Chi tiết</a>
                </div>
            </div>
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2 pull-right">
                    <?php if(!empty($homePage['himg6']) && file_exists(BASE_IMG."home/".$homePage["himg6"])): ?>
                        <a href="<?php if(empty($homePage["link6"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link6"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg6"]); ?>" alt="banner 6">
                            <div class="feature-info text-right">
                                <?php echo $homePage["title6"]; ?>

                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- women area end -->
<!-- offer area start -->
<?php if(!empty($event) && $isOpenEvent): ?>
    <div class="offer-area ptb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-5 col-xs-12">
                    <div class="offer-img">
                        <?php if(!empty($event->eimg_detail) && file_exists(BASE_IMG."event/".$event->eimg_detail)): ?>
                            <img src="<?php echo e(URL_IMG."event/".$event->eimg_detail); ?>" alt="<?php echo e($event->title); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                    <div class="offer-info mt-40 text-center">
                        <?php echo $event->desc; ?>

                    </div>
                    <div class="timer">
                        <div data-countdown="<?php echo e(str_replace("/", "-", $event->time_close)); ?>" class="timer-grid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- offer area end -->
<!-- off banner area start -->
<div class="off-banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="single-off-banner text-left">
                <?php if(!empty($homePage['himg13']) && file_exists(BASE_IMG."home/".$homePage["himg13"])): ?>
                    <div class="off-img">
                         <a href="<?php if(empty($homePage["link13"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link13"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg13"]); ?>" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        <?php echo $homePage["title13"]; ?>

                    </div>
                <?php endif; ?>
            </div>

            <div class="single-off-banner text-center">
                <?php if(!empty($homePage['himg14']) && file_exists(BASE_IMG."home/".$homePage["himg14"])): ?>
                    <div class="off-img">
                         <a href="<?php if(empty($homePage["link14"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link14"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg14"]); ?>" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        <?php echo $homePage["title14"]; ?>

                    </div>
                <?php endif; ?>
            </div>
            <div class="single-off-banner text-left">
                <?php if(!empty($homePage['himg15']) && file_exists(BASE_IMG."home/".$homePage["himg15"])): ?>
                    <div class="off-img">
                         <a href="<?php if(empty($homePage["link15"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link15"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg15"]); ?>" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        <?php echo $homePage["title15"]; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="consultation-angle"></div>
</div>
<!-- off banner area end -->
<!-- featured start -->
<?php if(!empty($homePage['list_footer']) && !empty($listProductType)): ?>
<?php 
    $arrListFooter = explode("|", $homePage['list_footer']);
 ?>
<div class="featured-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <?php foreach($arrListFooter as $key => $value): ?>
                                <?php  $active = ($key < 1) ? "active" : "";  ?>
                                <li role="presentation" class="<?php echo e($active); ?> text-uppercase"><a href="#<?php echo e("tab_footer_".$value); ?>" aria-controls="<?php echo e("tab_footer_".$value); ?>" role="tab" data-toggle="tab"><?php echo e($listProductType[$value]); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2">
                    <?php if(!empty($homePage['himg7']) && file_exists(BASE_IMG."home/".$homePage["himg7"])): ?>
                        <a href="<?php if(empty($homePage["link7"])): ?> javascript:void(0); <?php else: ?> <?php echo e($homePage["link7"]); ?> <?php endif; ?>">
                            <img src="<?php echo e(URL_IMG."home/".$homePage["himg7"]); ?>" alt="banner 7">
                            <div class="feature-info text-right">
                                <?php echo $homePage["title7"]; ?>

                            </div>
                        </a>
                    <span class="red hidden-sm" style="margin-left: 35px">hot</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    <?php foreach($arrListFooter as $key => $value): ?>
                        <?php  $active = ($key < 1) ? "active" : "";  ?>
                        <div id="<?php echo e("tab_footer_".$value); ?>" role="tabpanel" class="<?php echo e($active); ?> section-tab-item">
                            <div class="feature-slider">
                                <?php if(!empty($listFooter[$value])): ?>
                                    <?php  $list = $listFooter[$value]; $nums = sizeof($list);  ?>
                                    <?php for($key2 = 0; $key2 < $nums ; $key2++): ?>
                                        <?php  $item = $list[$key2];  ?>
                                        <?php if(!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list'])): ?>
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#"><img class="primary-image" src="<?php echo e(URL_IMG."product/".$item['pimg_list']); ?>" alt=""></a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p class="hidden-md"><?php echo e($item['short_desc']); ?></p>
                                                                    <ul>
                                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                <?php if($item['type_price'] == 1): ?>
                                                                    <span class="new-price"><?php echo e($item['discount']); ?></span>
                                                                    <span class="old-price"><?php echo e($item['price']); ?></span>
                                                                <?php elseif($item['type_price'] == 2): ?>
                                                                    <span class="new-price">Liên lạc : <?php echo e(CONTACT_PHONE); ?></span>
                                                                <?php else: ?>
                                                                    <span class="new-price">Hết hàng</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <h3><a href="/pd/<?php echo e($item['id']); ?>/<?php echo e($item['seo_link']); ?>"><?php echo e($item['title']); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <?php if($item['is_new']): ?> <span class="black hidden-sm">new</span> <?php endif; ?>
                                                    <?php if($item['is_best_sell']): ?> <span class="red hidden-sm" <?php if($item['is_new']): ?> style="margin-left: 70px" <?php endif; ?>>hot</span> <?php endif; ?>
                                                </div>
                                                <?php if($key2+1 < $nums): ?>
                                                    <?php  $item = $list[++$key2];  ?>
                                                    <?php if(!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list'])): ?>
                                                        <div class="single-product">
                                                            <div class="single-product-item clearfix">
                                                                <div class="single-product-img clearfix">
                                                                    <a href="#"><img class="primary-image" src="<?php echo e(URL_IMG."product/".$item['pimg_list']); ?>" alt=""></a>
                                                                    <div class="wish-icon-hover text-center clearfix">
                                                                        <div class="hover-text">
                                                                            <p class="hidden-md"><?php echo e($item['short_desc']); ?></p>
                                                                            <ul>
                                                                                <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                                <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="single-product-info clearfix">
                                                                    <div class="pro-price">
                                                                        <?php if($item['type_price'] == 1): ?>
                                                                            <span class="new-price"><?php echo e($item['discount']); ?></span>
                                                                            <span class="old-price"><?php echo e($item['price']); ?></span>
                                                                        <?php elseif($item['type_price'] == 2): ?>
                                                                            <span class="new-price">Liên lạc : <?php echo e(CONTACT_PHONE); ?></span>
                                                                        <?php else: ?>
                                                                            <span class="new-price">Hết hàng</span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <h3><a href="/pd/<?php echo e($item['id']); ?>/<?php echo e($item['seo_link']); ?>"><?php echo e($item['title']); ?></a></h3>
                                                                </div>
                                                            </div>
                                                            <?php if($item['is_new']): ?> <span class="black hidden-sm">new</span> <?php endif; ?>
                                                            <?php if($item['is_best_sell']): ?> <span class="red hidden-sm" <?php if($item['is_new']): ?> style="margin-left: 70px" <?php endif; ?>>hot</span> <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrival-button text-left">
                    <a href='/p' class='section-button mt-30'>Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- featured end -->
<!-- blog area start -->
<div class="blog-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="/public/user/#blog" aria-controls="blog" role="tab" data-toggle="tab">from blog</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#tweet" aria-controls="tweet" role="tab" data-toggle="tab">latest tweet</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#instagram" aria-controls="instagram" role="tab" data-toggle="tab">instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="clearfix"></div>
            <div class="tab-content row">
                <div id="blog" role="tabpanel" class="active section-tab-item">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/1.jpg" alt="blog">
                                    </a>
                                <div class="blog-date text-center">
                                    <h2>05 <span>Feb</span></h2>
                                </div>
                            </div>
                            <div class="single-blog-info mt-25">
                                <h4><a href="/public/user/blog.html">Beautiful Collection For Beauty</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bornad will give you a complete pain was praising</p>
                                <div class="button-comments">
                                    <div class="read-button text-center">
                                        <a class="read-more text-uppercase" href="/public/user/blog.html">read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="comment-like">
                                        <ul>
                                            <li><i class="fa fa-comments"></i>06 comments</li>
                                            <li><i class="fa fa-heart"></i>25 likes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/2.jpg" alt="blog">
                                    </a>
                                <div class="blog-date text-center">
                                    <h2>09 <span>Feb</span></h2>
                                </div>
                            </div>
                            <div class="single-blog-info mt-25">
                                <h4><a href="/public/user/blog.html">Fashion Show With New Trend</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bornad will give you a complete pain was praising</p>
                                <div class="button-comments">
                                    <div class="read-button text-center">
                                        <a class="read-more text-uppercase" href="/public/user/blog.html">read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="comment-like">
                                        <ul>
                                            <li><i class="fa fa-comments"></i>10 comments</li>
                                            <li><i class="fa fa-heart"></i>20 likes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-blog-list">
                            <div class="blog-date mr-25 text-center">
                                <h2>12 <span>Feb</span></h2>
                            </div>
                            <div class="blog-list-info single-blog-info mb-25">
                                <h4><a href="/public/user/blog.html">Men’s New Trend</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                            </div>
                        </div>
                        <div class="single-blog-list">
                            <div class="blog-date mr-25 text-center">
                                <h2>15 <span>Feb</span></h2>
                            </div>
                            <div class="blog-list-info single-blog-info mb-25">
                                <h4><a href="/public/user/blog.html">Fashion Show</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                            </div>
                        </div>
                        <div class="single-blog-list">
                            <div class="blog-date mr-25 text-center">
                                <h2>20 <span>Feb</span></h2>
                            </div>
                            <div class="blog-list-info single-blog-info mb-25">
                                <h4><a href="/public/user/blog.html">Dress for Curte Gril</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                            </div>
                        </div>
                        <div class="single-blog-list hidden-md">
                            <div class="blog-date mr-25 text-center">
                                <h2>09 <span>Feb</span></h2>
                            </div>
                            <div class="blog-list-info single-blog-info mb-25">
                                <h4><a href="/public/user/blog.html">Latest Handbag Collection</a></h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tweet" role="tabpanel" class="section-tab-item">
                    <div class="col-md-4">
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter mb-10">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                        <div class="single-twitter">
                            <div class="twitter-icon">
                                <img src="/public/user/img/icon/twitter.png" alt="">
                            </div>
                            <div class="twitter-feed">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur maiores rem dolores. <a>-jan 18, 2016</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="instagram" role="tabpanel" class="section-tab-item">
                    <div class="row mb-25">
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/1.jpg" alt="blog">
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/2.jpg" alt="blog">
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/1.jpg" alt="blog">
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/2.jpg" alt="blog">
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/blog/1.jpg" alt="blog">
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-instagram">
                                <a href="/public/user/#">
                                    <img src="/public/user/img/blog/2.jpg" alt="blog">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->
<!-- testimonial area start -->
<div class="testimonial-area pt-100 pb-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                <div class="testimonial-left text-right">
                    <h2>CUSTOMER REVIEWS</h2>
                    <p class="hidden-sm">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bornad</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-9 col-xs-12">
                <div class="testi-owl">
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
<!-- client area start -->
<?php if(!empty($listBrand)): ?>
    <div class="client-area ptb-90">
        <div class="container">
            <div class="row">
                <div class="client-owl">
                    <?php foreach($listBrand as $key => $value): ?>
                        <?php if(!empty($value->bimg_detail) && file_exists(BASE_IMG."brand/".$value->bimg_detail)): ?>
                            <div class="col-xs-12">
                                <div class="single-client">
                                    <div class="single-client-img plr-40">
                                        <a href="/bd/<?php echo e($value->id); ?>/<?php echo e($value->seo_link); ?>">
                                            <img src="<?php echo e(URL_IMG."brand/".$value->bimg_detail); ?>" alt="<?php echo e($value->title); ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client-button text-center pt-35">
                        <a href='/b/' class='section-button'>Thương hiệu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- client area end -->
<!-- service area end -->
<div class="service-area mb-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div class="single-service-content ptb-40">
                        <div class="single-service-icon-wrapper">
                            <div class="single-service-icon">
                                <img src="/public/user/img/icon/5.png" alt="">
                            </div>
                        </div>
                        <div class="single-service-info">
                            <h4 class="text-uppercase">free shipping</h4>
                            <p>Free for all product</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div class="single-service-content ptb-40">
                        <div class="single-service-icon-wrapper">
                            <div class="single-service-icon">
                                <img src="/public/user/img/icon/7.png" alt="">
                            </div>
                        </div>
                        <div class="single-service-info">
                            <h4 class="text-uppercase">order online</h4>
                            <p>www.shofixe.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service text-center">
                    <div class="single-service-content ptb-40">
                        <div class="single-service-icon-wrapper">
                            <div class="single-service-icon">
                                <img src="/public/user/img/icon/9.png" alt="">
                            </div>
                        </div>
                        <div class="single-service-info">
                            <h4 class="text-uppercase">money back</h4>
                            <p>money back guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm col-xs-12">
                <div class="single-service text-center">
                    <div class="single-service-content ptb-40">
                        <div class="single-service-icon-wrapper">
                            <div class="single-service-icon">
                                <img src="/public/user/img/icon/10.png" alt="">
                            </div>
                        </div>
                        <div class="single-service-info">
                            <h4 class="text-uppercase">gift coupon</h4>
                            <p>surprise gift coupon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service area end -->
<!-- touch area end -->
<div class="touch-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="touch-left">
                    <div class="touch-logo mb-35">
                        <img src="/public/user/img/logo/2.png" alt="">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut ore dolore magna aliqua. Ut enim ad minim eniam</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut</p>
                    <div class="social-icon">
                        <ul>
                            <li><a href="/public/user/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="/public/user/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="/public/user/#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="/public/user/#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="/public/user/#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="touch-right">
                    <h2 class="text-uppercase">get in touch</h2>
                    <form id="contact-form" action="mail.php" method="post">
                        <input type="text" placeholder="Your name here..." name="name">
                        <input type="text" placeholder="Your email here..." name="email">
                        <textarea class="mtb-25" cols="30" rows="10" placeholder="Write message here..." name="message"></textarea>
                        <button class="section-button" type="submit">send</button>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- touch area end -->

 <!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img alt="" src="/public/user/img/product/static2.jpg">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="/public/user/img/product/static2.jpg">
                            </div>
                        </div>
                        <!-- .product-images -->
                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span>
                                </p>
                            </div>
                            <a href="/public/user/shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="/public/user/#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="/public/user/#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="/public/user/#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="/public/user/#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="/public/user/#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .modal-product -->
                </div>
                <!-- .modal-body -->
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
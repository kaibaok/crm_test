<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('middlecontent'); ?>

<!-- slider bottom start -->
<div class="slider-bottom-area mt-10 text-left">
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
<div class="men-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="/public/user/#coats" aria-controls="coats" role="tab" data-toggle="tab">coats</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#shirts" aria-controls="shirts" role="tab" data-toggle="tab">shirts</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#accessories" aria-controls="accessories" role="tab" data-toggle="tab">accessories</a></li>
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
                    <div id="coats" role="tabpanel" class="active section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="shirts" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accessories" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/17.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/15.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/16.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='#' class='section-button'>View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
<!-- newsletter area start -->
<div class="newsletter-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="newsletter-info">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <div class="news-left text-right">
                        <a href="/public/user/#" class="section-button">sign up for free</a>
                        <h3 class="text-uppercase">subscribe newsletter</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="news-right text-center">
                        <form action="#" id="mc-form" class="mc-form">
                            <input id="mc-email" type="text" name="email" placeholder="Type Your Email Address...">
                            <button id="mc-submit" type="submit" class="text-uppercase">send</button>
                            <span class="hidden-xs"><input type="checkbox" name="agree">By Subscribing to our newsletter you are agree to receive emails from us !</span>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre fix">
                            <div class="mailchimp-submitting"></div>
                            <!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div>
                            <!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div>
                            <!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter area end -->
<!-- women area start -->
<div class="women-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="/public/user/#dress" aria-controls="dress" role="tab" data-toggle="tab">dress</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#tops" aria-controls="tops" role="tab" data-toggle="tab">tops</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#handbags" aria-controls="handbags" role="tab" data-toggle="tab">handbags</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    <div id="dress" role="tabpanel" class="active section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/12.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/12.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tops" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/12.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/12.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="handbags" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/12.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Tletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Eletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/13.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="/public/user/#">Mortria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                        <img class="primary-image" src="/public/user/img/product/14.jpg" alt="">
                                                    </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='#' class='section-button'>View More</a>
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
<div class="featured-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="/public/user/#featured1" aria-controls="featured1" role="tab" data-toggle="tab">Featured</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#trendy" aria-controls="trendy" role="tab" data-toggle="tab">Trendy</a></li>
                            <li role="presentation" class="text-uppercase"><a href="/public/user/#best1" aria-controls="best1" role="tab" data-toggle="tab">Best Selling</a></li>
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
                    <div id="featured1" role="tabpanel" class="active section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/7.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/10.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/7.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/10.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="trendy" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="best1" role="tabpanel" class="section-tab-item">
                        <div class="feature-slider">
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/7.jpg" alt="">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/6.jpg" alt="">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$150</span>
                                            </div>
                                            <h3><a href="/public/user/#">Celletria ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/11.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                    <span class="red hidden-sm">hot</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/10.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/8.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="green hidden-sm">sale</span>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/9.jpg" alt="product">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-title">
                                                <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="black hidden-sm">new</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/7.jpg" alt="">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="single-product-item">
                                        <div class="single-product-img clearfix hover-effect">
                                            <a href="/public/user/#">
                                                    <img class="primary-image" src="/public/user/img/product/10.jpg" alt="">
                                                </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p class="hidden-md">Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
                                                    <ul>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="/public/user/#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li class="hidden-md"><a href="/public/user/#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="/public/user/#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>
                                            <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrival-button text-left">
                    <a href='#' class='section-button mt-30'>View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="client-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="client-owl">
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="/public/user/#"><img src="/public/user/img/client/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="client-button text-center pt-35">
                    <a href='#' class='section-button'>View More</a>
                </div>
            </div>
        </div>
    </div>
</div>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
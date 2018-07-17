<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area details ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">products</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize"><a href="shop.html">shop</a> ></li>
                            <li class="text-capitalize">details</li>
                        </ul>
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
                            <img id="zoom1" src="/public/user/img/shop/big1.jpg" data-zoom-image="/public/user/img/shop/big1.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="product-thumb">
                        <ul class="p-details-slider" id="gallery_01">
                            <li>
                                <a class="elevatezoom-gallery" href="#" data-image="/public/user/img/shop/big1.jpg" data-zoom-image="/public/user/img/shop/big1.jpg"><img src="/public/user/img/shop/big1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="elevatezoom-gallery" href="#" data-image="/public/user/img/shop/big2.jpg" data-zoom-image="/public/user/img/shop/big2.jpg"><img src="/public/user/img/shop/big2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a class="elevatezoom-gallery" href="#" data-image="/public/user/img/shop/big3.jpg" data-zoom-image="/public/user/img/shop/big3.jpg"><img src="/public/user/img/shop/big3.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="product-detail">
                    <div class="product-title">
                        <h2><?php echo e($product->title); ?></h2><br>
                        <h4> <?php if($product->type_price == CONTACT_PHONE): ?>
                                <?php echo e(CONTACT_PHONE); ?>

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

                    <p class="detail"><?php echo e($product->short_desc); ?></p>
                    <div class="size-quantity clearfix">
                        <div class="single-size-quantity">
                            <h4>Size:</h4>
                            <div class="search-cat">
                                <select name="category" class="category-items ">
                                    <option>Select Size</option>
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-size-quantity">
                            <h4>Quantity:</h4>
                            <div class="search-cat">
                                <select name="category" class="category-items ">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="wish-icon-hover-list mt-30 mb-30 text-left">
                        <ul>
                            <li><a href="#" data-toggle="tooltip" title="shopping cart"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="refresh"><i class="fa fa-refresh"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget-color">
                       <h4 class="follow">Share:</h4>
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
                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">information</a></li>
                            <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
                      </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla patur. Excepteur sint occaecat cupidatat non proident reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="specification">
                            <p>Veniam quasi voluptatem facere nesciunt laborum, quibusdam amet totam fugit, blanditiis doloribus alias eveniet dolore pariatur dolores aliquid!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex consectetur minima quod officiis magni, aspernatur. Ea consectetur ab in, consequatur alias, quo sit. Optio vitae cupiditate, consectetur veritatis cumque odio magnam voluptates voluptas eligendi, minima tenetur voluptatum dolor autem, doloribus expedita obcaecati.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="review">
                            <p>Similique animi consequatur pariatur voluptas tempore, dolores obcaecati dolorum quia odit harum. Quos nemo, minima totam quidem ipsum labore.</p>
                            <ul>
                                <li> <i class="fa fa-circle"></i> Minus placeat eligendi neque doloribus sed ratione repellendus a illo similique, sint quisquam perferendis eum nam nihil dolor fugit blanditiis, explicabo, recusandae hic qui exercitationem aspernatur excepturi voluptate unde. </li>
                                <li> <i class="fa fa-circle"></i> Quaerat magnam, perferendis, sapiente doloremque error omnis esse in saepe quos eveniet quasi ex fugit eligendi consectetur nobis amet. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Product Details area  -->
<!-- arrival start-->
<div class="arrival-area related clearfix mt-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu text-center mb-45">
                        <ul role="tablist">
                            <li class="text-uppercase active"><a href="#"> Related Product</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-item-slider">
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item clearfix">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/1.jpg" alt="product">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Electria Ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/2.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Tletria postma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix hover-effect">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/3.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Celletria ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/4.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Eletria ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/5.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Mortria ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/1.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Celletria ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/2.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Eletria ostma</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-width">
                            <div class="single-product">
                                <div class="single-product-item">
                                    <div class="single-product-img clearfix">
                                        <a href="#">
                                            <img class="primary-image" src="/public/user/img/product/3.jpg" alt="">
                                        </a>
                                        <div class="wish-icon-hover text-center clearfix">
                                            <div class="hover-text">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
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
                                        <h3><a href="#">Mortria ostma</a></h3>
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
<!-- arrival end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
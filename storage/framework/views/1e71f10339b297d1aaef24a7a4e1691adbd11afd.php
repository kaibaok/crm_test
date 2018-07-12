<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('middlecontent'); ?>
<div class="shop-area-start leftsidebar mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="shop-left-sidebar">
                   <?php echo $__env->make("user.leftnavi", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="shop-item-filter">
                        <div class="col-lg-3 col-md-2 col-sm-5 col-xs-5">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                            <div class="filter-by">
                                <h4>Short by: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                            <option value="color">Position</option>
                                            <option value="name">Name</option>
                                            <option value="brand">Brand</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="filter-by">
                                <h4>Show: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                            <option value="10">12</option>
                                            <option value="20">16</option>
                                            <option value="30">20</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">
                            <div class="page-menu float-right">
                                <ul>
                                    <li class="li-page">Page: </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-md hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content mt-25">
                    <div id="grid" class="tab-pane active" role="tabpanel">
                        <div class="row">
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/1.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="black hidden-sm">new</span>
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/2.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="red hidden-sm">sale</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/3.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/4.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/5.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/24.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                                <span class="new-price">$135</span>
                                                <span class="old-price">$145</span>
                                            </div>
                                            <h3><a href="#">Peletria ostma</a></h3>
                                        </div>
                                    </div>
                                    <div class="new-sale m-10">
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/25.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="#">Niletria postma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/26.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                                <span class="old-price">$120</span>
                                            </div>
                                            <div class="new-sale">
                                                <span class="red hidden-sm">sale</span>
                                            </div>
                                            <h3><a href="#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/27.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/28.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                            <div class="new-sale">
                                                <span class="black hidden-sm">new</span>
                                                <span class="red hidden-sm">sale</span>
                                            </div>
                                            <h3><a href="#">Electria Ostma</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/29.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="black hidden-sm">new</span>
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/30.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="red hidden-sm">sale</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/31.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/32.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/33.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                            <div class="col-xs-12 col-width hidden-md hidden-sm">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                                <img class="primary-image" src="/public/user/img/product/34.jpg" alt="">
                                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat </p>
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
                                                <span class="new-price">$135</span>
                                                <span class="old-price">$145</span>
                                            </div>
                                            <h3><a href="#">Peletria ostma</a></h3>
                                        </div>
                                    </div>
                                    <div class="new-sale m-10">
                                        <span class="red hidden-sm">hot</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                                            <img class="primary-image" src="/public/user/img/product/1.jpg" alt="">
                                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                        <span class="red">sale</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-30 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$150</span>
                                                            <span class="old-price">$180</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip reprehenderit. </p>
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                                            <img class="primary-image" src="/public/user/img/product/2.jpg" alt="">
                                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip reprehenderit. </p>
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                                            <img class="primary-image" src="/public/user/img/product/3.jpg" alt="">
                                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$160</span>
                                                            <span class="old-price">$190</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip reprehenderit. </p>
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                                            <img class="primary-image" src="/public/user/img/product/4.jpg" alt="">
                                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$120</span>
                                                            <span class="old-price">$140</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip reprehenderit. </p>
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                                            <img class="primary-image" src="/public/user/img/product/5.jpg" alt="">
                                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                        <span class="red">sale</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-30 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$150</span>
                                                            <span class="old-price">$180</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip reprehenderit. </p>
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="shop-item-filter margin-none">
                        <div class="col-lg-3 col-md-2 col-sm-5 col-xs-5">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                            <div class="filter-by">
                                <h4>Short by: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                            <option value="color">Position</option>
                                            <option value="name">Name</option>
                                            <option value="brand">Brand</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="filter-by">
                                <h4>Show: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                            <option value="10">12</option>
                                            <option value="20">16</option>
                                            <option value="30">20</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">
                            <div class="page-menu float-right">
                                <ul>
                                    <li class="li-page">page: </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-md hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop end -->
<div class="client-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="client-owl">
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="single-client">
                        <div class="single-client-img plr-40">
                            <a href="#"><img src="img/client/5.png" alt=""></a>
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
                                <img src="img/icon/5.png" alt="">
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
                                <img src="img/icon/7.png" alt="">
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
                                <img src="img/icon/9.png" alt="">
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
                                <img src="img/icon/10.png" alt="">
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
                        <img src="img/logo/2.png" alt="">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut ore dolore magna aliqua. Ut enim ad minim eniam</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt ut</p>
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
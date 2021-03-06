<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent("description"); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent("keywords"); ?>">
    <meta name="author" content="Dot 89 Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/user/img/favicon.ico">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/bootstrap.min.css">
    <!-- Nivo slider CSS
        ============================================ -->
    <link rel="stylesheet" type="text/css" href="/public/user/lib/custom-slider/css/nivo-slider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/public/user/lib/custom-slider/css/preview.css" media="screen" />
    <!-- Fontawsome CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/font-awesome.min.css">
    <!-- material iconic CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="/public/user/css/material-design-iconic-font.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/owl.carousel.css">
    <!-- jquery-ui CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/jquery-ui.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/animate.css">
    <!-- Animate headline CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/animate-heading.css">
    <link rel="stylesheet" href="/public/user/css/reset.css">
    <!-- Video CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/jquery.mb.YTPlayer.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/user/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="/public/user/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Pre Loader
        ============================================ -->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <div class="as-mainwrapper">
        <div class="bg-white">
            <!-- header start -->
            <header class="header-area">
                <div class="header-top-area ptb-10 hidden-sm hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="account-usd text-left">
                                    <ul>
                                        <li><a href="/public/user/account.html">My Account <i class="fa fa-angle-down"></i></a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="/public/user/#"><i class="fa fa-circle"></i>Login</a></li>
                                                <li><a href="/public/user/account.html"><i class="fa fa-circle"></i>My Account</a></li>
                                                <li><a href="/public/user/wishlist.html"><i class="fa fa-circle"></i>My Wishlist</a></li>
                                                <li><a href="/public/user/cart.html"><i class="fa fa-circle"></i>My Cart</a></li>
                                                <li><a href="/public/user/checkout.html"><i class="fa fa-circle"></i>Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="currency"><a href="/public/user/#">USD <i class="fa fa-angle-down"></i></a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="/public/user/#"><i class="fa fa-dollar"></i>USD</a></li>
                                                <li><a href="/public/user/#"><i class="fa fa-euro"></i>EURO</a></li>
                                                <li><a href="/public/user/#"><i class="fa fa-gbp"></i>GBP</a></li>
                                            </ul>
                                        </li>
                                        <li class="language"><a href="/public/user/#"><img src="/public/user/img/icon/eng.png" alt="">English <i class="fa fa-angle-down"></i></a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="/public/user/#"><img src="/public/user/img/icon/eng.jpg" alt="">English</a></li>
                                                <li><a href="/public/user/#"><img src="/public/user/img/icon/ger.jpg" alt="">German</a></li>
                                                <li><a href="/public/user/#"><img src="/public/user/img/icon/fren.jpg" alt="">French</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="top-right">
                                    <div class="top-login-cart">
                                        <ul>
                                            <li class=" hidden-xs"><a href="/public/user/account.html">Login or Register</a></li>
                                            <li class=" hidden-xs"><a href="/public/user/checkout.html">Checkout</a></li>
                                            <li><a href="/public/user/cart.html"><img src="/public/user/img/icon/cart_red.png" alt="cart">Cart (3)</a>
                                                <ul class="submenu-mainmenu">
                                                    <li class="single-cart-item clearfix">
                                                        <span class="cart-img">
                                                                <a href="/public/user/#"><img src="/public/user/img/cart/1.jpg" alt=""></a>
                                                            </span>
                                                        <span class="cart-info">
                                                                <a href="/public/user/#">Eletria ostma</a>
                                                                <span>$150 x 2</span>
                                                        </span>
                                                        <span class="trash-cart">
                                                                <a href="/public/user/#"><i class="fa fa-trash-o"></i></a>
                                                            </span>
                                                    </li>
                                                    <li class="single-cart-item clearfix">
                                                        <span class="cart-img">
                                                                <a href="/public/user/#"><img src="/public/user/img/cart/2.jpg" alt=""></a>
                                                            </span>
                                                        <span class="cart-info">
                                                                <a href="/public/user/#">Celletria ostma</a>
                                                                <span>$120 x 1</span>
                                                        </span>
                                                        <span class="trash-cart">
                                                                <a href="/public/user/#"><i class="fa fa-trash-o"></i></a>
                                                            </span>
                                                    </li>
                                                    <li class="single-cart-item clearfix">
                                                        <span class="cart-img">
                                                                <a href="/public/user/#"><img src="/public/user/img/cart/3.jpg" alt=""></a>
                                                            </span>
                                                        <span class="cart-info">
                                                                <a href="/public/user/#">Pelletria ostma</a>
                                                                <span>$100 x 2</span>
                                                        </span>
                                                        <span class="trash-cart">
                                                                <a href="/public/user/#"><i class="fa fa-trash-o"></i></a>
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <span class="sub-total-cart text-center">
                                                                Sub Total <span>$620</span>
                                                        <a href="/public/user/cart.html" class="view-cart active">View Cart</a>
                                                        <a href="/public/user/checkout.html" class="view-cart">Checkout</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-info-area ptb-35">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="header-logo">
                                    <a href="/public/user/index.html"><img src="/public/user/img/logo/1.png" alt="shofixe"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="search-box">
                                    <img src="/public/user/img/icon/search.png" alt="">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainmenu-area text-center hidden-sm hidden-xs">
                    <nav>
                        <div class="mainmenu">
                            <ul>
                                <li><a href="/public/user/index.html">Home</a>
                                    <div class="mega-menu two">
                                        <span>
                                                <a class="title" href="/public/user/#">Home Versions</a>
                                                <a href="/public/user/index.html"><i class="fa fa-circle"></i>Slider One</a>
                                                <a href="/public/user/index-2.html"><i class="fa fa-circle"></i>Slider Two</a>
                                                <a href="/public/user/index-3.html"><i class="fa fa-circle"></i>Fixed Image</a>
                                                <a href="/public/user/index-4.html"><i class="fa fa-circle"></i>Animated Text</a>
                                                <a href="/public/user/index-15.html"><i class="fa fa-circle"></i>Video Background 1</a>
                                                <a href="/public/user/index-16.html"><i class="fa fa-circle"></i>Video Background 2</a>
                                                <a href="/public/user/index-17.html"><i class="fa fa-circle"></i>Parallax 1</a>
                                                <a href="/public/user/index-18.html"><i class="fa fa-circle"></i>Parallax 2</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/#">Home Versions</a>
                                                <a href="/public/user/index-19.html"><i class="fa fa-circle"></i>Box Layout 1</a>
                                                <a href="/public/user/index-20.html"><i class="fa fa-circle"></i>Box Layout 2</a>
                                                <a href="/public/user/index-21.html"><i class="fa fa-circle"></i>Box Layout 3</a>
                                                <a href="/public/user/index-22.html"><i class="fa fa-circle"></i>Box Layout 4</a>
                                                <a href="/public/user/index-5.html"><i class="fa fa-circle"></i>Rotate Text 1</a>
                                                <a href="/public/user/index-6.html"><i class="fa fa-circle"></i>Rotate Text 2</a>
                                                <a href="/public/user/index-7.html"><i class="fa fa-circle"></i>Rotate Text 3</a>
                                                <a href="/public/user/index-8.html"><i class="fa fa-circle"></i>Rotate Text 4</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/#">Home Versions</a>
                                                <a href="/public/user/index-9.html"><i class="fa fa-circle"></i>Rotate Text 5</a>
                                                <a href="/public/user/index-10.html"><i class="fa fa-circle"></i>Rotate Text 6</a>
                                                <a href="/public/user/index-11.html"><i class="fa fa-circle"></i>Rotate Text 7</a>
                                                <a href="/public/user/index-12.html"><i class="fa fa-circle"></i>Rotate Text 8</a>
                                                <a href="/public/user/index-13.html"><i class="fa fa-circle"></i>Rotate Text 9</a>
                                                <a href="/public/user/index-14.html"><i class="fa fa-circle"></i>Rotate Text 10</a>
                                                <a href="/public/user/index-23.html"><i class="fa fa-circle"></i>Rotate Text 11</a>
                                                <a href="/public/user/index-24.html"><i class="fa fa-circle"></i>Rotate Text 12</a>
                                            </span>
                                    </div>
                                </li>
                                <li><a href="/public/user/index.html">Features</a>
                                    <ul class="submenu-mainmenu">
                                        <li><a href="/public/user/parallax-one.html"><i class="fa fa-circle"></i>Sliders<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-submenu-mainmenu">
                                                <li><a href="/public/user/slider-one.html"><i class="fa fa-circle"></i>Slider One</a></li>
                                                <li><a href="/public/user/slider-two.html"><i class="fa fa-circle"></i>Slider Two</a></li>
                                                <li><a href="/public/user/video-one.html"><i class="fa fa-circle"></i>Video One</a></li>
                                                <li><a href="/public/user/video-two.html"><i class="fa fa-circle"></i>Video Two</a></li>
                                                <li><a href="/public/user/parallax-one.html"><i class="fa fa-circle"></i>Parallax One</a></li>
                                                <li><a href="/public/user/parallax-two.html"><i class="fa fa-circle"></i>Parallax Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/public/user/menu-default.html"><i class="fa fa-circle"></i>Menu Style<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-submenu-mainmenu">
                                                <li><a href="/public/user/menu-default.html"><i class="fa fa-circle"></i>Menu Style One</a></li>
                                                <li><a href="/public/user/menu-style-two.html"><i class="fa fa-circle"></i>Menu Style Two</a></li>
                                                <li><a href="/public/user/menu-style-three.html"><i class="fa fa-circle"></i>Menu Style Three</a></li>
                                                <li><a href="/public/user/menu-style-four.html"><i class="fa fa-circle"></i>Menu Style Four</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/public/user/title-one.html"><i class="fa fa-circle"></i>Page Title<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-submenu-mainmenu">
                                                <li><a href="/public/user/title-one.html"><i class="fa fa-circle"></i>Title Style One</a></li>
                                                <li><a href="/public/user/title-two.html"><i class="fa fa-circle"></i>Title Style Two</a></li>
                                                <li><a href="/public/user/title-three.html"><i class="fa fa-circle"></i>Title Style Three</a></li>
                                                <li><a href="/public/user/title-four.html"><i class="fa fa-circle"></i>Title Style Four</a></li>
                                                <li><a href="/public/user/title-five.html"><i class="fa fa-circle"></i>Title Style Five</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/public/user/index-4.html"><i class="fa fa-circle"></i>Footer<i class="fa fa-angle-right right"></i></a>
                                            <ul class="sub-submenu-mainmenu">
                                                <li><a href="/public/user/footer-one.html"><i class="fa fa-circle"></i>Footer Style One</a></li>
                                                <li><a href="/public/user/footer-two.html"><i class="fa fa-circle"></i>Footer Style Two</a></li>
                                                <li><a href="/public/user/footer-three.html"><i class="fa fa-circle"></i>Footer Style Three</a></li>
                                                <li><a href="/public/user/footer-four.html"><i class="fa fa-circle"></i>Footer Style Four</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="shop"><a href="/public/user/shop-grid-right-sidebar.html">Shop</a>
                                    <ul class="submenu-mainmenu">
                                        <li><a href="/public/user/shop.html"><i class="fa fa-circle"></i>Shop</a></li>
                                        <li><a href="/public/user/shop-grid-left-sidebar.html"><i class="fa fa-circle"></i>Shop Grid Left Sidebar</a></li>
                                        <li><a href="/public/user/shop-grid-right-sidebar.html"><i class="fa fa-circle"></i>Shop Grid Right Sidebar</a></li>
                                        <li><a href="/public/user/shop-list-left-sidebar.html"><i class="fa fa-circle"></i>Shop List Left Sidebar</a></li>
                                        <li><a href="/public/user/shop-list-right-sidebar.html"><i class="fa fa-circle"></i>Shop List Right Sidebar</a></li>
                                        <li><a href="/public/user/product-details.html"><i class="fa fa-circle"></i>Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="/public/user/#">Men</a></li>
                                <li><a href="/public/user/#">Women<span><img src="/public/user/img/icon/hot.png" alt=""></span></a>
                                    <div class="mega-menu">
                                        <span>
                                                <a href="/public/user/shop-left-sidebar.html" class="title">Category</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Men's Colletion</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Women's Colletion</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Kid's Colletion</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Bag's Colletion</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Shoes Colletion</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Accessories</a>
                                            </span>
                                        <span>
                                                <a href="/public/user/shop-left-sidebar.html" class="title">Brands</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Zara</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Walmart</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Arong</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Rong</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Velloci</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Dolce &amp; Gabbana</a>
                                            </span>
                                        <span>
                                                <a href="/public/user/shop-left-sidebar.html" class="title">Materials</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Cotton</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Cotton Blends</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Lilen</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Polister</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Polister Blends</a>
                                                <a href="/public/user/#"><i class="fa fa-circle"></i>Jeans</a>
                                            </span>
                                    </div>
                                </li>
                                <li class="shortcode"><a href="/public/user/#">Shortcode</a>
                                    <div class="mega-menu">
                                        <span>
                                                <a class="title" href="/public/user/shop-grid-left-sidebar.html">Shortcode</a>
                                                <a href="/public/user/shortcode-alert.html"><i class="fa fa-circle"></i>alert</a>
                                                <a href="/public/user/shortcode-breadcrumb.html"><i class="fa fa-circle"></i>breadcrumb</a>
                                                <a href="/public/user/shortcode-button.html"><i class="fa fa-circle"></i>button</a>
                                                <a href="/public/user/shortcode-blog.html"><i class="fa fa-circle"></i>blog</a>
                                                <a href="/public/user/shortcode-client.html"><i class="fa fa-circle"></i>client</a>
                                                <a href="/public/user/shortcode-contact.html"><i class="fa fa-circle"></i>contact</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/shop-grid-left-sidebar.html">Shortcode</a>
                                                <a href="/public/user/shortcode-dropdown.html"><i class="fa fa-circle"></i>dropdown</a>
                                                <a href="/public/user/shortcode-newsletter.html"><i class="fa fa-circle"></i>newsletter</a>
                                                <a href="/public/user/shortcode-product.html"><i class="fa fa-circle"></i>product</a>
                                                <a href="/public/user/shortcode-map.html"><i class="fa fa-circle"></i>map</a>
                                                <a href="/public/user/shortcode-offer.html"><i class="fa fa-circle"></i>offer</a>
                                                <a href="/public/user/shortcode-pagination.html"><i class="fa fa-circle"></i>pagination</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/shop-grid-left-sidebar.html">Shortcode</a>
                                                <a href="/public/user/shortcode-progressbar.html"><i class="fa fa-circle"></i>progressbar</a>
                                                <a href="/public/user/shortcode-services.html"><i class="fa fa-circle"></i>services</a>
                                                <a href="/public/user/shortcode-testimonial.html"><i class="fa fa-circle"></i>testimonial</a>
                                                <a href="/public/user/shortcode-slider-bottom.html"><i class="fa fa-circle"></i>Slider Bottom</a>
                                                <a href="/public/user/shortcode-off-banner.html"><i class="fa fa-circle"></i>Off Banner</a>
                                                <a href="/public/user/shortcode-featured.html"><i class="fa fa-circle"></i>feature</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/shop-grid-left-sidebar.html">Shortcode</a>
                                                <a href="/public/user/slider-one.html"><i class="fa fa-circle"></i>Slider 1</a>
                                                <a href="/public/user/slider-two.html"><i class="fa fa-circle"></i>Slider 2</a>
                                                <a href="/public/user/video-one.html"><i class="fa fa-circle"></i>Bg Video 1</a>
                                                <a href="/public/user/video-two.html"><i class="fa fa-circle"></i>Bg Video 2</a>
                                                <a href="/public/user/parallax-one.html"><i class="fa fa-circle"></i>Parallax 1</a>
                                                <a href="/public/user/parallax-two.html"><i class="fa fa-circle"></i>Parallax 2</a>
                                            </span>
                                        <span>
                                                <a class="title" href="/public/user/shop-grid-left-sidebar.html">Shortcode</a>
                                                <a href="/public/user/rotate-text-one.html"><i class="fa fa-circle"></i>Rotate Text 1</a>
                                                <a href="/public/user/rotate-text-two.html"><i class="fa fa-circle"></i>Rotate Text 2</a>
                                                <a href="/public/user/rotate-text-three.html"><i class="fa fa-circle"></i>Rotate Text 3</a>
                                                <a href="/public/user/rotate-text-four.html"><i class="fa fa-circle"></i>Rotate Text 4</a>
                                                <a href="/public/user/rotate-text-five.html"><i class="fa fa-circle"></i>Rotate Text 5</a>
                                                <a href="/public/user/rotate-text-six.html"><i class="fa fa-circle"></i>Rotate Text 6</a>
                                            </span>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="/public/user/shop.html">Pages</a>
                                    <ul class="submenu-mainmenu">
                                        <li><a href="/public/user/cart.html"><i class="fa fa-circle"></i>Cart</a></li>
                                        <li><a href="/public/user/checkout.html"><i class="fa fa-circle"></i>Checkout</a></li>
                                        <li><a href="/public/user/contact.html"><i class="fa fa-circle"></i>Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="/public/user/contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Mobile Menu Area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="/public/user/index.html">HOME</a>
                                                <ul>
                                                    <li><a href="/public/user/index.html">Home Slider One</a></li>
                                                    <li><a href="/public/user/index-2.html">Home Slider Two</a></li>
                                                    <li><a href="/public/user/index-3.html">Home Fixed Image</a></li>
                                                    <li><a href="/public/user/index-4.html">Home Animated Text</a></li>
                                                    <li><a href="/public/user/index-15.html">Home Video Background One</a></li>
                                                    <li><a href="/public/user/index-16.html">Home Video Background Two</a></li>
                                                    <li><a href="/public/user/index-17.html">Home Parallax Background One</a></li>
                                                    <li><a href="/public/user/index-18.html">Home Parallax Background Two</a></li>
                                                    <li><a href="/public/user/index-5.html">Home Rotate Text One</a></li>
                                                    <li><a href="/public/user/index-6.html">Home Rotate Text Two</a></li>
                                                    <li><a href="/public/user/index-7.html">Home Rotate Text Three</a></li>
                                                    <li><a href="/public/user/index-8.html">Home Rotate Text Four</a></li>
                                                    <li><a href="/public/user/index-9.html">Home Rotate Text Five</a></li>
                                                    <li><a href="/public/user/index-10.html">Home Rotate Text Six</a></li>
                                                    <li><a href="/public/user/index-11.html">Home Rotate Text Seven</a></li>
                                                    <li><a href="/public/user/index-12.html">Home Rotate Text Eight</a></li>
                                                    <li><a href="/public/user/index-13.html">Home Rotate Text Nine</a></li>
                                                    <li><a href="/public/user/index-14.html">Home Rotate Text Ten</a></li>
                                                    <li><a href="/public/user/index-23.html">Rotate Text 11</a></li>
                                                    <li><a href="/public/user/index-24.html">Rotate Text 12</a></li>
                                                    <li><a href="/public/user/index-19.html">Box Layout 1</a></li>
                                                    <li><a href="/public/user/index-20.html">Box Layout 2</a></li>
                                                    <li><a href="/public/user/index-21.html">Box Layout 3</a></li>
                                                    <li><a href="/public/user/index-22.html">Box Layout 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/public/user/slider-one.html">Features</a>
                                                <ul>
                                                    <li><a href="/public/user/slider-one.html">Slider One</a></li>
                                                    <li><a href="/public/user/slider-two.html">Slider Two</a></li>
                                                    <li><a href="/public/user/video-one.html">Video One</a></li>
                                                    <li><a href="/public/user/video-two.html">Video Two</a></li>
                                                    <li><a href="/public/user/parallax-one.html">Parallax One</a></li>
                                                    <li><a href="/public/user/parallax-two.html">Parallax Two</a></li>
                                                    <li><a href="/public/user/menu-default.html">Menu Style One</a></li>
                                                    <li><a href="/public/user/menu-style-two.html">Menu Style Two</a></li>
                                                    <li><a href="/public/user/menu-style-three.html">Menu Style Three</a></li>
                                                    <li><a href="/public/user/menu-style-four.html">Menu Style Four</a></li>
                                                    <li><a href="/public/user/title-one.html">Title Style One</a></li>
                                                    <li><a href="/public/user/title-two.html">Title Style Two</a></li>
                                                    <li><a href="/public/user/title-three.html">Title Style Three</a></li>
                                                    <li><a href="/public/user/title-four.html">Title Style Four</a></li>
                                                    <li><a href="/public/user/title-five.html">Title Style Five</a></li>
                                                    <li><a href="/public/user/footer-one.html">Footer Style One</a></li>
                                                    <li><a href="/public/user/footer-two.html">Footer Style Two</a></li>
                                                    <li><a href="/public/user/footer-three.html">Footer Style Three</a></li>
                                                    <li><a href="/public/user/footer-four.html">Footer Style Four</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/public/user/shop.html">Shop</a>
                                                <ul>
                                                    <li><a href="/public/user/shop.html">Shop</a></li>
                                                    <li><a href="/public/user/shop-grid-left-sidebar.html">Shop grid left sidebar</a></li>
                                                    <li><a href="/public/user/shop-grid-right-sidebar.html">Shop grid right sidebar</a></li>
                                                    <li><a href="/public/user/shop-list-left-sidebar.html">Shop list left sidebar</a></li>
                                                    <li><a href="/public/user/shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                    <li><a href="/public/user/product-details.html">Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/public/user/shortcode-blog.html">shortcode</a>
                                                <ul>
                                                    <li><a href="/public/user/shortcode-alert.html">Alert</a></li>
                                                    <li><a href="/public/user/shortcode-blog.html">Blog</a></li>
                                                    <li><a href="/public/user/shortcode-breadcrumb.html">Breadcrumb</a></li>
                                                    <li><a href="/public/user/shortcode-button.html">Button</a></li>
                                                    <li><a href="/public/user/shortcode-client.html">Client</a></li>
                                                    <li><a href="/public/user/shortcode-contact.html">Contact</a></li>
                                                    <li><a href="/public/user/shortcode-dropdown.html">dropdown</a></li>
                                                    <li><a href="/public/user/shortcode-newsletter.html">newsletter</a></li>
                                                    <li><a href="/public/user/shortcode-product.html">product</a></li>
                                                    <li><a href="/public/user/shortcode-map.html">map</a></li>
                                                    <li><a href="/public/user/shortcode-offer.html">offer</a></li>
                                                    <li><a href="/public/user/shortcode-pagination.html">pagination</a></li>
                                                    <li><a href="/public/user/shortcode-progressbar.html">progressbar</a></li>
                                                    <li><a href="/public/user/shortcode-service.html">service</a></li>
                                                    <li><a href="/public/user/shortcode-testimonial.html">testimonial</a></li>
                                                    <li><a href="/public/user/shortcode-slider-bottom.html">slider bottom</a></li>
                                                    <li><a href="/public/user/shortcode-off-banner.html">off banner</a></li>
                                                    <li><a href="/public/user/shortcode-featured.html">featured</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/public/user/cart.html">Pages</a>
                                                <ul>
                                                    <li><a href="/public/user/cart.html">Cart</a></li>
                                                    <li><a href="/public/user/checkout.html">Checkout</a></li>
                                                    <li><a href="/public/user/contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/public/user/contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area end -->
            </header>
            <!-- header end -->
            <?php echo $__env->yieldContent("middlecontent"); ?>

            <!-- footer start -->
            <footer class="footer-area two">
                <?php echo $__env->make("user.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </footer>
            <!-- footer end -->
        </div>
    </div>
    <!-- jquery
        ============================================ -->
    <script src="/public/user/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="/public/user/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="/public/user/js/jquery.meanmenu.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="/public/user/js/wow.min.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="/public/user/js/owl.carousel.min.js"></script>
    <!-- counterdown JS
        ============================================ -->
    <script src="/public/user/js/jquery.countdown.min.js"></script>
    <!-- Video Player JS
        ============================================ -->
    <script src="/public/user/js/jquery.mb.YTPlayer.js"></script>
    <!-- textillate js
        ============================================ -->
    <script src="/public/user/js/jquery.textillate.js"></script>
    <script src="/public/user/js/jquery.lettering.js"></script>
    <!-- AJax Chimp JS
        ============================================ -->
    <script src="/public/user/js/jquery.ajaxchimp.min.js"></script>
    <!-- price slider JS
        ============================================ -->
    <script src="/public/user/js/jquery-price-slider.js"></script>
    <!-- elevator JS
        ============================================ -->
    <script src="/public/user/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="/public/user/js/jquery.scrollUp.min.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="/public/user/js/plugins.js"></script>
    <!-- Nevo Slider js
        ============================================ -->
    <script type="text/javascript" src="/public/user/lib/custom-slider/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="/public/user/lib/custom-slider/home.js"></script>
    <!-- animated headline js
        ============================================ -->
    <script src="/public/user/js/animate-heading.js"></script>
    <!-- ajax js
        ============================================ -->
    <script src="/public/user/js/ajax-mail.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="/public/user/js/main.js"></script>
</body>

</html>
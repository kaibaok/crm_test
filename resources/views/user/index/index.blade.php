<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="description" content="">
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

    <?php var_dump($listSlider);die;?>

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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/public/user/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
            <!-- slider start -->
            <div class="slider-wrap">
                <div class="preview-2">
                    <div id="nivoslider" class="slides">
                        <img src="/public/user/img/slider/2.jpg" alt="" title="#slider-direction-2" />
                        <img src="/public/user/img/slider/1.jpg" alt="" title="#slider-direction-1" />
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="slider-direction">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nivo_text">
                                            <div class="nivo_text-wrapper">
                                                <div class="slider-content slider-text-1 text-left">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <h2>EXCLUSIVE COLLECTION </h2>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-2 text-left hidden-xs">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <h1>SHIRT’S FOR MEN </h1>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-3 text-left hidden-xs">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                            <br> consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-4 text-left hidden-sm hidden-xs">
                                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s">
                                                        <a href='#' class='slider-button'>shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nivo_text">
                                            <div class="nivo_text-wrapper">
                                                <div class="slider-content slider-text-1 text-left">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <h2 class="text-uppercase">brand new collection</h2>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-2 text-left hidden-xs">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <h1 class="text-uppercase">for women - 2016 </h1>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-3 text-left hidden-xs">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                                    </div>
                                                </div>
                                                <div class="slider-content slider-text-4 text-left hidden-sm hidden-xs">
                                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s">
                                                        <a href='#' class='slider-button'>shop now</a>
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
            </div>
            <!-- slider end -->
            <!-- slider bottom start -->
            <div class="slider-bottom-area mt-10 text-left">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="/public/user/product-details.html"><img src="/public/user/img/slider-bottom/1.jpg" alt="product"></a>
                                </div>
                                <div class="single-slider-info">
                                    <h4 class="text-uppercase">exclusive </h4>
                                    <h2 class="text-uppercase">bag’s</h2>
                                    <h4 class="text-uppercase">COLLECTION </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="/public/user/product-details.html"><img src="/public/user/img/slider-bottom/2.jpg" alt="product"></a>
                                </div>
                                <div class="single-slider-info">
                                    <h4 class="text-uppercase">EXCLUSIVE </h4>
                                    <h2 class="text-uppercase">shoe’s</h2>
                                    <h4 class="text-uppercase">COLLECTION </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="/public/user/product-details.html"><img src="/public/user/img/slider-bottom/3.jpg" alt="product"></a>
                                </div>
                                <div class="single-slider-info">
                                    <h4 class="text-uppercase">EXCLUSIVE </h4>
                                    <h2 class="text-uppercase">watch</h2>
                                    <h4 class="text-uppercase">for men </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="/public/user/product-details.html"><img src="/public/user/img/slider-bottom/4.jpg" alt="product"></a>
                                </div>
                                <div class="single-slider-info">
                                    <h4 class="text-uppercase">EXCLUSIVE </h4>
                                    <h2 class="text-uppercase">Bag's</h2>
                                    <h4 class="text-uppercase">for women </h4>
                                </div>
                            </div>
                        </div>
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
                                <a href="/public/user/#">
                                        <img src="/public/user/img/product/b3.jpg" alt="">
                                        <div class="feature-info text-left">
                                            <h2 class="text-uppercase">men's</h2>
                                            <h3 class="text-uppercase">collection</h3>
                                        </div>
                                    </a>
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
                                <a href="/public/user/#">
                                        <img src="/public/user/img/collection/3.jpg" alt="">
                                    </a>
                                <div class="col-left-top-left-text">
                                    <h5 class="text-uppercase">all new</h5>
                                    <h3 class="text-uppercase">SUMMER</h3>
                                    <h5 class="text-uppercase">COLLECTION FOR MEN</h5>
                                </div>
                            </div>
                            <div class="col-left-top-right pl-8 pull-right">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/collection/2.jpg" alt="">
                                    </a>
                                <div class="col-left-top-right-text text-center">
                                    <h5 class="text-uppercase">GET UP TO</h5>
                                    <h3>35%</h3>
                                    <h5 class="text-uppercase">discount</h5>
                                </div>
                            </div>
                        </div>
                        <div class="column-left-bottom clearfix">
                            <div class="col-left-bottom-left pr-8 pull-left">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/collection/4.jpg" alt="">
                                    </a>
                                <div class="col-left-bottom-left-text">
                                    <h5 class="text-uppercase">trendy</h5>
                                    <h3 class="text-uppercase">coat's</h3>
                                    <h5 class="text-uppercase">FOR MEN</h5>
                                </div>
                            </div>
                            <div class="col-left-bottom-right pl-8 pull-right">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/collection/5.jpg" alt="">
                                    </a>
                                <div class="col-left-bottom-right-text">
                                    <h5 class="text-uppercase">brand new</h5>
                                    <h3 class="text-uppercase">sunglass</h3>
                                    <h5 class="text-uppercase">FOR WOMEN</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-right pull-right hidden-sm hidden-xs">
                        <a href="/public/user/#">
                                <img src="/public/user/img/collection/1.jpg" alt="">
                            </a>
                        <div class="col-right-text">
                            <h5 class="text-uppercase">HOT OFFER <span> 25% </span> get it now</h5>
                        </div>
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
                                <a href="/public/user/#">
                                        <img src="/public/user/img/product/b2.jpg" alt="">
                                        <div class="feature-info text-right">
                                            <h2 class="text-uppercase">women's</h2>
                                            <h3 class="text-uppercase">collection</h3>
                                        </div>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- women area end -->
            <!-- offer area start -->
            <div class="offer-area ptb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-5 col-xs-12">
                            <div class="offer-img">
                                <img src="/public/user/img/offer/1.png" alt="product">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                            <div class="offer-info mt-40 text-center">
                                <h3>GET IT NOW</h3>
                                <h1>LIMITED OFFER</h1>
                                <h5 class="hidden-xs">HANDBAGS COLLECTION FOR WOMEN</h5>
                            </div>
                            <div class="timer">
                                <div data-countdown="2017/02/01" class="timer-grid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offer area end -->
            <!-- off banner area start -->
            <div class="off-banner-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="single-off-banner text-left">
                            <div class="off-img">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/off-banner/1.jpg" alt="">
                                    </a>
                            </div>
                            <div class="off-text">
                                <h4 class="text-uppercase">GET 25% OFF</h4>
                                <h2 class="text-uppercase">MEN’S </h2>
                                <h4 class="text-uppercase">COLLECTION </h4>
                                <a href="/public/user/#" class="section-button">shop now</a>
                            </div>
                        </div>
                        <div class="single-off-banner text-center">
                            <div class="off-img">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/off-banner/2.jpg" alt="">
                                    </a>
                            </div>
                            <div class="off-text">
                                <h3 class="text-uppercase">EXCLUSIVE </h3>
                                <h2 class="text-uppercase">MEN’S &amp; WOMEN's</h2>
                                <h3 class="text-uppercase">COLLECTION </h3>
                                <a href="/public/user/#" class="section-button">shop now</a>
                            </div>
                        </div>
                        <div class="single-off-banner text-left">
                            <div class="off-img">
                                <a href="/public/user/#">
                                        <img src="/public/user/img/off-banner/3.jpg" alt="">
                                    </a>
                            </div>
                            <div class="off-text">
                                <h4 class="text-uppercase">GET 25% OFF</h4>
                                <h2 class="text-uppercase">WOMEN’S </h2>
                                <h4 class="text-uppercase">COLLECTION </h4>
                                <a href="/public/user/#" class="section-button">shop now</a>
                            </div>
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
                                <a href="/public/user/#">
                                        <img src="/public/user/img/product/b1.jpg" alt="">
                                    </a>
                                <span class="red hidden-sm" style="margin-left: 35px">hot</span>
                            </div>
                            <div class="single-product-info clearfix">
                                <div class="pro-title">
                                    <h3><a href="/public/user/#">Electria Ostma</a></h3>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$150</span>
                                    <span class="old-price">$180</span>
                                </div>
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
            <!-- footer start -->
            <footer class="footer-area two">
                <div class="footer-middle-area ptb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-widget address">
                                    <div class="footer-logo">
                                        <a href="/public/user/index.html"><img src="/public/user/img/logo/2.png" alt="shofixe"></a>
                                    </div>
                                    <div class="single-footer-contact">
                                        <div class="footer-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="footer-contact-info">
                                            <p>8901 Marmora Raod,
                                                <br>Glasgow, D04 89GR</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-contact">
                                        <div class="footer-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="footer-contact-info">
                                            <p>Telephone : (801) 2223 3337
                                                <br>Telephone : (801) 4256 9658</p>
                                        </div>
                                    </div>
                                    <div class="single-footer-contact">
                                        <div class="footer-icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="footer-contact-info">
                                            <p>Infor@bootexperts.com
                                                <br>Web : www.shofixe.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 hidden-md hidden-sm col-xs-12 mt-18">
                                <div class="footer-widget">
                                    <h5>Main Menu</h5>
                                    <ul>
                                        <li><a href="/public/user/#">About Us</a></li>
                                        <li><a href="/public/user/#">Our products</a></li>
                                        <li><a href="/public/user/#">Popular brands</a></li>
                                        <li><a href="/public/user/#">Blog</a></li>
                                        <li><a href="/public/user/#">products</a></li>
                                        <li><a href="/public/user/#">brands</a></li>
                                        <li><a href="/public/user/#">team</a></li>
                                        <li><a href="/public/user/contact.html">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 mt-18">
                                <div class="footer-widget">
                                    <h5>shopping info</h5>
                                    <ul>
                                        <li><a href="/public/user/#">Service</a></li>
                                        <li><a href="/public/user/#">Delivery</a></li>
                                        <li><a href="/public/user/#">Returns</a></li>
                                        <li><a href="/public/user/#">Gift Cards</a></li>
                                        <li><a href="/public/user/#">Current Discount</a></li>
                                        <li><a href="/public/user/#">Privacy</a></li>
                                        <li><a href="/public/user/#">Policy</a></li>
                                        <li><a href="/public/user/#">Discount</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mt-18">
                                <div class="footer-widget">
                                    <h5>quick links</h5>
                                    <ul>
                                        <li><a href="/public/user/#">advanced search</a></li>
                                        <li><a href="/public/user/#">sitemap</a></li>
                                        <li><a href="/public/user/#">checkout</a></li>
                                        <li><a href="/public/user/#">privacy policy</a></li>
                                        <li><a href="/public/user/#">FAQs</a></li>
                                        <li><a href="/public/user/#">benefit</a></li>
                                        <li><a href="/public/user/#">team</a></li>
                                        <li><a href="/public/user/#">blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 mt-18">
                                <div class="footer-widget payment">
                                    <h5>payment method</h5>
                                    <p>Connected with our social media and
                                        <br> get update protidin</p>
                                    <img src="/public/user/img/payment/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area ptb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="copyright">
                                    <p>Copyright @ 2016 <span><a href="/public/user/http://bootexperts.com/">BootExperts</a></span>. All right reserved. </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="footer-menu text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="/public/user/">Site Map</a></li>
                                            <li><a href="/public/user/contact.html">Contact Us</a></li>
                                            <li class="hidden-md hidden-xs"><a href="/public/user/wishlist.html">Wish List</a></li>
                                            <li><a href="/public/user/#">Newsletter</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end -->
        </div>
    </div>
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
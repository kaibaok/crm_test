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
                <!-- navigation-->
                <?php echo $__env->make("user.navi", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- end navigation -->
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
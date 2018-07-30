<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ MetaTag::get('title') }}</title>
    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('image') !!}
    {!! MetaTag::tag('keywords') !!}
    {!! MetaTag::tag('author') !!}
    {!! MetaTag::openGraph() !!}
    {!! MetaTag::twitterCard() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                                        <li>
                                            @if (!empty($userInfo))
                                                <a href="/thong-tin-tai-khoan/{{$userInfo->id}}">Chào {{$userInfo->name}}</a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="top-right">
                                    <div class="top-login-cart">
                                        <ul>
                                            <li class=" hidden-xs"><a href="/dang-ky">Đăng ký</a></li>
                                            <li class=" hidden-xs"><a href="/dang-nhap">Đăng nhập</a></li>
                                            <li class=" hidden-xs"><a href="/don-hang">Đơn hàng</a></li>
                                            <li><a href="/gio-hang"><img src="/public/user/img/icon/cart_red.png" alt="cart">(<span id="number_cart">{{count($sCart)}}</span>)</a>
                                                <ul class="submenu-mainmenu" id="listCart">
                                                    @php $totalPrice = 0; @endphp
                                                    @if (!empty($sCart))
                                                        @foreach ($sCart as $value)
                                                            <li class="single-cart-item clearfix">
                                                                <span class="cart-img">
                                                                        <a href="/pd/{{$value['id']}}/{{$value['seo_link']}}/"><img style='height:59px' src="{{$value['img']}}" alt=""></a>
                                                                    </span>
                                                                <span class="cart-info">
                                                                        <a href="/pd/{{$value['id']}}/{{$value['seo_link']}}/">{{$value['title']}}</a>
                                                                        <span>Size {{$value['size']}} x {{$value['number']}} </span>
                                                                </span>
                                                                <span class="trash-cart">
                                                                        <a href="/xoa-gio-hang/{{$value['id']}}/{{$value['size']}}"><i class="fa fa-trash-o"></i></a>
                                                                </span>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                    <li>
                                                        <span class="sub-total-cart text-center">
                                                        <a href="/gio-hang" class="view-cart active">Giỏ hàng</a>
                                                        <a href="/don-hang" class="view-cart">Đơn hàng</a>
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
                                    <a href="/"><img src="/public/user/img/logo/1.png" alt="shofixe"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="search-box">
                                    <img src="/public/user/img/icon/search.png" alt="">
                                    <form action="/p/" method="GET">
                                        <input type="text" name="keywords" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- navigation-->
                @include("user.navi")
                <!-- end navigation -->
            </header>
            <!-- header end -->
            @yield("middlecontent")

            <!-- client area start -->
            @if (!empty($listBrandLayout))
                <div class="client-area ptb-90">
                    <div class="container">
                        <div class="row">
                            <div class="client-owl">
                                @foreach ($listBrandLayout as $key => $value)
                                    @if (!empty($value->bimg_detail) && file_exists(BASE_IMG."brand/".$value->bimg_detail))
                                        <div class="col-xs-12">
                                            <div class="single-client">
                                                <div class="single-client-img plr-40">
                                                    <a href="/p/?brand={{$value->id}}&t={{$value->seo_link}}">
                                                        <img src="{{URL_IMG."brand/".$value->bimg_detail}}" alt="{{$value->title}}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
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
            @endif
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
                @include("user.footer")
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
    <!-- price slider JS
        ============================================ -->
    <script src="/public/user/js/jquery-price-slider.js"></script>
    <!-- elevator JS
        ============================================ -->
    <script src="/public/user/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="/public/user/js/jquery.scrollUp.min.js"></script>
    <!-- Nevo Slider js -->
    <script type="text/javascript" src="/public/user/lib/custom-slider/js/jquery.nivo.slider.js"></script>

    <script src="/public/user/js/animate-heading.js"></script>
    <script> var _token = $('meta[name="csrf-token"]').attr('content'); </script>
    <script src="/public/user/js/main.js"></script>
</body>

</html>
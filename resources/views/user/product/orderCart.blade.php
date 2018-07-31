@extends("user.layout")
@section('middlecontent')
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Hoàn tất đơn hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- checkout start -->
<div class="checkout-area-start pt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-tab-menu section-tab-menu pb-50 text-center">
                    <ul>
                        <li class="text-uppercase"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase"><a href="/don-hang">Xác nhận</a></li>
                        <li class="text-uppercase active"><a href="javascript:void(0);">Hoàn tất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase mb-30 text-center">Xin chân thành cảm ơn</h4>
                <p class="text-center">Bạn đã đặt hàng thành công tại website của chúng tôi. <br><br>
                Mọi chi tiết cần hỗ trợ xin liên hệ : {{CONTACT_PHONE}} - {{CONTACT_PHONE2}}</p>
                <div class="client-button text-center pt-35">
                    <a href="/" class="section-button">Trở về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout end -->
@endsection
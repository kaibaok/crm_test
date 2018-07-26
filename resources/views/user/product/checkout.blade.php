@extends("user.layout")
@section('middlecontent')
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Xác nhận đơn hàng</h2>
                    </div>
                    {{-- <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize"><a href="shop.html">shop</a> ></li>
                            <li class="text-capitalize">checkout</li>
                        </ul>
                    </div> --}}
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
                        <li class="text-uppercase active"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase"><a href="/don-hang">Xác nhận</a></li>
                        <li class="text-uppercase"><a href="javascript:void(0);">Hoàn tất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="billing-detail">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-35">Thông tin cần điền</h4>
                    </div>
                    <form action="#">
                        <p>Họ và tên <span>*</span><br>
                            <input type="text" placeholder="Họ và tên" name="fullName">
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                Email <span>*</span><br>
                                <input type="email" placeholder="Email" name="email">
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Số điện thoại <span>*</span><br>
                                <input type="text" placeholder="Số điện thoại" name="phone">
                            </p>
                        </div>
                        <p id="address">Địa chỉ nhận <span>*</span><br>
                        <input type="text" placeholder="Địa chỉ 1" name="address">
                        <input type="text" placeholder="Địa chỉ 2" name="address2">
                        </p>
                        <p>Thành phố <span>*</span><br>
                        <input type="text" placeholder="Thành phố" name="city">
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                Phường/Xã <br>
                                <input type="text" placeholder="Phường/Xã" name="stage">
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Quận <span>*</span><br>
                                <input type="text" placeholder="Quận" name="district">
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="total-cart">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-48">Chi tiết giỏ hàng</h4>
                    </div>
                    <div class="your-order">
                        <div class="order-table">
                            <ul>
                                <li>
                                    <h5 class="focus">Sản phẩm <span>Thành tiền</span></h5>
                                    <p>Eletria ostma    <span> x  02</span><span>$300.00</span></p>
                                    <p>Celletria ostma  <span> x  01</span><span>$120.00</span></p>
                                    <p>Pelletria ostma  <span> x  02</span><span>$200.00</span></p>
                                </li>
                                <li>
                                    <h5>Sub total <span>$620.00</span></h5>
                                </li>
                                <li>
                                    <h5>Shipping <span>$0.00</span></h5>
                                </li>
                                <li class="order-total-purple">
                                    <h5 class="focus">Grand Total <span>$620.00</span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-title mt-50 mb-25">
                        <h4 class="text-uppercase">Payment Method</h4>
                    </div>
                    <div class="your-order">
                        <div class="order-table">
                            <ul>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="transfer" value="bank" name="payment" type="radio">Direct bank tranfer

                                    </label>
                                    <p id="transfer-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="payment" value="check" name="payment" type="radio">Cheque Payment
                                    </label>
                                    <p id="payment-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="paypal" value="paypal" name="payment" type="radio">Paypal
                                    </label>
                                    <p id="paypal-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title red">
                                        <input type="radio">I’ve read &amp; Accept the terms &amp; Conditions.
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="section-button">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout end -->
@endsection
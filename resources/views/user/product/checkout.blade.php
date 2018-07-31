@extends("user.layout") @section('middlecontent')
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Xác nhận đơn hàng</h2>
                    </div>
                    {{--
                    <div class="breadcrumbs">
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
                        <li class="text-uppercase"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase active"><a href="/don-hang">Xác nhận</a></li>
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
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <p>Họ và tên <span>*</span>
                            <br>
                            <input type="text" placeholder="Họ và tên" name="full_name" value="{{!empty($info['full_name']) ? $info['full_name'] : ''}}"> @if(isset($errors['full_name']))
                            <span class="txt_error">{{$errors['full_name']}}</span> @endif
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                Email <span>*</span>
                                <br>
                                <input type="email" placeholder="Email" name="email" value="{{!empty($info['email']) ? $info['email'] : ''}}"> @if (isset($errors['email']))
                                <span class="txt_error">{{$errors['email']}}</span> @endif
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Số điện thoại <span>*</span>
                                <br>
                                <input type="text" placeholder="Số điện thoại" name="phone" value="{{!empty($info['phone']) ? $info['phone'] : ''}}"> @if (isset($errors['phone']))
                                <span class="txt_error">{{$errors['phone']}}</span> @endif
                            </p>
                        </div>
                        <p id="address">Địa chỉ nhận <span>*</span>
                            <br>
                            <input type="text" placeholder="Địa chỉ 1" name="address1" value="{{!empty($info['address1']) ? $info['address1'] : ''}}">
                            <input type="text" placeholder="Địa chỉ 2" name="address2" value="{{!empty($info['address2']) ? $info['address2'] : ''}}"> @if(isset($errors['address']))
                            <span class="txt_error">{{$errors['address']}}</span> @endif
                        </p>
                        <p>Thành phố <span>*</span>
                            <br>
                            <input type="text" placeholder="Thành phố" name="city" value="{{!empty($info['city']) ? $info['city'] : ''}}">
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                Phường/Xã
                                <br>
                                <input type="text" placeholder="Phường/Xã" name="stage" value="{{!empty($info['stage']) ? $info['stage'] : ''}}"> @if(isset($errors['stage']))
                                <span class="txt_error">{{$errors['stage']}}</span> @endif
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Quận <span>*</span>
                                <br>
                                <input type="text" placeholder="Quận" name="district" value="{{!empty($info['district']) ? $info['district'] : ''}}"> @if(isset($errors['district']))
                                <span class="txt_error">{{$errors['district']}}</span> @endif
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-sm-12 col-xs-12">
                                Ghi chú
                                <br>
                                <br>
                                <textarea name="note" id="" cols="30" rows="10">{{!empty($info['note']) ? $info['note'] : ''}}</textarea>
                            </p>
                        </div>
                        <button type="submit" class="section-button">Đặt hàng</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="total-cart">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-48">Chi tiết giỏ hàng</h4>
                    </div>
                    <div class="your-order">
                        @if (!empty($sCart)) @php $totalPrice = 0; @endphp
                        <div class="order-table">
                            <ul>
                                <li>
                                    <h5 class="focus">Sản phẩm <span>Thành tiền</span></h5>
                                    @foreach ($sCart as $key => $value)
                                        @php
                                            $price = ($listProduct[$value['id']]['discount'] < $listProduct[$value['id']]['price'] )
                                                ? $listProduct[$value['id']]['discount'] : $listProduct[$value['id']]['price'];
                                            $totalPrice += $price * $value['number'];
                                        @endphp
                                        <p>{{$value['title']}} <span class="span_color_small" style="background: {{$listColors[$value['color']]['code']}}"></span> <span> {{$value['size']}} x {{$value['number']}}</span><span>{{$price * $value['number']}}</span></p>
                                    @endforeach
                                </li>
                                <li>
                                    <h5>Tổng giá trước khi giảm <span>{{$totalPrice}}</span></h5>
                                </li>
                                @if (!empty($discountPrice))
                                <li>
                                    <h5>Giảm giá <span> @if ($discountPrice->type_discount)
                                            {{$discountPrice->discount_price}}
                                        @else
                                            {{$discountPrice->percent}}%
                                        @endif
                                        </span>
                                    </h5>
                                </li>
                                @endif
                                <li class="order-total-purple">
                                    <h5 class="focus">Thành tiền <span>
                                        @if (!empty($discountPrice))
                                            @if ($discountPrice->type_discount)
                                                @php $totalPrice = $totalPrice - $discountPrice->discount_price @endphp
                                            @else
                                                @php $totalPrice -= ($totalPrice * $discountPrice->percent)/100 @endphp
                                            @endif
                                        @endif
                                        {{$totalPrice}}</span>
                                    </h5>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout end -->
@endsection
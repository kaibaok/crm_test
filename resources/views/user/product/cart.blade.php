@extends("user.layout")
@section('middlecontent')
<!-- banner start -->
<div class="banner-area cart ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Giỏ Hàng</h2>
                    </div>
                   {{--  <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="/">Trang chủ</a> ></li>
                            <li class="text-capitalize"><a href="/p">Sản phẩm</a> ></li>
                            <li class="text-capitalize">cart</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- cart start -->
<div class="cart-area-start mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="cart-tab-menu section-tab-menu pb-50 text-center">
                    <ul>
                        <li class="text-uppercase active"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase"><a href="/don-hang">Xác nhận</a></li>
                        <li class="text-uppercase"><a href="javascript:void(0);">Hoàn tất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @if (!empty($sCart))
            @php $totalPrice = 0; @endphp
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="cart-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="p-name">Sản phẩm</th>
                                        <th class="p-amount">Giá</th>
                                        <th class="p-quantity">Số lượng</th>
                                        <th class="p-total">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody class="pt-30">
                                        @foreach ($sCart as $key => $value)
                                        @php
                                        $price = ($listProduct[$value['id']]['discount'] < $listProduct[$value['id']]['price'] )
                                            ? $listProduct[$value['id']]['discount'] : $listProduct[$value['id']]['price'];
                                        $totalPrice += $price * $value['number']; @endphp
                                            <tr>
                                                <td class="p-name text-left">
                                                    <div class="cart-img">
                                                        <a href="/pd/{{$value['id']}}/{{$value['seo_link']}}"><img src="{{$value['img']}}" alt="{{$value['title']}}"></a>
                                                    </div>
                                                    <a href="/pd/{{$value['id']}}/{{$value['seo_link']}}">{{$value['title']}}</a>
                                                    <p>Size {{$value['size']}}</p>
                                                </td>
                                                <td class="p-amount">{{$price}}</span></td>
                                                <td class="p-quantity">{{$value['number']}}</td>
                                                <td class="p-total">{{$price * $value['number']}} <a href="/xoa-gio-hang/{{$value['id']}}"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-sm-6 pt-50">
                        <div class="cart-coupn-leftside">
                            <div class="section-title">
                                <h4 class="text-uppercase pb-15">Mã giảm giá</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cpn-code">
                                        <input type="text" placeholder="Code" name="discountCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="shipping-info">
                                        <button name="btnAddCode">Kiểm tra mã</button> <br><br>
                                        @if (!empty($discountPrice))
                                         <button name="btnRemoveCode">Hủy mã</button><br><br>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if (!empty($errors))
                                @if (isset($errors['success']))
                                    <p class="txt_success">{{$errors['success']}}</p>
                                @else
                                    <p class="txt_error">{{$errors['fail']}}</p>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cart-coupon-rightside pt-50">
                            <div class="section-title">
                                <h4 class="text-uppercase pb-15">Tổng tiền</h4>
                            </div>
                            <div class="amount-table table-responsive">
                                <table>
                                    <tbody>
                                        <tr class="s-total">
                                            <td>Tổng giá trước khi giảm <span>{{$totalPrice}}</span></td>
                                        </tr>
                                        @if (!empty($discountPrice))
                                        <tr class="s-total">
                                            <td>Giảm giá <span>
                                                @if ($discountPrice->type_discount)
                                                    {{$discountPrice->discount_price}}
                                                @else
                                                    {{$discountPrice->percent}}%
                                                @endif
                                            </span></td>
                                        </tr>
                                        @endif
                                        <tr class="g-total">
                                            <td>Thành tiền<span class="grand">
                                            @if (!empty($discountPrice))
                                                @if ($discountPrice->type_discount)
                                                    @php $totalPrice = $totalPrice - $discountPrice->discount_price @endphp
                                                @else
                                                    @php $totalPrice -= ($totalPrice * $discountPrice->percent)/100 @endphp
                                                @endif
                                            @endif
                                            {{$totalPrice}}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="check-update pull-right">
                                <button type="submit" class="mt-25 mr-25 section-button">Cập nhật</button>
                                <a href="/don-hang" class="checkout mt-25 section-button">Xác nhận</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
             <p class="text-center">Hiện tại bạn chưa đặt sản phẩm nào</p>
        @endif
    </div>
</div>
<!-- cart end -->
@endsection
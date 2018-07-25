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
                        <li class="text-uppercase"><a href="checkout.html">Checkout</a></li>
                        <li class="text-uppercase"><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form action="#">
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
                                @if (!empty($sCart))
                                    @foreach ($sCart as $key => $value)
                                        <tr>
                                            <td class="p-name text-left">
                                                <div class="cart-img">
                                                    <a href="/pd/{{$value['productID']}}/{{$value['seo_link']}}"><img src="{{$value['img']}}" alt="{{$value['title']}}"></a>
                                                </div>
                                                <a href="/pd/{{$value['productID']}}/{{$value['seo_link']}}">{{$value['title']}}</a>
                                                <p>{{$value['short_desc']}}</p>
                                            </td>
                                            <td class="p-amount"><span class="amount">{{$value['price']}}</span></td>
                                            <td class="p-quantity"><input type="text" value="{{$value['number']}}"></td>
                                            <td class="p-total">{{$value['price'] * $value['number']}} <a href="/xoa-gio-hang/{{$value['productID']}}"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="cart-coupon-rightside pt-50">
                    <div class="section-title">
                        <h4 class="text-uppercase pb-15">cart total</h4>
                    </div>
                    <div class="amount-table table-responsive">
                        <table>
                            <tbody>
                                <tr class="s-total">
                                    <td>Sub Total <span>$760.00</span></td>
                                </tr>
                                <tr class="s-total">
                                    <td>Shipping <span>$0.00</span></td>
                                </tr>
                                <tr class="g-total">
                                    <td>Grand Total<span class="grand">$760.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="check-update pull-right">
                        <a href="#" class="mt-25 mr-25 section-button">Update</a>
                        <a href="checkout.html" class="checkout mt-25 section-button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart end -->
@endsection
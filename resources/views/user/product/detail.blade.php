@extends("user.layout")
@section('middlecontent')
<!-- banner start -->
<div class="banner-area details ptb-110" @if (!empty($product->pimg_detail) && file_exists(BASE_IMG."product/".$product->pimg_detail))
    style="background-image: url('{{URL_IMG."product/".$product->pimg_detail}}')"@endif>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center"  >
                    <div class="banner-title">
                        <h2 class="text-uppercase">{{$product->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!--Start Product Details area  -->
<div class="product-detail-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="zoomWrapper clearfix">
                    <div id="img-1" class="zoomWrapper single-zoom pull-right">
                        <a href="#">
                            @if (!empty($product->pimg_detail) && file_exists(BASE_IMG."product/".$product->pimg_detail))
                                <img id="zoom1" src="{{URL_IMG."product/".$product->pimg_detail}}" data-zoom-image="{{URL_IMG."product/".$product->pimg_detail}}">
                            @endif
                        </a>
                    </div>
                    <div class="product-thumb">
                        <ul class="p-details-slider" id="gallery_01">
                             <li>
                                @if (!empty($product->pimg1) && file_exists(BASE_IMG."product/".$product->pimg1))
                                    <a class="elevatezoom-gallery" href="#" data-image="{{URL_IMG."product/".$product->pimg1}}" data-zoom-image="{{URL_IMG."product/".$product->pimg1}}"><img src="{{URL_IMG."product/".$product->pimg1}}" alt=""></a>
                                @endif
                            </li>
                            <li>
                                @if (!empty($product->pimg2) && file_exists(BASE_IMG."product/".$product->pimg2))
                                    <a class="elevatezoom-gallery" href="#" data-image="{{URL_IMG."product/".$product->pimg2}}" data-zoom-image="{{URL_IMG."product/".$product->pimg2}}"><img src="{{URL_IMG."product/".$product->pimg2}}" alt=""></a>
                                @endif
                            </li>
                            <li>
                                @if (!empty($product->pimg3) && file_exists(BASE_IMG."product/".$product->pimg3))
                                    <a class="elevatezoom-gallery" href="#" data-image="{{URL_IMG."product/".$product->pimg3}}" data-zoom-image="{{URL_IMG."product/".$product->pimg3}}"><img src="{{URL_IMG."product/".$product->pimg3}}" alt=""></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="product-detail">
                    <div class="product-title">
                        <h2>{{$product->title}}</h2><br>
                        <h4>Giá:
                            @if($product->type_price == CONTACT_PHONE) {{CONTACT_PHONE}}
                            @else
                                @if ($product->discount >0)
                                    {{$product->discount}} <del>{{$product->price}}</del>
                                @else
                                    {{$product->price}}
                                @endif
                            @endif
                        </h4>
                    </div>
                    <h5>Trạng thái: <span>  @if ($product->type_price == EMPTY_PRODUCT || $product->numbers <= 0 ) Hết hàng @else Còn hàng @endif</span> </h5>
                    <h5>Thương hiệu: <span>{{$product->title_brand}}</span><br></h5>
                    <h5>Danh mục: <span>{{$product->title_category}}</span><br></h5>
                    <p class="detail">{!!$product->short_desc!!}</p>
                    <div class="size-quantity clearfix">
                        @if ($product->type_price == NORMAL_PRICE || $product->numbers > 0)
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <div class="single-size-quantity">
                                    <h4>Size:</h4>
                                    <div class="search-cat">
                                        <select name="size" class="category-items">
                                            @foreach ($listSize as $value)
                                                <option value="{{$value}}">{{strtoupper($value)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="single-size-quantity">
                                    <h4>Số lượng đặt:</h4>
                                    <div class="search-cat">
                                        <select name="number" class="category-items">
                                            @for ($i = 1; $i <= $product->numbers ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <p><button type="submit" class="section-button"><i class="fa fa-shopping-cart"></i> Đặt hàng</button></p>
                            </form>
                        @endif
                    </div>
                    <div class="widget-color">
                       <h4 class="follow">Chia sẻ:</h4>
                       <ul>
                           <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                           <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                           <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                           <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-description-tab pt-50">
                    <div class="description-tab-menu section-tab-menu pb-30">
                        <ul class="clearfix" role="tablist">
                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Mô tả</a></li>
                            <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Bình luận</a></li>
                      </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                           {!!$product->desc!!}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="specification">
                            <p>Bình luận</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Product Details area  -->
@endsection
@extends("user.layout")
@section('middlecontent')
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Danh sách sản phẩm</h2>
                    </div>
                    {{-- <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize">shop</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shop-area-start leftsidebar mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="shop-left-sidebar">
                   @include("user.leftnavi")
                </div>
            </div>
            <div class="col-md-9">
                @if (empty($listProduct))
                    No Data
                @else
                <div class="row">
                    <div class="shop-item-filter">
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                            <div class="filter-by">
                                <h4>Sắp xếp theo :</h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select name="filter">
                                            <option value="name">Tên</option>
                                            <option value="priceA">Giá thấp lên cao</option>
                                            <option value="priceD">Giá cao xuống thấp</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="page-menu2 float-right">
                                {{$paginator->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content mt-25">
                    <div id="grid" class="tab-pane active" role="tabpanel">
                        <div class="row">
                            @foreach ($listProduct as $value)
                                @if (!empty($value->pimg_list) && file_exists(BASE_IMG."product/".$value->pimg_list))
                                <div class="col-xs-12 col-width">
                                    <div class="single-product mb-30">
                                        <div class="single-product-item clearfix">
                                            <div class="single-product-img clearfix">
                                                <a href="/pd/{{$value->id}}/{{$value->seo_link}}">
                                                    <img class="primary-image" src="{{URL_IMG."product/".$value->pimg_list}}" alt="">
                                                </a>
                                                <div class="wish-icon-hover text-center clearfix">
                                                    <div class="hover-text">
                                                        <p>{!!$value->short_desc!!}</p>
                                                        <ul>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" title="Đặt hàng"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div class="pro-price">
                                                    @if ($value->type_price == EMPTY_PRODUCT)
                                                        <span class="new-price">Hết hàng</span>
                                                    @elseif($value->type_price == CONTACT_PHONE)
                                                        <span class="new-price">{{CONTACT_PHONE}}</span>
                                                    @else
                                                        @if ($value->discount >0)
                                                            <span class="new-price">{{$value->discount}}</span>
                                                            <span class="old-price">{{$value->price}}</span>
                                                        @else
                                                            <span class="new-price">{{$value->price}}</span>
                                                        @endif
                                                    @endif
                                                </div>
                                                <h3><a href="/pd/{{$value->id}}/{{$value->seo_link}}">{{$value->title}}</a></h3>
                                            </div>
                                        </div>
                                        <div class="new-sale">
                                            @if ($value->is_new) <span class="black">new</span> @endif
                                            @if ($value->is_hot) <span class="red ">hot</span> @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="shop-item-filter margin-none">
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="page-menu2 float-right">
                                {{$paginator->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- shop end -->
@endsection
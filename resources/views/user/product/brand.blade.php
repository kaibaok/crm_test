@extends("user.layout")
@section('middlecontent')
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">thương hiệu</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize">thương hiệu thời trang nổi tiếng</li>
                        </ul>
                    </div>
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
                @if (empty($listBrand)) No Data @else
                    <div class="tab-content mt-25">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                @foreach ($listBrand as $value)
                                    @if (!empty($value->bimg_detail) && file_exists(BASE_IMG."brand/".$value->bimg_detail))
                                        <div class="col-xs-12 col-width">
                                            <div class="single-product mb-30">
                                                <div class="single-product-item clearfix">
                                                    <div class="single-product-img clearfix">
                                                        <a href="/p/?brand={{$value->id}}&t={{$value->seo_link}}">
                                                            <img class="primary-image" src="{{URL_IMG."brand/".$value->bimg_detail}}" alt="{{$value->title}}">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <h3><a href="/p/?brand={{$value->id}}&t={{$value->seo_link}}">{{$value->title}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
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
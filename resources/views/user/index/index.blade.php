@extends("user.layout")
@section('middlecontent')

<div class="slider-wrap">
    @include("user.slidertop")
</div>

<!-- slider bottom start -->
<div class="slider-bottom-area mt-10 mb-90 text-left">
    <div class="container-fluid">
        <div class="row">
            @if (!empty($homePage))
                @for ($i = 1; $i <= 4 ; $i++)
                    @if (!empty($homePage["himg{$i}"]) && file_exists(BASE_IMG."home/".$homePage["himg{$i}"]))
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-slider-bottom">
                                <div class="single-slider-bottom-img">
                                    <a href="@if (empty($homePage["link{$i}"])) javascript:void(0); @else {{$homePage["link{$i}"]}} @endif">
                                        <img src="{{URL_IMG."home/".$homePage["himg{$i}"]}}" alt="banner {{$i}}">
                                    </a>
                                </div>
                                <div class="single-slider-info"> {!! $homePage["title{$i}"] !!} </div>
                            </div>
                        </div>
                    @endif
                @endfor
            @endif
        </div>
    </div>
</div>
<!--slider bottom end -->
<!-- men area start -->
@if (!empty($homePage['list_top']) && !empty($listCategory))
@php
    $arrListTop = explode("|", $homePage['list_top']);
@endphp
<div class="men-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            @foreach ($arrListTop as $key => $value)
                                @php $active = ($key < 1) ? "active" : ""; @endphp
                                <li role="presentation" class="{{$active}} text-uppercase"><a href="#{{"tab_top_".$value}}" aria-controls="{{"tab_top_".$value}}" role="tab" data-toggle="tab">{{$listCategory[$value]['title']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2">
                    @if (!empty($homePage['himg5']) && file_exists(BASE_IMG."home/".$homePage["himg5"]))
                    <a href="@if (empty($homePage["link5"])) javascript:void(0); @else {{$homePage["link5"]}} @endif">
                        <img src="{{URL_IMG."home/".$homePage["himg5"]}}" alt="banner 5">
                        <div class="feature-info text-left">
                            {!! $homePage["title5"] !!}
                        </div>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    @foreach ($arrListTop as $key => $value)
                        @php $active = ($key < 1) ? "active" : ""; @endphp
                        <div id="{{"tab_top_".$value}}" role="tabpanel" class="{{$active}} section-tab-item">
                            <div class="feature-slider">
                                @if (!empty($listTop[$value]))
                                    @php $list = $listTop[$value]; $nums = sizeof($list); @endphp
                                    @for ($key2 = 0; $key2 < $nums ; $key2++)
                                        @php $item = $list[$key2]; @endphp
                                        @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                @if ($item['type_price'] == 1)
                                                                    <span class="new-price">{{$item['discount']}}</span>
                                                                    <span class="old-price">{{$item['price']}}</span>
                                                                @elseif ($item['type_price'] == 2)
                                                                    <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                @else
                                                                    <span class="new-price">Hết hàng</span>
                                                                @endif
                                                            </div>
                                                            <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                    @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                    @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                </div>
                                                @if ($key2+1 < $nums)
                                                    @php $item = $list[++$key2]; @endphp
                                                    @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                                        <div class="single-product">
                                                            <div class="single-product-item clearfix">
                                                                <div class="single-product-img clearfix">
                                                                    <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                        <div class="wish-icon-hover text-center clearfix">
                                                                            <div class="hover-text">
                                                                                <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="single-product-info clearfix">
                                                                    <div class="pro-price">
                                                                        @if ($item['type_price'] == 1)
                                                                            <span class="new-price">{{$item['discount']}}</span>
                                                                            <span class="old-price">{{$item['price']}}</span>
                                                                        @elseif ($item['type_price'] == 2)
                                                                            <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                        @else
                                                                            <span class="new-price">Hết hàng</span>
                                                                        @endif
                                                                    </div>
                                                                    <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                                </div>
                                                            </div>
                                                            @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                            @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='/p' class='section-button'>Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- men area end -->
<!-- collection area start -->
<div class="collection-area clearfix mb-90">
    <div class="container">
        <div class="column-left pull-left pr-16">
            <div class="column-left-top clearfix mb-15">
                <div class="col-left-top-left pr-8 pull-left">
                    @if (!empty($homePage['himg8']) && file_exists(BASE_IMG."home/".$homePage["himg8"]))
                    <a href="@if (empty($homePage["link8"])) javascript:void(0); @else {{$homePage["link8"]}} @endif">
                        <img src="{{URL_IMG."home/".$homePage["himg8"]}}" alt="banner 5">
                    </a>
                    <div class="col-left-top-left-text">
                           {!! $homePage["title8"] !!}
                    </div>
                    @endif
                </div>
                <div class="col-left-top-right pl-8 pull-right">
                    @if (!empty($homePage['himg9']) && file_exists(BASE_IMG."home/".$homePage["himg9"]))
                        <a href="@if (empty($homePage["link9"])) javascript:void(0); @else {{$homePage["link9"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg9"]}}" alt="banner 5">
                        </a>
                        <div class="col-left-top-right-text text-center">
                               {!! $homePage["title9"] !!}
                        </div>
                    @endif
                </div>
            </div>
            <div class="column-left-bottom clearfix">
                <div class="col-left-bottom-left pr-8 pull-left">
                    @if (!empty($homePage['himg11']) && file_exists(BASE_IMG."home/".$homePage["himg11"]))
                        <a href="@if (empty($homePage["link11"])) javascript:void(0); @else {{$homePage["link11"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg11"]}}" alt="banner 5">
                        </a>
                       <div class="col-left-bottom-left-text">
                               {!! $homePage["title11"] !!}
                        </div>
                    @endif
                </div>
                <div class="col-left-bottom-right pl-8 pull-right">
                     @if (!empty($homePage['himg12']) && file_exists(BASE_IMG."home/".$homePage["himg12"]))
                        <a href="@if (empty($homePage["link12"])) javascript:void(0); @else {{$homePage["link12"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg12"]}}" alt="banner 5">
                        </a>
                       <div class="col-left-bottom-right-text">
                               {!! $homePage["title12"] !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="column-right pull-right hidden-sm hidden-xs">
            @if (!empty($homePage['himg10']) && file_exists(BASE_IMG."home/".$homePage["himg10"]))
                <a href="@if (empty($homePage["link10"])) javascript:void(0); @else {{$homePage["link10"]}} @endif">
                    <img src="{{URL_IMG."home/".$homePage["himg10"]}}" alt="banner 5">
                </a>
                <div class="col-right-text">
                       {!! $homePage["title10"] !!}
                </div>
            @endif
        </div>
    </div>
</div>
<!-- collection area end -->
<!-- women area start -->
@if (!empty($homePage['list_middle']) && !empty($listCategory))
@php
    $arrListMiddle = explode("|", $homePage['list_middle']);
@endphp
<div class="women-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            @foreach ($arrListMiddle as $key => $value)
                                @php $active = ($key < 1) ? "active" : ""; @endphp
                                <li role="presentation" class="{{$active}} text-uppercase"><a href="#{{"tab_middle_".$value}}" aria-controls="{{"tab_middle_".$value}}" role="tab" data-toggle="tab">{{$listCategory[$value]['title']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    @foreach ($arrListMiddle as $key => $value)
                    @php $active = ($key < 1) ? "active" : ""; @endphp
                        <div id="{{"tab_middle_".$value}}" role="tabpanel" class="{{$active}} section-tab-item">
                            <div class="feature-slider">
                                @if (!empty($listMiddle[$value]))
                                    @php $list = $listMiddle[$value]; $nums = sizeof($list); @endphp
                                    @for ($key2 = 0; $key2 < $nums ; $key2++)
                                        @php $item = $list[$key2]; @endphp
                                        @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                @if ($item['type_price'] == 1)
                                                                    <span class="new-price">{{$item['discount']}}</span>
                                                                    <span class="old-price">{{$item['price']}}</span>
                                                                @elseif ($item['type_price'] == 2)
                                                                    <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                @else
                                                                    <span class="new-price">Hết hàng</span>
                                                                @endif
                                                            </div>
                                                            <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                    @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                    @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                </div>
                                                @if ($key2+1 < $nums)
                                                    @php $item = $list[++$key2]; @endphp
                                                    @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                    <div class="wish-icon-hover text-center clearfix">
                                                                        <div class="hover-text">
                                                                            <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                <div class="pro-price">
                                                                    @if ($item['type_price'] == 1)
                                                                        <span class="new-price">{{$item['discount']}}</span>
                                                                        <span class="old-price">{{$item['price']}}</span>
                                                                    @elseif ($item['type_price'] == 2)
                                                                        <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                    @else
                                                                        <span class="new-price">Hết hàng</span>
                                                                    @endif
                                                                </div>
                                                                <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                            </div>
                                                        </div>
                                                        @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                        @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                    </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="arrival-button text-center mt-30">
                    <a href='/p' class='section-button'>Chi tiết</a>
                </div>
            </div>
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2 pull-right">
                    @if (!empty($homePage['himg6']) && file_exists(BASE_IMG."home/".$homePage["himg6"]))
                        <a href="@if (empty($homePage["link6"])) javascript:void(0); @else {{$homePage["link6"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg6"]}}" alt="banner 6">
                            <div class="feature-info text-right">
                                {!! $homePage["title6"] !!}
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- women area end -->
<!-- offer area start -->
@if (!empty($event) && $isOpenEvent)
    <div class="offer-area ptb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-5 col-xs-12">
                    <div class="offer-img">
                        @if (!empty($event->eimg_detail) && file_exists(BASE_IMG."event/".$event->eimg_detail))
                            <img src="{{URL_IMG."event/".$event->eimg_detail}}" alt="{{$event->title}}">
                        @endif
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                    <div class="offer-info mt-40 text-center">
                        {!! $event->desc !!}
                    </div>
                    <div class="timer">
                        <div data-countdown="{{ str_replace("/", "-", $event->time_close) }}" class="timer-grid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- offer area end -->
<!-- off banner area start -->
<div class="off-banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="single-off-banner text-left">
                @if (!empty($homePage['himg13']) && file_exists(BASE_IMG."home/".$homePage["himg13"]))
                    <div class="off-img">
                         <a href="@if (empty($homePage["link13"])) javascript:void(0); @else {{$homePage["link13"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg13"]}}" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        {!! $homePage["title13"] !!}
                    </div>
                @endif
            </div>

            <div class="single-off-banner text-center">
                @if (!empty($homePage['himg14']) && file_exists(BASE_IMG."home/".$homePage["himg14"]))
                    <div class="off-img">
                         <a href="@if (empty($homePage["link14"])) javascript:void(0); @else {{$homePage["link14"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg14"]}}" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        {!! $homePage["title14"] !!}
                    </div>
                @endif
            </div>
            <div class="single-off-banner text-left">
                @if (!empty($homePage['himg15']) && file_exists(BASE_IMG."home/".$homePage["himg15"]))
                    <div class="off-img">
                         <a href="@if (empty($homePage["link15"])) javascript:void(0); @else {{$homePage["link15"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg15"]}}" alt="banner 13">
                        </a>
                    </div>
                    <div class="off-text">
                        {!! $homePage["title15"] !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="consultation-angle"></div>
</div>
<!-- off banner area end -->
<!-- featured start -->
@if (!empty($homePage['list_footer']) && !empty($listProductType))
@php
    $arrListFooter = explode("|", $homePage['list_footer']);
@endphp
<div class="featured-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            @foreach ($arrListFooter as $key => $value)
                                @php $active = ($key < 1) ? "active" : ""; @endphp
                                <li role="presentation" class="{{$active}} text-uppercase"><a href="#{{"tab_footer_".$value}}" aria-controls="{{"tab_footer_".$value}}" role="tab" data-toggle="tab">{{$listProductType[$value]}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2">
                    @if (!empty($homePage['himg7']) && file_exists(BASE_IMG."home/".$homePage["himg7"]))
                        <a href="@if (empty($homePage["link7"])) javascript:void(0); @else {{$homePage["link7"]}} @endif">
                            <img src="{{URL_IMG."home/".$homePage["himg7"]}}" alt="banner 7">
                            <div class="feature-info text-right">
                                {!! $homePage["title7"] !!}
                            </div>
                        </a>
                    <span class="red hidden-sm" style="margin-left: 35px">hot</span>
                    @endif
                </div>
            </div>
            <div class="col-md-7">
                <div class="clearfix"></div>
                <div class="tab-content row">
                    @foreach ($arrListFooter as $key => $value)
                        @php $active = ($key < 1) ? "active" : ""; @endphp
                        <div id="{{"tab_footer_".$value}}" role="tabpanel" class="{{$active}} section-tab-item">
                            <div class="feature-slider">
                                @if (!empty($listFooter[$value]))
                                    @php $list = $listFooter[$value]; $nums = sizeof($list); @endphp
                                    @for ($key2 = 0; $key2 < $nums ; $key2++)
                                        @php $item = $list[$key2]; @endphp
                                        @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            <div class="pro-price">
                                                                @if ($item['type_price'] == 1)
                                                                    <span class="new-price">{{$item['discount']}}</span>
                                                                    <span class="old-price">{{$item['price']}}</span>
                                                                @elseif ($item['type_price'] == 2)
                                                                    <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                @else
                                                                    <span class="new-price">Hết hàng</span>
                                                                @endif
                                                            </div>
                                                            <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                    @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                    @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                </div>
                                                @if ($key2+1 < $nums)
                                                    @php $item = $list[++$key2]; @endphp
                                                    @if (!empty($item['pimg_list']) && file_exists(BASE_IMG."product/".$item['pimg_list']))
                                                        <div class="single-product">
                                                            <div class="single-product-item clearfix">
                                                                <div class="single-product-img clearfix">
                                                                    <a href="/pd/{{$item['id']}}/{{$item['seo_link']}}"><img class="primary-image" src="{{URL_IMG."product/".$item['pimg_list']}}" alt="">
                                                                        <div class="wish-icon-hover text-center clearfix">
                                                                            <div class="hover-text">
                                                                                <div class="hidden-md">{{$item['short_desc']}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="single-product-info clearfix">
                                                                    <div class="pro-price">
                                                                        @if ($item['type_price'] == 1)
                                                                            <span class="new-price">{{$item['discount']}}</span>
                                                                            <span class="old-price">{{$item['price']}}</span>
                                                                        @elseif ($item['type_price'] == 2)
                                                                            <span class="new-price">Liên lạc : {{CONTACT_PHONE}}</span>
                                                                        @else
                                                                            <span class="new-price">Hết hàng</span>
                                                                        @endif
                                                                    </div>
                                                                    <h3><a href="/pd/{{$item['id']}}/{{$item['seo_link']}}">{{$item['title']}}</a></h3>
                                                                </div>
                                                            </div>
                                                            @if ($item['is_new']) <span class="black hidden-sm">new</span> @endif
                                                            @if ($item['is_best_sell']) <span class="red hidden-sm" @if($item['is_new']) style="margin-left: 70px" @endif>hot</span> @endif
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    @endfor
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="arrival-button text-left">
                    <a href='/p' class='section-button mt-30'>Chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- featured end -->
<!-- blog area start -->
<div class="blog-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            @php $count = 0; @endphp
                            @if (!empty($listCategoryNews['listCateNews']))
                                @foreach ($listCategoryNews['listCateNews'] as $key => $value)
                                    @if (!empty($listCategoryNews['listNews'][$value->id]))
                                    @php ++$count; $active = ($count == 1) ? "active" : ""; @endphp
                                        <li role="presentation" class="{{$active}} text-uppercase"><a href="#{{'blog_'.$value->id}}" aria-controls="{{ 'blog_'.$value->id}}" role="tab" data-toggle="tab">{{$value->title}}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="clearfix"></div>
            <div class="tab-content row">
                @if (!empty($listCategoryNews['listCateNews']))
                    @php $count = 0; @endphp
                    @foreach ($listCategoryNews['listCateNews'] as $key => $value)
                        @php
                            $arrNews = $listCategoryNews['listNews'];
                            $idCate  = $value->id;
                        @endphp
                        @if (!empty($arrNews[$idCate]))
                            @php ++$count; $active = ($count == 1) ? "active" : ""; @endphp
                            <div id="{{'blog_'.$value->id}}" role="tabpanel" class="{{$active}} section-tab-item">
                                @foreach ($arrNews[$idCate] as $kNews => $vnews)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="/nd/{{$vnews['id']}}/{{$vnews['seo_link']}}">
                                                    @if (!empty($item['nimg_list']) && file_exists(BASE_IMG."news/".$vnews['nimg_list']))
                                                        <img src="{{URL_IMG."news/".$vnews['nimg_list']}}" alt="{{$vnews['title']}}">
                                                    @else
                                                        <img src="/public/user/img/blog/1.jpg" alt="{{$vnews['title']}}">
                                                    @endif
                                                </a>
                                                <div class="blog-date text-center">
                                                    @php $createdAt = strtotime($vnews['created_at']); @endphp
                                                    <h2>{{date("d", $createdAt)}} <span>{{date("M", $createdAt)}}</span></h2>
                                                </div>
                                            </div>
                                            <div class="single-blog-info mt-25">
                                                <h4><a href="/nd/{{$vnews['id']}}/{{$vnews['seo_link']}}">{{$vnews['title']}}</a></h4>
                                                {!!$vnews['short_desc']!!}
                                                <div class="button-comments">
                                                    <div class="read-button text-center">
                                                        <a class="read-more text-uppercase" href="/nd/{{$vnews['id']}}/{{$vnews['seo_link']}}">Chi tiết <i class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        unset($arrNews[$idCate][$kNews]);
                                        if($kNews == 1) break;
                                    @endphp
                                @endforeach
                                <div class="col-md-4 hidden-sm col-xs-12">
                                    @foreach ($arrNews[$idCate] as $kNews => $vnews)
                                        <div class="single-blog-list">
                                            <div class="blog-date mr-25 text-center">
                                                @php $createdAt = strtotime($vnews['created_at']); @endphp
                                                <h2>{{date("d", $createdAt)}} <span>{{date("M", $createdAt)}}</span></h2>
                                            </div>
                                            <div class="blog-list-info single-blog-info mb-25">
                                                <h4><a href="/nd/{{$vnews['id']}}/{{$vnews['seo_link']}}">{{$vnews['title']}}</a></h4>
                                                <div>{!!$vnews['short_desc']!!}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->
<!-- testimonial area start -->
<div class="testimonial-area pt-100 pb-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                <div class="testimonial-left text-right">
                    <h2>CUSTOMER REVIEWS</h2>
                    <p class="hidden-sm">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bornad</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-9 col-xs-12">
                <div class="testi-owl">
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                    <div class="testimonial-right">
                        <div class="testimonial-img">
                            <img src="/public/user/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                            <h3>Zaculine Jenelia, <span> Head Of Business</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lore magna aliqua. Ut enim ad minim veniam quis</p>
                            <a href="/public/user/#" class="section-button mt-30">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
@endsection


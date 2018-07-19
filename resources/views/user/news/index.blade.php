@extends("user.layout")
@section('middlecontent')
<div class="banner-area product ptb-110 shop-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Tin tức</h2>
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
                @if (empty($listNews))
                    No Data
                @else
                <div id="blog">
                    <div class="row">
                        @foreach ($listNews as $value)
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-20">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="/nd/{{$value->id}}/{{$value->seo_link}}">
                                            @if (!empty($value->nimg_list) && file_exists(BASE_IMG."news/".$value->nimg_list))
                                                <img src="{{URL_IMG."news/".$value->nimg_list}}" alt="{{$value->title}}">
                                            @else
                                                <img src="/public/user/img/blog/1.jpg" alt="{{$value->title}}">
                                            @endif
                                        </a>
                                        <div class="blog-date text-center">
                                             @php $createdAt = strtotime($value->created_at); @endphp
                                            <h2>{{date("d", $createdAt)}} <span>{{date("M", $createdAt)}}</span></h2>
                                        </div>
                                    </div>
                                    <div class="single-blog-info mt-25">
                                        <h4><a href="/nd/{{$value->id}}/{{$value->seo_link}}">{{$value->title}}</a></h4>
                                        {!!$value->short_desc!!}
                                        <div class="button-comments">
                                            <div class="read-button text-center">
                                                <a class="read-more text-uppercase" href="/nd/{{$value->id}}/{{$value->seo_link}}">
                                                    Chi tiết <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="shop-item-filter margin-none">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
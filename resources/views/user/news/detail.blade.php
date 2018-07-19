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
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize">{{$news->title}}</li>
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
                @if (empty($news))
                    No Data
                @else
                <div class="row">
                    <div class="col-xs-12">
                        {!!$news->desc!!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- shop end -->
@endsection
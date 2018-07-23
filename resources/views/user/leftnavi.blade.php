@if (!empty($mProductCate))
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Danh mục</h4>
        <ul>
            @foreach ($mProductCate as $value)
                @php $active = ($cateID == $value->id) ? "active" : ""; @endphp
                <li class="{{$active}}"><a href="/p/?category={{$value->id}}&t={{$value->seo_link}}"><i class="fa fa-angle-right"></i>{{$value->title}}</a> </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@if (!empty($mProductType))
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Thể loại</h4>
        <ul>
            @foreach ($mProductType as $value)
                @php $active = ($typeID == $value->id) ? "active" : ""; @endphp
                <li class="{{$active}}"><a href="/p/?type={{$value->id}}&t={{$value->seo_link}}"><i class="fa fa-angle-right"></i>{{$value->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@if (!empty($mBrand))
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Thương hiệu</h4>
        <ul>
            @foreach ($mBrand as $value)
                @php $active = ($brandID == $value->id) ? "active" : ""; @endphp
                <li class="{{$active}}"><a href="/p/?brand={{$value->id}}&t={{$value->seo_link}}"><i class="fa fa-angle-right"></i>{{$value->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Lọc theo giá</h4>
        <div class="price-filter">
            <div id="slider-range"></div>
            <div class="price-slider-amount">
                <div class="slider-values">
                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Kích cỡ</h4>
        <ul class="size-widget">
            <li @if (!empty($size) && $size == "xs") class="active" @endif ><a href="/p/?size=xs">XS</a></li>
            <li @if (!empty($size) && $size == "s") class="active" @endif ><a href="/p/?size=s">S</a></li>
            <li @if (!empty($size) && $size == "m") class="active" @endif ><a href="/p/?size=m">M</a></li>
            <li @if (!empty($size) && $size == "l") class="active" @endif ><a href="/p/?size=xs">L</a></li>
            <li @if (!empty($size) && $size == "xl") class="active" @endif ><a href="/p/?size=xl">XL</a></li>
        </ul>
    </div>
</div>
@if (!empty($mTag))
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">tags</h4>
        <ul class="widget-tag">
            @foreach ($mTag as $tag)
                <li class="active"><a href="{{$tag->link}}">{{$tag->title}}</a></li>
            @endforeach
        </ul >
    </div>
</div>
@endif
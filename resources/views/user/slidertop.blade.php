@if (!empty($listSlider))
<div class="preview-2">
    <div id="nivoslider" class="slides">
        @foreach ($listSlider as $key => $value)
            @if (!empty($value->simg_detail) && file_exists(BASE_IMG."slider/".$value->simg_detail))
                @php $no = $key + 1; @endphp
                <img src="/public/upload/images/slider/{{$value->simg_detail}}" alt="" title="#slider-direction-{{$no}}" />
            @endif
        @endforeach
    </div>
    <!-- direction 1 -->
    @foreach ($listSlider as $key => $value)
        @if (!empty($value->simg_detail) && file_exists(BASE_IMG."slider/".$value->simg_detail))
        @php $no = $key + 1; @endphp
            <div id="slider-direction-{{$no}}" class="slider-direction">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="nivo_text">
                                    <div class="nivo_text-wrapper">
                                       {!! $value->desc !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endif
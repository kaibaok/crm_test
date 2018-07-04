@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('css')
    <link rel="stylesheet" href="/public/admin/js/multiselect/css/multi-select.css">
@endsection
@section('rightcontent')
@php $url = URL_IMG."home/" @endphp
<form id="demo-form" class="form-horizontal" enctype="multipart/form-data" method="post" action="">
{{ csrf_field() }}
<div>
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                    <a class="btn btn-info" href="/admin/">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
    <input type="hidden" id="himg1_url" name="himg1_url" value="{{isset($home['himg1']) ? $home['himg1'] : '' }}" />
    <input type="hidden" id="himg2_url" name="himg2_url" value="{{isset($home['himg2']) ? $home['himg2'] : '' }}" />
    <input type="hidden" id="himg3_url" name="himg3_url" value="{{isset($home['himg3']) ? $home['himg3'] : '' }}" />
    <input type="hidden" id="himg4_url" name="himg4_url" value="{{isset($home['himg4']) ? $home['himg4'] : '' }}" />
    <input type="hidden" id="himg5_url" name="himg5_url" value="{{isset($home['himg5']) ? $home['himg5'] : '' }}" />
    <input type="hidden" id="himg6_url" name="himg6_url" value="{{isset($home['himg6']) ? $home['himg6'] : '' }}" />
    <input type="hidden" id="himg7_url" name="himg7_url" value="{{isset($home['himg7']) ? $home['himg7'] : '' }}" />
    <input type="hidden" id="himg8_url" name="himg8_url" value="{{isset($home['himg8']) ? $home['himg8'] : '' }}" />
    <input type="hidden" id="himg9_url" name="himg9_url" value="{{isset($home['himg9']) ? $home['himg9'] : '' }}" />
    <input type="hidden" id="himg10_url" name="himg10_url" value="{{isset($home['himg10']) ? $home['himg10'] : '' }}" />
    <input type="hidden" id="himg11_url" name="himg11_url" value="{{isset($home['himg11']) ? $home['himg11'] : '' }}" />
    <input type="hidden" id="himg12_url" name="himg12_url" value="{{isset($home['himg12']) ? $home['himg12'] : '' }}" />
    <input type="hidden" id="himg13_url" name="himg13_url" value="{{isset($home['himg13']) ? $home['himg13'] : '' }}" />
    <input type="hidden" id="himg14_url" name="himg14_url" value="{{isset($home['himg14']) ? $home['himg14'] : '' }}" />
    <input type="hidden" id="himg15_url" name="himg15_url" value="{{isset($home['himg15']) ? $home['himg15'] : '' }}" />

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>4 Banner <small>phía dưới slide show</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title1" id="title1" class="ckedit" tool='basic'> @if(isset($home['title1'])) {{ $home['title1'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link1">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link1" class="form-control col-md-7 col-xs-12" name="link1" value="{{isset($home['link1']) ?  $home['link1'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg1']) && !empty($home['himg1']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg1'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg1">
                                        </label>
                                        @if(isset($home['himg1']) && !empty($home['himg1']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg1_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg1_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title2" id="title2" class="ckedit" tool='basic'> @if(isset($home['title2'])) {{ $home['title2'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link2">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link2" class="form-control col-md-7 col-xs-12" name="link2" value="{{isset($home['link2']) ?  $home['link2'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg2']) && !empty($home['himg2']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg2'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg2">
                                        </label>
                                        @if(isset($home['himg2']) && !empty($home['himg2']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg2_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg2_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title3" id="title3" class="ckedit" tool='basic'> @if(isset($home['title3'])) {{ $home['title3'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link3">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link3" class="form-control col-md-7 col-xs-12" name="link3" value="{{isset($home['link3']) ?  $home['link3'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg3']) && !empty($home['himg3']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg3'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg3">
                                        </label>
                                        @if(isset($home['himg3']) && !empty($home['himg3']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg3_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg3_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 4</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title4" id="title4" class="ckedit" tool='basic'> @if(isset($home['title4'])) {{ $home['title4'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link4">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link4" class="form-control col-md-7 col-xs-12" name="link4" value="{{isset($home['link4']) ?  $home['link4'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg4']) && !empty($home['himg4']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg4'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg4">
                                        </label>
                                        @if(isset($home['himg4']) && !empty($home['himg4']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg4_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg4_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>5 Banner <small> nằm giữa (từ trái qua phải)</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title8" id="title8" class="ckedit" tool='basic'> @if(isset($home['title8'])) {{ $home['title8'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link8">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link8" class="form-control col-md-7 col-xs-12" name="link8" value="{{isset($home['link8']) ?  $home['link8'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg8']) && !empty($home['himg8']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg8'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg8">
                                        </label>
                                        @if(isset($home['himg8']) && !empty($home['himg8']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg8_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg8_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title9" id="title9" class="ckedit" tool='basic'> @if(isset($home['title9'])) {{ $home['title9'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link9">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link9" class="form-control col-md-7 col-xs-12" name="link9" value="{{isset($home['link9']) ?  $home['link9'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg9']) && !empty($home['himg9']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg9'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg9">
                                        </label>
                                        @if(isset($home['himg9']) && !empty($home['himg9']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg9_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg9_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title10" id="title10" class="ckedit" tool='basic'> @if(isset($home['title10'])) {{ $home['title10'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link10">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link10" class="form-control col-md-7 col-xs-12" name="link10" value="{{isset($home['link10']) ?  $home['link10'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg10']) && !empty($home['himg10']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg10'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg10">
                                        </label>
                                        @if(isset($home['himg10']) && !empty($home['himg10']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg10_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg10_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 4</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title11" id="title11" class="ckedit" tool='basic'> @if(isset($home['title11'])) {{ $home['title11'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link11">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link11" class="form-control col-md-7 col-xs-12" name="link11" value="{{isset($home['link11']) ?  $home['link11'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg11']) && !empty($home['himg11']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg11'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg11">
                                        </label>
                                        @if(isset($home['himg11']) && !empty($home['himg11']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg11_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg11_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 5</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title12" id="title12" class="ckedit" tool='basic'> @if(isset($home['title12'])) {{ $home['title12'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link12">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link12" class="form-control col-md-7 col-xs-12" name="link12" value="{{isset($home['link12']) ?  $home['link12'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 5 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg12']) && !empty($home['himg12']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg12'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg12">
                                        </label>
                                        @if(isset($home['himg12']) && !empty($home['himg12']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg12_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg12_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>3 Banner <small> góc bìa</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title5" id="title5" class="ckedit" tool='basic'> @if(isset($home['title5'])) {{ $home['title5'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link5">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link5" class="form-control col-md-7 col-xs-12" name="link5" value="{{isset($home['link5']) ?  $home['link5'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg5']) && !empty($home['himg5']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg5'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg5">
                                        </label>
                                        @if(isset($home['himg5']) && !empty($home['himg5']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg5_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg5_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title6" id="title6" class="ckedit" tool='basic'> @if(isset($home['title6'])) {{ $home['title6'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link6">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link6" class="form-control col-md-7 col-xs-12" name="link6" value="{{isset($home['link6']) ?  $home['link6'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg6']) && !empty($home['himg6']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg6'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg6">
                                        </label>
                                        @if(isset($home['himg6']) && !empty($home['himg6']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg6_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg6_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title7" id="title7" class="ckedit" tool='basic'> @if(isset($home['title7'])) {{ $home['title7'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link7">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link7" class="form-control col-md-7 col-xs-12" name="link7" value="{{isset($home['link7']) ?  $home['link7'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg7']) && !empty($home['himg7']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg7'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg7">
                                        </label>
                                        @if(isset($home['himg7']) && !empty($home['himg7']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg7_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg7_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>3 Banner <small> góc dưới</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title13" id="title13" class="ckedit" tool='basic'> @if(isset($home['title13'])) {{ $home['title13'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link13">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link13" class="form-control col-md-7 col-xs-12" name="link13" value="{{isset($home['link13']) ?  $home['link13'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg13']) && !empty($home['himg13']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg13'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg13">
                                        </label>
                                        @if(isset($home['himg13']) && !empty($home['himg13']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg13_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg13_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title14" id="title14" class="ckedit" tool='basic'> @if(isset($home['title14'])) {{ $home['title14'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link14">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link14" class="form-control col-md-7 col-xs-12" name="link14" value="{{isset($home['link14']) ?  $home['link14'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg14']) && !empty($home['himg14']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg14'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg14">
                                        </label>
                                        @if(isset($home['himg14']) && !empty($home['himg14']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg14_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg14_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title15" id="title15" class="ckedit" tool='basic'> @if(isset($home['title15'])) {{ $home['title15'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link15">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link15" class="form-control col-md-7 col-xs-12" name="link15" value="{{isset($home['link15']) ?  $home['link15'] : '' }}" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        @if(isset($home['himg15']) && !empty($home['himg15']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$home['himg15'] }}" /> @endif
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg15">
                                        </label>
                                        @if(isset($home['himg15']) && !empty($home['himg15']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg15_url">Remove</button>
                                        @else
                                        <button type="button" class="btn btn-danger" rel="himg15_url">Remove</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>List Tab Top</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group multiselect">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                @php
                                    $list_top =  !empty($home['list_top']) ? (is_array($home['list_top']) ? $home['list_top'] : explode("|", $home['list_top'])) : null;
                                @endphp

                                @if (!empty($listItemTree))
                                    <select multiple="multiple" class="multiple_select" id="list_top" name="list_top[]">
                                    @foreach ($listItemTree['item'] as $key => $value)
                                        <option disabled>{{$value}}</option>
                                        @foreach ($listItemTree['category'][$key] as $key2 => $value2)
                                        <option value='{{$key2}}' @if (!empty($list_top) && in_array($key2,$list_top)) selected @endif>{{$value2['title_category']}}</option>
                                        @endforeach
                                    @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>List Tab Middle</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group multiselect">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                @php
                                    $list_middle =  !empty($home['list_middle']) ? (is_array($home['list_middle']) ? $home['list_middle'] : explode("|", $home['list_middle'])) : null;
                                @endphp
                                @if (!empty($listItemTree))
                                    <select multiple="multiple" class="multiple_select" id="list_middle" name="list_middle[]">
                                    @foreach ($listItemTree['item'] as $key => $value)
                                        <option disabled>{{$value}}</option>
                                        @foreach ($listItemTree['category'][$key] as $key2 => $value2)
                                        <option value='{{$key2}}' @if (!empty($list_middle) && in_array($key2,$list_middle)) selected @endif>{{$value2['title_category']}}</option>
                                        @endforeach
                                    @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>List Tab Footer</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group multiselect">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                @php
                                    $list_footer =  !empty($home['list_footer']) ? (is_array($home['list_footer']) ? $home['list_footer'] : explode("|", $home['list_footer'])) : null;
                                @endphp
                                @if (!empty($listType))
                               <select multiple="multiple" class="multiple_select" id="list_footer" name="list_footer[]">
                                    @foreach ($listType as $key => $value)
                                      <option value="{{$key}}" @if (!empty($list_footer) && in_array($key,$list_footer)) selected @endif>{{$value}}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</form>
@endsection
@section('js')
    <script src="/public/admin/js/multiselect/js/jquery.multi-select.js"></script>
    <script>  @if(isset($errors['finish'])) popupNotice("{{$errors['finish']}}");  @endif  </script>
@endsection
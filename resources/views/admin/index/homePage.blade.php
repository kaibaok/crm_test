@extends("admin.layout") @section('title') {{$title}} @endsection @section('rightcontent')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
                <div class="input-group">
                    <a class="btn btn-primary" href="/admin/slider">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title1" id="title1" class="ckedit" tool='basic'> @if(isset($home['title1'])) {{ $home['title1'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title2" id="title2" class="ckedit" tool='basic'> @if(isset($home['title2'])) {{ $home['title2'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title3" id="title3" class="ckedit" tool='basic'> @if(isset($home['title3'])) {{ $home['title3'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 4</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title4" id="title4" class="ckedit" tool='basic'> @if(isset($home['title4'])) {{ $home['title4'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title8" id="title8" class="ckedit" tool='basic'> @if(isset($home['title8'])) {{ $home['title8'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title9" id="title9" class="ckedit" tool='basic'> @if(isset($home['title9'])) {{ $home['title9'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title10" id="title10" class="ckedit" tool='basic'> @if(isset($home['title10'])) {{ $home['title10'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title11" id="title11" class="ckedit" tool='basic'> @if(isset($home['title11'])) {{ $home['title11'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 5</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title12" id="title12" class="ckedit" tool='basic'> @if(isset($home['title12'])) {{ $home['title12'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 5 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title5" id="title5" class="ckedit" tool='basic'> @if(isset($home['title5'])) {{ $home['title5'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title6" id="title6" class="ckedit" tool='basic'> @if(isset($home['title6'])) {{ $home['title6'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title7" id="title7" class="ckedit" tool='basic'> @if(isset($home['title7'])) {{ $home['title7'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title13" id="title13" class="ckedit" tool='basic'> @if(isset($home['title13'])) {{ $home['title13'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title14" id="title14" class="ckedit" tool='basic'> @if(isset($home['title14'])) {{ $home['title14'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea name="title15" id="title15" class="ckedit" tool='basic'> @if(isset($home['title15'])) {{ $home['title15'] }} @endif </textarea>
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
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
        </div>
    </div>
</form>
</div>
@endsection
@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
@php $url = URL_IMG."event/"  @endphp
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/event/">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">

                {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$event['id']}}"/>
                    <input type="hidden" id="eimg_detail_url" name="eimg_detail_url" value="{{isset($event['eimg_detail']) ?  $event['eimg_detail'] : '' }}"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" @if(isset($event['status']) && $event['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" @if(isset($event['status']) && $event['status'] == 1) checked @endif /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($event['title']) ? $event['title'] : '' }}">
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($event['seo_link']) ? $event['seo_link'] : '' }}">
                        </div>
                        @if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['time_event'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Thời gian cho sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left date_picker" id="time_event" name="time_event" value="{{isset( $event['time_event']) ?  $event['time_event'] : '' }}">
                            <span class="fa fa-calendar-o form-control-feedback left"></span>
                        </div>
                        @if(isset($errors['time_event'])) <div class="alert">{{$errors['time_event']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['desc'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="desc">Mô tả <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">@if(isset($event['desc'])) {{ $event['desc'] }} @endif</textarea>
                        </div>
                        @if(isset($errors['desc'])) <div class="alert">{{$errors['desc']}}</div> @endif
                    </div>

                     <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh <span class="required">* 599x338</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($event['eimg_detail']) && !empty($event['eimg_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$event['eimg_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="eimg_detail">
                                    </label>
                                     @if(isset($event['eimg_detail']) && !empty($event['eimg_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="eimg_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="eimg_detail_url" >Remove</button>
                                     @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div><label class="control-label col-md-4 col-sm-4 col-xs-12"></label>
                        <span class="help-block">
                            <strong> @if(isset($errors['finish'])) {{$errors['finish']}} @endif </strong>
                        </span>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

@section("js")
    <script>
        var time_open = "{{$event['time_open']}}";
        var time_close = "{{$event['time_close']}}";
        // if(time_open || time_close) time_open = time_close =  moment().startOf('hour');
        @if(isset($errors['finish'])) popupNotice("{{$errors['finish']}}")  @endif
    </script>
@endsection

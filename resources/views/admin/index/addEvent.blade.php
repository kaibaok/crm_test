@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/event/">Trở về</a>
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
                <form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
                    {{ csrf_field() }}
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label>
                                <input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label> <label><input type="radio" class="flat" name="status"  value="1" /> Hiện
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($params['seo_link']) ? $params['seo_link'] : ''}}">
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['time_event'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Thời gian cho sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left date_picker" id="time_event" name="time_event" value="{{isset( $params['time_event']) ?  $params['time_event'] : '' }}">
                            <span class="fa fa-calendar-o form-control-feedback left"></span>
                        </div>
                        @if(isset($errors['time_event'])) <div class="alert">{{$errors['time_event']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="title" id="title" class="ckedit">@if(isset($params['title'])) {{ $params['title'] }} @endif</textarea>
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group">
                        <div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                        <span class="help-block">
                            <strong> @if(isset($errors['finish'])) {{$errors['finish']}} @endif </strong>
                        </span>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                            <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection



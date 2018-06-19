@extends("admin.layout")
@section('title') {{$title}} @endsection
@php $url = URL_IMG."/slider/"  @endphp

@section('rightcontent')
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

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <form id="demo-form" class="form-horizontal" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{isset($slider['id']) ?  $slider['id'] : '' }}"/>
                    <input type="hidden" id="simg_detail_url" name="simg_detail_url" value="{{isset($slider['simg_detail']) ?  $slider['simg_detail'] : '' }}"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" @if(isset($slider['status']) && $slider['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" @if(isset($slider['status']) && $slider['status'] == 1) checked @endif /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                       <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($slider['title']) ?  $slider['title'] : '' }}" >
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link">Link </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="link" class="form-control col-md-7 col-xs-12" name="link" value="{{isset($slider['link']) ?  $slider['link'] : '' }}" >
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($slider['simg_detail']) && !empty($slider['simg_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$slider['simg_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="simg_detail">
                                    </label>
                                     @if(isset($slider['simg_detail']) && !empty($slider['simg_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="simg_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="simg_detail_url" >Remove</button>
                                     @endif
                                </div>
                            </div>
                        </div>
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


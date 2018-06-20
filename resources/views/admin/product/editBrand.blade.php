@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
@php $url = URL_IMG."/brand/"  @endphp
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/brand/">Trở về</a>
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
                <form id="demo-form" class="form-horizontal form-label-left" enctype="multipart/form-data" autocomplete="on" method="post" action="">
                {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$brand['id']}}"/>
                    <input type="hidden" id="bimg_detail_url" name="bimg_detail_url" value="{{isset($brand['bimg_detail']) ?  $brand['bimg_detail'] : '' }}"/>
                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" @if(isset($brand['status']) && $brand['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" @if(isset($brand['status']) && $brand['status'] == 1) checked @endif /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên loại <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($brand['title']) ? $brand['title'] : '' }}">
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($brand['seo_link']) ? $brand['seo_link'] : '' }}">
                        </div>
                        @if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
                    </div>

                     <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($brand['bimg_detail']) && !empty($brand['bimg_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$brand['bimg_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="bimg_detail">
                                    </label>
                                     @if(isset($brand['bimg_detail']) && !empty($brand['bimg_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="bimg_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="bimg_detail_url" >Remove</button>
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
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                        </div>
                    </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection



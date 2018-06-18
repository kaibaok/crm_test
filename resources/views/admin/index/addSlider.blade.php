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
                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label><input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label>
                                <label><input type="radio" class="flat" name="status"  value="1" /> Hiện </label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($params['title']) ? $params['title'] : '' }}" required>
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                     <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="link">Link </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="link" class="form-control col-md-7 col-xs-12" name="link" value="{{isset($params['link']) ? $params['link'] : '' }}" required>
                        </div>
                        @if(isset($errors['link'])) <div class="alert">{{$errors['link']}}</div> @endif
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img_detail">
                                    </label>
                                    <button type="button" class="btn btn-danger">Remove</button>
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


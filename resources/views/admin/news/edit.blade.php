@extends("admin.layout")
@section('title') {{$title}} @endsection
@php $url = "/public/upload/images/"  @endphp

@section('rightcontent')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/news">Trở về</a>
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
                    <input type="hidden" name="id" value="{{isset($news['id']) ?  $news['id'] : '' }}"/>
                    <input type="hidden" id="img_list_url" name="img_list_url" value="{{isset($news['img_list']) ?  $news['img_list'] : '' }}"/>
                    <input type="hidden" id="img_detail_url" name="img_detail_url" value="{{isset($news['img_detail']) ?  $news['img_detail'] : '' }}"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" @if(isset($news['status']) && $news['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" @if(isset($news['status']) && $news['status'] == 1) checked @endif /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tin hot</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="is_hot" class="btn-group" data-toggle="buttons">
                                <input type="checkbox" name="is_hot" value="1" class="flat"
                                @if (isset($news['is_hot']) && $news['is_hot'] == 1) checked @endif />
                            </div>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                       <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($news['title']) ?  $news['title'] : '' }}" >
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="seo_link">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($news['seo_link']) ?  $news['seo_link'] : '' }}" >
                        </div>
                        @if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại tin <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="id_cate">
                                @if (isset($listNewsCate))
                                    @foreach ($listNewsCate as $key => $value)
                                        <?php $selected = ""; if(isset($news['id_cate']) && $key ==  $news['id_cate']) $selected = "selected"; ?>
                                            <option value="{{$key}}" {{$selected}}>{{$value}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                     <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả ngắn <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="short_desc" id="short_desc" class="ckedit">
                                @if(isset($news['short_desc']))
                                    {{$news['short_desc']}}
                                @endif
                            </textarea>
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">
                                @if(isset($news['desc']))
                                    {{$news['desc']}}
                                @endif
                            </textarea>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($news['img_list']) && !empty($news['img_list']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$news['img_list'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img_list">
                                    </label>
                                    @if(isset($news['img_list']) && !empty($news['img_list']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img_list_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img_list_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($news['img_detail']) && !empty($news['img_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$news['img_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img_detail">
                                    </label>
                                     @if(isset($news['img_detail']) && !empty($news['img_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="img_detail_url" >Remove</button>
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
                            <button type ="reset" class="btn btn-primary">Reset</button>
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


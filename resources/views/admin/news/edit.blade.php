@extends("admin.layout")
@section('title') {{$title}} @endsection
@php $url = URL_IMG."/news/"  @endphp

@section('rightcontent')
<form id="demo-form" class="form-horizontal" method="post" enctype="multipart/form-data">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/news">Trở về</a>
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
                    <input type="hidden" name="id" value="{{isset($news['id']) ?  $news['id'] : '' }}"/>
                    <input type="hidden" id="nimg_list_url" name="nimg_list_url" value="{{isset($news['nimg_list']) ?  $news['nimg_list'] : '' }}"/>
                    <input type="hidden" id="nimg_detail_url" name="nimg_detail_url" value="{{isset($news['nimg_detail']) ?  $news['nimg_detail'] : '' }}"/>
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
                                    @if(isset($news['nimg_list']) && !empty($news['nimg_list']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$news['nimg_list'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="nimg_list">
                                    </label>
                                    @if(isset($news['nimg_list']) && !empty($news['nimg_list']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="nimg_list_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="nimg_list_url">Remove</button>
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
                                    @if(isset($news['nimg_detail']) && !empty($news['nimg_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$news['nimg_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="nimg_detail">
                                    </label>
                                     @if(isset($news['nimg_detail']) && !empty($news['nimg_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="nimg_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="nimg_detail_url" >Remove</button>
                                     @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('js')
    <script>  @if(isset($errors['finish'])) popupNotice("{{$errors['finish']}}");  @endif  </script>
@endsection


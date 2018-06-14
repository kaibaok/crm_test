@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
{{-- set default url link --}}
@php $url = "/public/upload/images/"  @endphp

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/product">Trở về</a>
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
                <form id="demo-form" data-parsley-validate class="form-horizontal" method="post" action="" enctype="multipart/form-data" autocomplete="on">
                {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{isset($product['id']) ?  $product['id'] : '' }}"/>
                    <input type="hidden" id="img_list_url" name="img_list_url" value="{{isset($product['img_list']) ?  $product['img_list'] : '' }}"/>
                    <input type="hidden" id="img_detail_url" name="img_detail_url" value="{{isset($product['img_detail']) ?  $product['img_detail'] : '' }}"/>
                    <input type="hidden" id="img1_url" name="img1_url" value="{{isset($product['img1']) ?  $product['img1'] : '' }}"/>
                    <input type="hidden" id="img2_url" name="img2_url" value="{{isset($product['img2']) ?  $product['img2'] : '' }}"/>
                    <input type="hidden" id="img3_url" name="img3_url" value="{{isset($product['img3']) ?  $product['img3'] : '' }}"/>
                    <input type="hidden" id="img4_url" name="img4_url" value="{{isset($product['img4']) ?  $product['img4'] : '' }}"/>
                    <input type="hidden" id="img5_url" name="img5_url" value="{{isset($product['img5']) ?  $product['img5'] : '' }}"/>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" @if(isset($product['status']) && $product['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" @if(isset($product['status']) && $product['status'] == 1) checked @endif /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Sản phẩm mới</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="is_new" class="btn-group" data-toggle="buttons">
                                <input type="checkbox" name="is_new" value="1" class="flat"
                                @if(isset($product['is_new']) && $product['is_new'] == 1) checked @endif />
							</div>
						</div>
                    </div>

                    <div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Sản phẩm mới</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="is_best_sell" class="btn-group" data-toggle="buttons">
                                <input type="checkbox" name="is_best_sell" value="1" class="flat"
                                @if(isset($product['is_best_sell']) && $product['is_best_sell'] == 1) checked @endif />
							</div>
						</div>
					</div>

                    <div class="item form-group @if(isset($errors['title'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sản phẩm <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($product['title']) ?  $product['title'] : '' }}" >
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($product['seo_link']) ?  $product['seo_link'] : '' }}" >
                        </div>
                        @if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại sản phẩm <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="id_cate">
                                @if (isset($listCategory))
                                    @foreach ($listCategory as $key => $value)
                                        <?php $selected = ""; if(isset($product['id_cate']) && $key ==  $product['id_cate']) $selected = "selected"; ?>
                                            <option value="{{$key}}" {{$selected}}>{{$value}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Thể loại <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="type">
                                @if (isset($listType))
                                    @foreach ($listType as $key => $value)
                                        <?php $selected = ""; if(isset($product['type']) && $key ==  $product['type']) $selected = "selected"; ?>
                                            <option value="{{$key}}" {{$selected}}>{{$value}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả ngắn<span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea  name="short_desc" id="short_desc" class="ckedit">
                                @if(isset($product['short_desc']))
                                    {{ $product['short_desc'] }}
                                @endif
                            </textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">
                                @if(isset($product['desc']))
                                    {{ $product['desc'] }}
                                @endif
                            </textarea>
                        </div>
                    </div>

                    <div class="item form-group @if(isset($errors['price'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="number" id="price" class="form-control col-md-7 col-xs-12" name="price" value="{{isset($product['price']) ?  $product['price'] : '' }}" >
                        </div>
                        @if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['numbers'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Số Lượng <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                           <input type="number" id="numbers" name="numbers" class="form-control" value="{{isset($product['numbers']) ?  $product['numbers'] : '' }}" >
                        </div>
                        @if(isset($errors['numbers'])) <div class="alert">{{$errors['numbers']}}</div> @endif
                    </div>

                    <div class="item form-group @if(isset($errors['colors'])) bad @endif">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Màu sắc<span class="required">*</span> </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        @php
                            $colors        = $listColors;
                            $chooseColors = array();
                            if(!empty($product['colors'])) {
                                $chooseColors = (is_array($product['colors'])) ? $product['colors'] : explode("|", $product['colors']);
                            }
                        @endphp
                        @foreach ($colors as $key => $item)
                            @php $checked = in_array($key,$chooseColors) ? "checked" : ""; @endphp
                            <input type="checkbox" name="colors[]" value="{{$key}}" class="flat" <?= $checked; ?> />
                            <span style="background: {{$item['code']}}; vertical-align:bottom; width: 20px; height: 20px; display: inline-block; margin-right: 5px;border-radius: 50%"></span>
                        @endforeach
                        </div>
                        @if(isset($errors['colors'])) <div class="alert">{{$errors['colors']}}</div> @endif
                    </div>

                    <div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày hết hạn <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left date_picker" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at" value="{{isset($product['limit_at']) ?  $product['limit_at'] : '' }}">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                    </div>


                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img_list']) && !empty($product['img_list']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img_list'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img_list">
                                    </label>
                                    @if(isset($product['img_list']) && !empty($product['img_list']))
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
                                    @if(isset($product['img_detail']) && !empty($product['img_detail']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img_detail'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img_detail">
                                    </label>
                                     @if(isset($product['img_detail']) && !empty($product['img_detail']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img_detail_url">Remove</button>
                                     @else
                                        <button type="button" class="btn btn-danger" rel="img_detail_url" >Remove</button>
                                     @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 1 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img1']) && !empty($product['img1']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img1'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img1">
                                    </label>
                                    @if(isset($product['img1']) && !empty($product['img1']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img1_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img1_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 2 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img2']) && !empty($product['img2']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img2'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img2">
                                    </label>
                                    @if(isset($product['img2']) && !empty($product['img2']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img2_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img2_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 3 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img3']) && !empty($product['img3']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img3'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img3">
                                    </label>
                                    @if(isset($product['img3']) && !empty($product['img3']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img3_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img3_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 4 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img4']) && !empty($product['img4']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img4'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img4">
                                    </label>
                                    @if(isset($product['img4']) && !empty($product['img4']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img4_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img4_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 5 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    @if(isset($product['img5']) && !empty($product['img5']))
                                        <img style="width: 250px" class="thumbnail" src="{{ $url.$product['img5'] }}" />
                                    @endif
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="img5">
                                    </label>
                                    @if(isset($product['img5']) && !empty($product['img5']))
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img5_url">Remove</button>
                                    @else
                                        <button type="button" class="btn btn-danger" rel="img5_url">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                        <span class="help-block">
                            <strong>
                                @if(isset($errors['finish']))
                                    {{$errors['finish']}}
                                @endif
                            </strong>
                        </span>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                        <button type ="reset" class="btn btn-primary">Reset</button>
                        <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                        <input  type ="hidden" value="{{time()}}" name="code_id">
                        </div>
                    </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

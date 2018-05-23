@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('css')
  <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  {{-- CSS img upload  --}}
  <link href="/public/js/imageupload/dist/css/bootstrap-imageupload.css" rel="stylesheet">

  	<link href="/public/js/pnotify/dist/pnotify.css" rel="stylesheet">
@endsection

@section('rightcontent')
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
				<form id="demo-form" data-parsley-validate class="form-horizontal" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="status" class="btn-group" data-toggle="buttons">
		                        <label>
		                        <input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label> <label><input type="radio" class="flat" name="status"  value="1" /> Hiện
		                        </label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sản phẩm <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($params['title']) ? $params['title'] : '' }}" required>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Loại sản phảm <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="id_cate">
								@if (isset($listCategory))
									@foreach ($listCategory as $key => $value)
										<?php $selected = ""; if(isset($params['id_cate']) && $key == $params['id_cate']) $selected = "selected"; ?>
											<option value="{{$key}}" {{$selected}}>{{$value}}</option>
									@endforeach
								@endif
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Loại trọng lượng <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="type">
								@if (isset($listType))
									@foreach ($listType as $key => $value)
										<?php $selected = ""; if(isset($params['type']) && $key == $params['type']) $selected = "selected"; ?>
											<option value="{{$key}}" {{$selected}}>{{$value}}</option>
									@endforeach
								@endif
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
						<div class="col-md-10 col-sm-12 col-xs-12">
                  			<textarea  name="desc" id="desc">
                  				@if(isset($params['desc']))
                  					{{$params['desc']}}
                  				@endif
                  			</textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="number" id="price" class="form-control col-md-7 col-xs-12" name="price" value="{{isset($params['price']) ? $params['price'] : '' }}" required>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Số Lượng <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="number" id="numbers" name="numbers" class="form-control" value="{{isset($params['numbers']) ? $params['numbers'] : '' }}" required>
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Màu sắc<span class="required">*</span> </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                    @php
							$colors        = $listColors;
							$chooseColors = (!empty($params['colors'])) ? $params['colors'] : array();
							$count = 0;
	                    @endphp
	                    @foreach ($colors as $key => $item)
	                    	@php $checked = in_array($key,$chooseColors) ? "checked" : ""; $count++; @endphp
		                    <input type="checkbox" name="colors[]" value="{{$key}}" class="flat" <?= $checked; ?> />
		                    <span style="background: {{$item['code']}}; vertical-align:bottom; width: 20px; height: 20px; display: inline-block; margin-right: 5px;border-radius: 50%"></span>
		                @endforeach
                      	</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày hết hạn <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
	                        <input type="text" class="form-control has-feedback-left" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at" value="{{isset( $params['limit_at']) ?  $params['limit_at'] : '' }}">
	                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      	</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img_list">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
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

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 1 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img1">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 2</label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img2">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 3 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img3">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 4 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img4">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 5 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="img5">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
						<span class="help-block">
							<strong>
								{{$errors }}
							</strong>
						</span>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
						<button type ="reset" class="btn btn-primary">Reset</button>
						<button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
						<input  type ="hidden" value="{{time()}}" name="code_id">

						<button class="btn btn-default source" onclick="new PNotify({
                                  title: "{{$errors }}",
                                  text: 'That thing that you were trying to do worked!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Success</button>
						</div>
					</div>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('js')
<script src="/public/js/imageupload/dist/js/bootstrap-imageupload.js"></script>
<script src="/public/js/ckeditor/ckeditor.js"></script>
<script src="/public/js/ckeditor/ckfinder/ckfinder.js"></script>
{{-- bootstrap-daterangepicker --}}
<script src="/public/js/moment/min/moment.min.js"></script>
<script src="/public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- validator -->
<script type="text/javascript">
var editor = CKEDITOR.replace( 'desc', {
language: 'vi',
toolbarGroups: [
		{"name":"basicstyles","groups":["basicstyles"]},
		{"name":"links","groups":["links"]},
		{"name":"paragraph","groups":["list","blocks"]},
		{"name":"document","groups":["mode"]},
		{"name":"insert","groups":["insert"]},
		{"name":"styles","groups":["styles"]},
		{"name":"about","groups":["about"]}
	],
});

CKFinder.setupCKEditor( editor,"/public/js/ckeditor/ckfinder/");

$('#limit_at').daterangepicker({
	locale: {format: 'YYYY-MM-DD'},
	singleDatePicker: true, singleClasses: "picker_1",
});

var $imageupload = $('.imageupload');
$imageupload.imageupload();
</script>

 <!-- PNotify -->
<script src="/public/js/pnotify/dist/pnotify.js"></script>


@endsection
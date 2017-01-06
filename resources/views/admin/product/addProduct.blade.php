@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('css')
  <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection

@section('rightcontent')
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>{{$view['title']}}</h3>
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
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($_POST['title']) ? $_POST['title'] : '' }}">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Loại sản phảm <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="id_cate">
								@if (isset($view['list_category']))
									@foreach ($view['list_category'] as $key => $value)
										<?php $selected = ""; if(isset($_POST['id_cate']) && $key == $_POST['id_cate']) $selected = "selected"; ?>
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
								@if (isset($view['list_type']))
									@foreach ($view['list_type'] as $key => $value)
										<?php $selected = ""; if(isset($_POST['type']) && $key == $_POST['type']) $selected = "selected"; ?>
											<option value="{{$key}}" {{$selected}}>{{$value}}</option>
									@endforeach
								@endif
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
						<div class="col-md-10 col-sm-10 col-xs-12">
                  			<textarea  name="desc" id="desc">
                  				@if(isset($_POST['desc']))
                  					{{$_POST['desc']}}
                  				@endif
                  			</textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="number" id="price" class="form-control col-md-7 col-xs-12" name="price" value="{{isset($_POST['price']) ? $_POST['price'] : '' }}">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày hết hạn <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
	                        <input type="text" class="form-control has-feedback-left" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at">
	                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Số Lượng <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="number" id="numbers" name="numbers" class="form-control" value="{{isset($_POST['numbers']) ? $_POST['numbers'] : '' }}">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img_list" name="img_list" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img_detail" name="img_detail" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 1 </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img1" name="img1" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 2 </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img2" name="img2" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 3 </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img3" name="img3" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 4 </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img4" name="img4" class="form-control">
                      	</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 5 </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="file" id="img5" name="img5" class="form-control">
                      	</div>
					</div>

					<div class="form-group">
						<div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
						<span class="help-block">
							<strong>
								{{$view['errors'] }}
							</strong>
						</span>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
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

@section('js')
<script src="/public/js/ckeditor/ckeditor.js"></script>
{{-- bootstrap-daterangepicker --}}
<script src="/public/js/moment/min/moment.min.js"></script>
<script src="/public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- validator -->
<script type="text/javascript">
CKEDITOR.replace( 'desc', {
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
$('#limit_at').daterangepicker({
	locale: {format: 'YYYY-MM-DD'},
	singleDatePicker: true, singleClasses: "picker_1",
});
</script>
@endsection
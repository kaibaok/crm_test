@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('css')
<link rel="stylesheet" href="/public/admin/js/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="/public/admin/js/cropper/dist/cropper.min.css">
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
	            <a class="btn btn-primary" href="/admin/colors/">Trở về</a>
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
					<div class="item form-group @if(isset($errors['title'])) bad @endif">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên màu <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{isset($params['name']) ? $params['name'] : '' }}" >
						</div>
						@if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
					</div>

					<div class="item form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Code màu sắc</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="input-group code">
						    <input type="text" name='code' value="{{isset($params['code']) ? $params['code'] : '#e01ab5' }}" class="form-control" />
						    <span class="input-group-addon"><i></i></span>
						  </div>
						</div>
					</div>

					<div class="item form-group">
						<div><label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
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

@section('js')
<script src="/public/admin/js/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
<script> $(".code").colorpicker();</script>
@endsection


@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
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
				<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
					{{ csrf_field() }}
					<input type="hidden" name="code_id" value="{{time()}}">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Tên sản phẩm <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" required="required" value="{{isset($_POST['title']) ? $_POST['title'] : '' }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Loại sản phảm <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Loại trọng lượng <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Loại trọng lượng <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div id="editor" class="editor-wrapper"></div>
                  			<textarea name="descr" id="descr" style="display:none;"></textarea>
						</div>
					</div>



					{{-- <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Họ Tên <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" required="required" value="{{isset($_POST['name']) ? $_POST['name'] : '' }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="email" id="email" class="form-control col-md-7 col-xs-12" name="email" data-parsley-trigger="change" value="{{ isset($_POST['email']) ? $_POST['email'] : '' }}" required />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Mật khẩu <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="password" id="password" required="required" class="form-control col-md-7 col-xs-12" name="password" value="{{ isset($_POST['password']) ? $_POST['password'] : '' }}">
						</div>
					</div> --}}

					<div class="form-group">
						<div><label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
						<span class="help-block">
							<strong>
								{{$view['errors'] }}
							</strong>
						</span>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<button type="reset" class="btn btn-primary">Reset</button>
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



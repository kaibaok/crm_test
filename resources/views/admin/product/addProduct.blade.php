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
					<div class="form-group">
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
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<div id="gender" class="btn-group" data-toggle="buttons">
							@if (isset($view['list_gender']))

							<label class="btn btn-default {{ (isset($_POST['gender']) && $_POST['gender'] == 0) ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="0" {{ (isset($_POST['gender']) && $_POST['gender'] == 0) ? 'checked' : '' }}> &nbsp; Nam &nbsp;
							</label>
							<label class="btn btn-primary {{ (isset($_POST['gender']) && $_POST['gender'] == 1) ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="1" {{ (isset($_POST['gender']) && $_POST['gender'] == 1) ? 'checked' : '' }}> &nbsp; Nữ &nbsp;&nbsp;
							</label>
							@endif
						</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Quyền hạn</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="permission">
							@if (isset($view['list_permission']))
								@foreach ($view['list_permission'] as $key => $value)
									<?php $selected = ""; if(isset($_POST['permission']) && $key == $_POST['permission']) $selected = "selected"; ?>
										<option value="{{$key}}" {{$selected}}>{{$value}}</option>
								@endforeach
							@endif
							</select>
						</div>
					</div>
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



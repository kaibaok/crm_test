@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
<div>
	<div class="page-title">
		<div class="title_left">
			<h3>{{$title}}</h3>
		</div>
		<div class="title_right">
	        <div class=" pull-right">
	          <div class="input-group">
	          	<button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
	            <a class="btn btn-info" href="/admin/user">Trở về</a>
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
					<input type="hidden" name="id" value="{{$detail_user['id']}}"/>
					<div class="item form-group @if(isset($errors['name'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Họ Tên <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" required="required" value="{{$detail_user['name']}}">
						</div>
						@if(isset($errors['name'])) <div class="alert">{{$errors['name']}}</div> @endif
					</div>
					<div class="item form-group @if(isset($errors['email'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="email" id="email" class="form-control col-md-7 col-xs-12" name="email" value="{{$detail_user['email']}}" required />
						</div>
						@if(isset($errors['email'])) <div class="alert">{{$errors['email']}}</div> @endif
					</div>
					<div class="item form-group @if(isset($errors['password'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Mật khẩu <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="password" class="form-control col-md-7 col-xs-12" name="password" value="">
						</div>
						@if(isset($errors['password'])) <div class="alert">{{$errors['password']}}</div> @endif
					</div>
					<div class="item form-group @if(isset($errors['gender'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<div id="gender" class="btn-group" data-toggle="buttons">
							@if (isset($list_gender))
							<label class="btn btn-default {{ ($detail_user['gender'] == 0) ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="0" {{ ($detail_user['gender'] == 0) ? 'checked' : '' }}> &nbsp; Nam &nbsp;
							</label>
							<label class="btn btn-primary {{ ($detail_user['gender'] == 1) ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="1" {{ ($detail_user['gender'] == 1) ? 'checked' : '' }}> &nbsp; Nữ &nbsp;&nbsp;
							</label>
							@endif
						</div>
						</div>
						@if(isset($errors['gender'])) <div class="alert">{{$errors['gender']}}</div> @endif
					</div>
					<div class="item form-group @if(isset($errors['phone'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Số điện thoại <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="phone" class="form-control col-md-7 col-xs-12" name="phone" value="{{$detail_user['phone']}}" required />
						</div>
						@if(isset($errors['phone'])) <div class="alert">{{$errors['phone']}}</div> @endif
					</div>
					<div class="item form-group @if(isset($errors['address'])) bad @endif">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Địa chỉ <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea  name="address" id="address" class="form-control" rows="5">@if(isset($detail_user['address'])) {{$detail_user['address']}} @endif
                  			</textarea>
						</div>
						@if(isset($errors['address'])) <div class="alert">{{$errors['address']}}</div> @endif
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Quyền hạn</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="permission">
							@if (isset($list_permission))
								@foreach ($list_permission as $key => $value)
									<?php $selected = ""; if($key == $detail_user['permission']) $selected = "selected"; ?>
										<option value="{{$key}}" {{$selected}}>{{$value}}</option>
								@endforeach
							@endif
							</select>
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
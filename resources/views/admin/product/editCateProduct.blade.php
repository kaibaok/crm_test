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
	            <a class="btn btn-primary" href="/admin/cate-product/">Trở về</a>
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
					<input type="hidden" name="id" value="{{$view['category']['id']}}"/>

					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div id="status" class="btn-group" data-toggle="buttons">
		                      <label><input type="radio" class="flat" name="status" value="0" @if(isset($view['category']['status']) && $view['category']['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
		                      <label><input type="radio" class="flat" name="status"  value="1" @if(isset($view['category']['status']) && $view['category']['status'] == 1) checked @endif /> Hiện</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên loại <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" required="required" value="{{isset($view['category']['title']) ? $view['category']['title'] : '' }}">
						</div>
					</div>

					<div class="form-group">
						<div><label class="control-label col-md-4 col-sm-4 col-xs-12"></label>
						<span class="help-block">
							<strong>
								{{$view['errors'] }}
							</strong>
						</span>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
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



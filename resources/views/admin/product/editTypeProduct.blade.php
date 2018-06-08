@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>{{$title}}</h3>
		</div>
		<div class="title_right">
	        <div class=" pull-right">
	          <div class="input-group">
	            <a class="btn btn-primary" href="/admin/type-product/">Trở về</a>
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
					<input type="hidden" name="id" value="{{$type->id}}"/>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên Loại <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" required="required" value="{{isset($type->title) ? $type->title : '' }}">
						</div>
					</div>
					<div class="form-group">
						<div><label class="control-label col-md-4 col-sm-4 col-xs-12"></label>
						<span class="help-block">
							<strong>
								{{$errors }}
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



@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>{{$title}}</h3>
		</div>
		<div class="title_right">
	        <div class=" pull-right">
	          <div class="input-group">
	          	<button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
	            <a class="btn btn-info" href="/admin/type-product/">Trở về</a>
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
					<input type="hidden" name="id" value="{{$type['id']}}"/>
					<div class="item form-group  @if(isset($errors['title'])) bad @endif">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên Loại <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="{{isset($type['title']) ? $type['title'] : '' }}">
						</div>
						@if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
					</div>
					<div class="item form-group  @if(isset($errors['seo_link'])) bad @endif">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Seo Link <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="{{isset($type['seo_link']) ? $type['seo_link'] : '' }}">
						</div>
						@if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
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


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
	            <a class="btn btn-info" href="/admin/cate-product/">Trở về</a>
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
					<input type="hidden" name="id" value="{{$category['id']}}"/>
					<div class="item form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div id="status" class="btn-group" data-toggle="buttons">
		                      <label><input type="radio" class="flat" name="status" value="0" @if(isset($category['status']) && $category['status'] == 0) checked @endif /> Ẩn </label>&nbsp;
		                      <label><input type="radio" class="flat" name="status"  value="1" @if(isset($category['status']) && $category['status'] == 1) checked @endif /> Hiện</label>
							</div>
						</div>
					</div>

					<div class="item form-group @if(isset($errors['title'])) bad @endif">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên loại <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title"  value="{{isset($category['title']) ? $category['title'] : '' }}">
						</div>
						@if(isset($errors['title'])) <div class="alert">{{$errors['title']}}</div> @endif
					</div>

					<div class="item form-group @if(isset($errors['seo_link'])) bad @endif">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Seo Link <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link"  value="{{isset($category['seo_link']) ? $category['seo_link'] : '' }}">
						</div>
						@if(isset($errors['seo_link'])) <div class="alert">{{$errors['seo_link']}}</div> @endif
					</div>

					<div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Thể loại <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="item_id">
                                @if (isset($listItem))
                                    @foreach ($listItem as $key => $value)
                                        <?php $selected = ""; if(isset($category['item_id']) && $key ==  $category['item_id']) $selected = "selected"; ?>
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
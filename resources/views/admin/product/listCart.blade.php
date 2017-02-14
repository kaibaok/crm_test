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
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
              <input type="hidden" name="_token" id="token_alproduct" value="{{ csrf_token() }}">
              <input type="text" class="form-control" placeholder="Tìm kiếm..." id="txt_alproduct">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_search_alproduct">Tìm</button>
              </span>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-5 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/product/add">Thêm mới</a>
          </div>
        </div>
      </div>
    </div>


    <div class="clearfix"></div>

   <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tìm kiếm <small> danh sách đặt hàng</small></h2>
          <ul class="nav navbar-right">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form class="form-horizontal form-label-left" method="post">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Userid
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="{{isset($_POST['userid']) ? $_POST['userid'] : '' }}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên khách hàng 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="{{isset($_POST['name']) ? $_POST['name'] : '' }}">
              </div>
            </div>

            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{isset($_POST['email']) ? $_POST['email'] : '' }}">
              </div>
            </div>

            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="{{isset($_POST['address']) ? $_POST['address'] : '' }}">
              </div>
            </div>

        	<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày đặt hàng</label>
                <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" name="registered_date" value="{{isset($_POST['registered_date']) ? $_POST['registered_date'] : '' }}">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              	</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày giao hàng</label>
                <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="{{isset($_POST['ship_date']) ? $_POST['ship_date'] : '' }}">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              	</div>
			</div>
	
            <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0">Thanh toán</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div id="paid" class="btn-group" data-toggle="buttons">
		                <label>
		                <input type="radio" class="flat" name="paid" value="0" /> Đã thanh toán </label> <label><input type="radio" class="flat" name="paid"  value="1" /> Chưa thanh toán
		                </label>		               
					</div>
				</div>
			</div>
			
		  	<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0">Loại thanh toán</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div id="type" class="btn-group" data-toggle="buttons">
		                <label>
		                <input type="radio" class="flat" name="type" value="0" /> Có đăng ký </label> <label><input type="radio" class="flat" name="type"  value="1" /> Ko đăng ký
		                </label>		               
					</div>
				</div>
			</div>
			

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
   </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive" id="">
              <table class="table table-striped jambo_table bulk_action" >
                <thead>
                  <tr class="headings">
                    <th class="column-title">No</th>
                    <th class="column-title">Hiển thị</th>
                    <th class="column-title">Mã Barcode</th>
                    <th class="column-title">Tên sản phẩm</th>
                    <th class="column-title">Loại sản phẩm</th>
                    <th class="column-title">Giá</th>
                    <th class="column-title">Trọng lượng</th>
                    <th class="column-title">Ngày hết hạn</th>
                    <th class="column-title">Ngày nhập hàng</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_alproduct">
                  @php
                    $no       = 1;
                    $category = $view['list_category'];
                    $type     = $view['list_type'];
                  @endphp

                  @foreach ($view['list_product'] as $value)
                  <tr class="even pointer">
                    <td>{{$no++}}</td>
                    <td>
                      @if ($value['status'] == 1)
                        <a class="btn_status_product" href="/admin/product/status/{{$value['id']}}" rel="{{$value['id']}}"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      @else
                        <a class="btn_status_product" href="/admin/product/status/{{$value['id']}}" rel="{{$value['id']}}"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      @endif
                    </td>
                    <td>{{$value['code_id']}}</td>
                    <td>{{$value['title']}}</td>
                    <td>{{$category[$value['id_cate']]}}</td>
                    <td>{{$value['price']}}</td>
                    <td>{{$type[$value['type']]}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày hết hạn"></i> {{$value['limit_at']}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày nhập hàng"></i> {{$value['created_at']}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> {{$value['updated_at']}}</td>
                    <td class="last"> <a href="/admin/product/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/product/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$view['list_product']->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script src="/public/js/moment/min/moment.min.js"></script>
<script src="/public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
$('#registered_date,#ship_date').daterangepicker({
	locale: {format: 'YYYY-MM-DD'},
	singleDatePicker: true, singleClasses: "picker_1",
});
</script>
@endsection

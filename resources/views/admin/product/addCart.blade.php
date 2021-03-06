@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('css')
    <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                <a class="btn btn-primary" href="/admin/product/cart">Trở về</a>
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
                <form class="form-horizontal form-label-left" method="get">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="{{!empty($_POST['userid']) ? $_POST['userid'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="{{!empty($_POST['name']) ? $_POST['name'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{!empty($_POST['email']) ? $_POST['email'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="{{!empty($_POST['address']) ? $_POST['address'] : '' }}">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Điện thoại</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="{{!empty($_POST['phone']) ? $_POST['phone'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày đặt hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" name="registered_date" value="{{!empty($_POST['registered_date']) ? $_POST['registered_date'] : '' }}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày giao hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="{{!empty($_POST['ship_date']) ? $_POST['ship_date'] : '' }}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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
    <div class="row">
        <div class="col-md-6 col-xs-12">
             <div class="x_panel">
                  <div class="x_title">
                    <h2>Sản Phẩm</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mã sản phẩm
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="tags" name="name" class="form-control col-md-7 col-xs-12" value="{{!empty($_POST['name']) ? $_POST['name'] : '' }}">
                            </div>
                        </div>
                  </div>
                   <div class="x_content">
                        <div class="form-group">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Màu sắc</th>
                                <th>Xử lý</th>
                            </thead>
                            </table>
                            </div>
                        </div>
                  </div>
            </div>
        </div>

         <div class="col-md-6 col-xs-12">
             <div class="x_panel">
                  <div class="x_title">
                    <h2>Giỏ hàng</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mã sản phẩm
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="tags" name="name" class="form-control col-md-7 col-xs-12" value="{{!empty($_POST['name']) ? $_POST['name'] : '' }}">
                            </div>
                        </div>
                  </div>
                </div>
        </div>
    </div>
</div>


@endsection
@section('js')
<script src="/public/admin/js/moment/min/moment.min.js"></script>
<script src="/public/admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
$('#registered_date,#ship_date').daterangepicker({
    locale: {
        format: 'YYYY-MM-DD'
    },
    singleDatePicker: true,
    singleClasses: "picker_1",
});
</script>

@endsection


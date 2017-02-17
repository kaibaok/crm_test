@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('css') <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> @endsection
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
                    <a class="btn btn-primary" href="/admin/product/cart/add">Thêm đơn hàng</a>
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
                    <form class="form-horizontal form-label-left" method="get">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Userid
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="{{isset($_GET['userid']) ? $_GET['userid'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="{{isset($_GET['name']) ? $_GET['name'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{isset($_GET['email']) ? $_GET['email'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="{{isset($_GET['address']) ? $_GET['address'] : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày đặt hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" name="registered_date" value="{{isset($_GET['registered_date']) ? $_GET['registered_date'] : '' }}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày giao hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="{{isset($_GET['ship_date']) ? $_GET['ship_date'] : '' }}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0">Thanh toán</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="paid" class="btn-group" data-toggle="buttons">
                                    @php
                                        foreach ($view['list_paid'] as $key => $value) {
                                            $select = "";
                                            if(isset($_GET['paid']) && $key == $_GET['paid']) $select = "checked";
                                    @endphp
                                        <label> <input type="radio" class="flat" name="paid" value="{{$key}}" {{$select}} /> {{$value}} </label>
                                    @php } @endphp

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="padding-top: 0">Loại thanh toán</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="type" class="btn-group" data-toggle="buttons">
                                    @php
                                        foreach ($view['list_type'] as $key => $value) {
                                            $select = "";
                                            if(isset($_GET['type']) && $key == $_GET['type']) $select = "checked";
                                    @endphp
                                        <label> <input type="radio" class="flat" name="type" value="{{$key}}" {{$select}} /> {{$value}} </label>
                                    @php } @endphp
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
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">No</th>
                                    <th class="column-title">Người đặt hàng</th>
                                    <th class="column-title">Người nhận hàng</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Địa chỉ giao</th>
                                    <th class="column-title">Số điện thoại</th>
                                    <th class="column-title">Ngày đặt hàng</th>
                                    <th class="column-title">Ngày giao hàng</th>
                                    <th class="column-title">Trạng thái thanh toán</th>
                                    <th class="column-title">Ghi chú</th>
                                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tbl_alproduct">
                                @php
                                    $no = 1;
                                    $m_user = new App\User();
                                @endphp
                                @foreach ($view['list_cart'] as $value)
                                @php  $info_user = $m_user->getInfoByUserid($value['userid']); @endphp
                                <tr class="even pointer">
                                    <td>{{$no++}}</td>
                                    <td>
                                        @php if(isset($info_user[0]['name']))
                                            echo "<a href='/admin/user/edit/{$value['userid']}'>".$info_user[0]['name']." </a>"
                                        @endphp
                                    </td>
                                    <td>{{$value['name']}}</td>
                                    <td>{{$value['email']}}</td>
                                    <td>{{$value['address']}}</td>
                                    <td>{{$value['phone']}}</td>
                                    <td>{{$value['registered_date']}}</td>
                                    <td><i class="success fa fa-clock-o" title="Ngày đặt hàng"></i> {{$value['registered_date']}}</td>
                                    <td><i class="success fa fa-clock-o" title="Ngày giao hàng"></i> {{$value['ship_date']}}</td>
                                    <td>{{$value['paid']}}</td>
                                    <td class="last"> <a href="/admin/product/cart/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/product/cart/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="btn-toolbar pull-right">
                            {{$view['list_cart']->links() }}
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
    locale: {
        format: 'YYYY-MM-DD'
    },
    singleDatePicker: true,
    singleClasses: "picker_1",
});
</script>
@endsection

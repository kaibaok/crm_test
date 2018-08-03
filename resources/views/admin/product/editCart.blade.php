@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('css')
    <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 @endsection
@section('rightcontent')
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
    <div>
        <div class="page-title">
            <div class="title_left">
                <h3>{{$title}}</h3>
            </div>
            <div class="title_right">
                <div class=" pull-right">
                  <div class="input-group">
                    <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                    <a class="btn btn-info" href="/admin/cart">Trở về</a>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thông tin khách hàng</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {{ csrf_field() }}
                        <div class="item form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Mã Giảm giá
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input readonly="readonly" type="text" id="code" name="code" class="form-control col-md-7 col-xs-12" value="{{!empty($cart['code']) ? $cart['code'] : '' }}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Mã khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <a href="/admin/user/edit/{{$cart['userid']}}"></a>
                                <input readonly="" type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="{{!empty($cart['userid']) ? $cart['userid'] : '' }}">
                            </div>
                        </div>
                        <div class="item form-group @if(isset($errors['full_name'])) bad @endif">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Tên khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="full_name" class="form-control col-md-7 col-xs-12" value="{{!empty($cart['full_name']) ? $cart['full_name'] : '' }}">
                            </div>
                            @if(isset($errors['full_name'])) <div class="alert">{{$errors['full_name']}}</div> @endif
                        </div>
                        <div class="item form-group @if(isset($errors['email'])) bad @endif">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{!empty($cart['email']) ? $cart['email'] : '' }}">
                            </div>
                            @if(isset($errors['email'])) <div class="alert">{{$errors['email']}}</div> @endif
                        </div>
                        <div class="item form-group @if(isset($errors['address1'])) bad @endif">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Địa chỉ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address1" value="{{!empty($cart['address1']) ? $cart['address1'] : '' }}">
                            </div>
                            @if(isset($errors['address1'])) <div class="alert">{{$errors['address1']}}</div> @endif
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Địa chỉ 2</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address2" value="{{!empty($cart['address2']) ? $cart['address2'] : '' }}">
                            </div>
                        </div>
                         <div class="item form-group @if(isset($errors['phone'])) bad @endif">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Điện thoại</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="{{!empty($cart['phone']) ? $cart['phone'] : '' }}">
                            </div>
                             @if(isset($errors['phone'])) <div class="alert">{{$errors['phone']}}</div> @endif
                        </div>
                          <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Phường/xã</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="stage" value="{{!empty($cart['stage']) ? $cart['stage'] : '' }}">
                            </div>
                        </div>
                          <div class="item form-group @if(isset($errors['district'])) bad @endif">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Quận</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="district" value="{{!empty($cart['district']) ? $cart['district'] : '' }}">
                            </div>
                            @if(isset($errors['district'])) <div class="alert">{{$errors['district']}}</div> @endif
                        </div>
                          <div class="item form-group @if(isset($errors['city'])) bad @endif">
                            <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Thành phố</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="city" value="{{!empty($cart['city']) ? $cart['city'] : '' }}">
                            </div>
                            @if(isset($errors['city'])) <div class="alert">{{$errors['city']}}</div> @endif
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Ngày đặt hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" value="{{!empty($cart['created_at']) ? $cart['created_at'] : '' }}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Ngày giao hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="{{(!empty($cart['ship_date']) && $cart['ship_date'] != '0000-00-00') ? $cart['ship_date'] : ''}}">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-sm-12">
                 <div class="x_panel">
                      <div class="x_title">
                        <h2>Giỏ hàng</h2>
                        <div class="clearfix"></div>
                      </div>
                       <div class="x_content">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                            <th>Sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Giá giảm</th>
                                            <th>Số lượng</th>
                                            <th>Màu sắc</th>
                                            <th>Kích thước</th>
                                            <th>Xử lý</th>
                                        </thead>
                                        <thbody>
                                            @if(!empty($cartDetail))
                                            @foreach ($cartDetail as $value)
                                                <tr>
                                                    <td><a href="/admin/product/edit/{{$value->product_id}}">{{$value->title}}</a></td>
                                                    <td>{{$value->price}}</td>
                                                    <td>{{$value->dprice}}</td>
                                                    <td>{{$value->number}}</td>
                                                    <td><span style="background:  {{$value->code}} ; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span>
                                                    </td>
                                                    <td>{{$value->size}}</td>
                                                    <td class="last"> <a href="/admin/cartDetail/edit/{{$value->id}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/cartDetail/del/{{$value->id}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </thbody>
                                    </table>
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

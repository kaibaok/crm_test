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
                <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên người đặt <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="userid" class="form-control col-md-7 col-xs-12" name="userid" value="{{isset($_POST['userid']) ? $_POST['userid'] : '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên người nhận <span class="required">*</span> </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{isset($_POST['name']) ? $_POST['name'] : '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="email" class="form-control col-md-7 col-xs-12" name="email" value="{{isset($_POST['email']) ? $_POST['email'] : '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-6">Address</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <textarea class="form-control"  name="address" id="address" rows="4">
                                @if(isset($_POST['address']))
                                    {{$_POST['address']}}
                                @endif
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Số điện thoại <span class="required">*</span> </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="phone" class="form-control col-md-7 col-xs-12" name="phone" value="{{isset($_POST['phone']) ? $_POST['phone'] : '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày giao hàng </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at" value="{{isset( $_POST['limit_at']) ?  $_POST['limit_at'] : '' }}">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
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



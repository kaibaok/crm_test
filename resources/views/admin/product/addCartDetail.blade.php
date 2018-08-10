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
                <a class="btn btn-info" href="/admin/cart/edit/{{ $cartID }}">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content autocomp">
                    {{ csrf_field() }}
                    <input type="hidden" name="cart_id" value="{{ $cartID }}">
                    <input type="hidden" name="product_id" id="product_id" value="{{isset($params['product_id']) ? $params['product_id'] : ''}}">
                     <div class="item form-group  @if(isset($errors['name'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Tên sản phẩm <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="product_name" class="form-control col-md-7 col-xs-12" name="name" value="{{isset($params['name']) ? $params['name'] : ''}}">
                        </div>
                        @if(isset($errors['name'])) <div class="alert">{{$errors['name']}}</div> @endif
                    </div>
                    <div class="item form-group  @if(isset($errors['price'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Giá<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="price" class="form-control col-md-7 col-xs-12" name="price" value="{{isset($params['price']) ? $params['price'] : ''}}">
                        </div>
                        @if(isset($errors['price'])) <div class="alert">{{$errors['price']}}</div> @endif
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Giá giảm
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="dprice" class="form-control col-md-7 col-xs-12" name="dprice" value="{{isset($params['dprice']) ? $params['dprice'] : ''}}">
                        </div>
                    </div>
                    <div class="item form-group  @if(isset($errors['number'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Số lượng <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="number" class="form-control col-md-7 col-xs-12" name="number" value="{{isset($params['number']) ? $params['number'] : ''}}">
                        </div>
                        @if(isset($errors['number'])) <div class="alert">{{$errors['number']}}</div> @endif
                    </div>

                    <div class="item form-group  @if(isset($errors['color'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Màu sắc <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select id="color" class="form-control col-md-7 col-xs-12" name="color">
                                @if(!empty($product))
                                    @php $chooseColor = explode("|",$product->colors); @endphp
                                    @foreach($listColors as $key => $value)
                                        @if(in_array($key, $chooseColor))
                                            @php $select = ($key == $params['color']) ? 'selected' : '' @endphp
                                            <option value="{{$key}}" style="color:{{ $value['code'] }}" {{ $select }}> {{ $value['name'] }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        @if(isset($errors['color'])) <div class="alert">{{$errors['color']}}</div> @endif
                    </div>

                    <div class="item form-group  @if(isset($errors['size'])) bad @endif">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Kích thước <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select id="size" class="form-control col-md-7 col-xs-12" name="size">
                                @if(!empty($product))
                                    @php $listSize = json_decode($product->size) @endphp
                                    @foreach($listSize as $key => $value)
                                        @if($value)
                                            @php $select = ($params['size'] == $key) ? "selected" : ""; @endphp
                                            <option value="{{$key}}" style="color:{{ $key }}" {{ $select }}> {{ strtoupper($key) }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        @if(isset($errors['size'])) <div class="alert">{{$errors['size']}}</div> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('js')
    <script>
        var listColors = listSize = null;
        @if(isset($errors['finish'])) popupNotice("{{$errors['finish']}}");  @endif
        @if(!empty($listColors)) listColors = {!! json_encode($listColors)!!};  @endif
     </script>
@endsection
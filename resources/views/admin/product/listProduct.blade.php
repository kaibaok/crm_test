@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
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
                    <th class="column-title">Màu sắc</th>
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
                    $colors   = $view['list_colors'];
                  @endphp

                  @foreach ($view['list_product'] as $value)
                      @php
                        $color_choose = explode("|", $value['colors']);
                      @endphp

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
                    <td> @foreach ($color_choose as $item)
                        <span style="background: {{$colors[$item]['code']}}; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span>
                        @endforeach
                    </td>
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


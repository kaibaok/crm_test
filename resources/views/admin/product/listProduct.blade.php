@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách sản phẩm</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
              <input type="hidden" name="_token" id="token_aluser" value="{{ csrf_token() }}">
              <input type="text" class="form-control" placeholder="Tìm kiếm..." id="txt_aluser">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_search_aluser">Tìm</button>
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
                    <th class="column-title">Ngày hết hạn</th>
                    <th class="column-title">Ngày nhập hàng</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_aluser">
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
                        <i class="success fa fa-eye" title="Hiển thị"></i>
                      @else
                        <i class="success fa fa-eye-slash" title="Ẩn"></i>
                      @endif
                    </td>
                    <td>{{$value['codeID']}}</td>
                    <td>{{$value['name']}}</td>
                    <td>{{$category[$value['idCate']]}}</td>
                    <td>{{$value['price']}}</td>
                    <td>{{$type[$value['type']]}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày hết hạn"></i> {{$value['limitDate']}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày nhập hàng"></i> {{$value['createdDate']}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> {{$value['updatedDate']}}</td>
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

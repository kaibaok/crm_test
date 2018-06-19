@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{$title}}</h3>
      </div>
      <div class="title_right">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
          <form method="get">
            <div class="input-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="page" value="1">
                  <input type="text" name="txtSearch" class="form-control" placeholder="Tìm kiếm...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" >Tìm</button>
                  </span>
            </div>
          </form>
        </div>
        <div class="form-group pull-right">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/item-product/add">Thêm mới</a>
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
                    <th class="column-title">Tên danh mục</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_aluser">
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($listItem as $value)
                  <tr class="even pointer">
                    <td>{{$no++}}</td>
                    <td>
                      @if ($value->status == 1)
                        <a href="/admin/item-product/status/{{$value->id}}" class="btn_status_cproduct" rel="{{$value->id}}"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      @else
                        <a href="/admin/item-product/status/{{$value->id}}" class="btn_status_cproduct" rel="{{$value->id}}"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      @endif
                    </td>
                    <td>{{$value->title}}</td>
                    <td class="last"> <a href="/admin/item-product/edit/{{$value->id}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/item-product/del/{{$value->id}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$listItem->appends($conditionPage)->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
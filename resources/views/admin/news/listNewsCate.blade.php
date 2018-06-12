@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{$title}}</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/news-cate/add">Thêm mới</a>
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
                  @foreach ($listNewsCate as $value)
                  <tr class="even pointer">
                    <td>{{$no++}}</td>
                    <td>
                      @if ($value->status == 1)
                        <a href="/admin/news-cate/status/{{$value->id}}" class="btn_status_cproduct" rel="{{$value->id}}"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      @else
                        <a href="/admin/news-cate/status/{{$value->id}}" class="btn_status_cproduct" rel="{{$value->id}}"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      @endif
                    </td>
                    <td>{{$value->title}}</td>
                    <td class="last"> <a href="/admin/news-cate/edit/{{$value->id}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/news-cate/del/{{$value->id}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$listNewsCate->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
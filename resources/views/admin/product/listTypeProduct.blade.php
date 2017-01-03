@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{$view['title']}}</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/type-product/add">Thêm mới</a>
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
                    <th class="column-title">Loại trọng lượng</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_aluser">
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($view['list_type'] as $value)
                  <tr class="even pointer">
                    <td>{{$no++}}</td>
                    <td>{{$value['title']}}</td>
                    <td class="last"> <a href="/admin/type-product/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/type-product/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$view['list_type']->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
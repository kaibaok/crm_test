@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{$title}}</h3>
      </div>
      <div class="title_right">
        <div class="col-md-3 col-sm-3 col-xs-5 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/colors/add">Thêm mới</a>
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
                    <th class="column-title">Màu sắc</th>
                    <th class="column-title">Mã màu</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_alproduct">
                  @php
                    $no       = 1;
                  @endphp

                  @foreach ($listColors as $value)
                  <tr class="even pointer">
                    <td>{{$no++}}</td>
                    <td>{{$value->name}}</td>
                    <td> <span style="background: {{$value->code}}; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span> </td>
                    <td class="last"> <a href="/admin/colors/edit/{{$value->id}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/colors/del/{{$value->id}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$listColors->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


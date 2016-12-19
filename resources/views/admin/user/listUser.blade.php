@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách User </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="btn_search">Tìm</button>
            </span>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-5 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/user/add">Thêm mới</a>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No</th>
                    <th class="column-title">Name </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">Created At </th>
                    <th class="column-title">Updated At </th>
                    <th class="column-title">Permission</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @php
                    $no         = 1;
                    $permission = $view['list_permission'];
                  @endphp

                  @foreach ($view['list_user'] as $value)
                  <tr class="even pointer">
                    <td class=" ">{{$no++}}</td>
                    <td class=" ">{{$value['name']}}</td>
                    <td class=" ">{{$value['email']}}</td>
                    <td class=" "><i class="success fa fa-clock-o"></i> {{$value['created_at']}}</td>
                    <td class=" "><i class="success fa fa-clock-o"></i> {{$value['updated_at']}}</td>
                    <td class="a-right a-right "><i class="success fa fa-user"></i> {{$permission[$value['permission']]}}</td>
                    <td class=" last"> <a href="/admin/user/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/user/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                {{$view['list_user']->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

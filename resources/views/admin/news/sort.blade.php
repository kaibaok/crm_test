@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{$title}}</h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right top_search">
          <div class="input-group">
            <button class="btn btn-primary" id="btn_save">Lưu</button>
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
                    <th class="column-title">Tin tức</th>
                    <th class="column-title">Mô tả ngắn</th>
                    <th class="column-title">Loại tin</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span> </th>
                  </tr>
                </thead>

                <tbody id="sortable" class="sortable">
                  @php
                    $no = 1;
                  @endphp

                  @foreach ($listNews as $value)
                  <tr class="even pointer" id="item-{{$value->id}}">
                    <td>{{$no++}}</td>
                    <td>
                      @if ($value->status)
                        <a class="btn_status_product" href="/admin/news/status/{{$value->id}}" rel="{{$value->id}}"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      @else
                        <a class="btn_status_product" href="/admin/news/status/{{$value->id}}" rel="{{$value->id}}"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      @endif
                    </td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->short_desc}}</td>
                    <td>{{$listNewsCate[$value->id_cate]}}</td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> {{$value->updated_at}}</td>
                    <td class="last"> <a href="/admin/news/edit/{{$value->id}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/news/del/{{$value->id}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                 {{$listNews}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script>
  var idSortable = "product";
  var curentPage = "{{$page}}";

</script>
@endsection


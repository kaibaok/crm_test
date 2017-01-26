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
  <td>{{$value['code_id']}}</td>
  <td>{{$value['title']}}</td>
  <td>{{$category[$value['id_cate']]}}</td>
  <td>{{$value['price']}}</td>
  <td>{{$type[$value['type']]}}</td>
  <td><i class="success fa fa-clock-o" title="Ngày hết hạn"></i> {{$value['limit_at']}}</td>
  <td><i class="success fa fa-clock-o" title="Ngày nhập hàng"></i> {{$value['created_at']}}</td>
  <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> {{$value['updated_at']}}</td>
  <td class="last"> <a href="/admin/product/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/product/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
  </tr>
@endforeach

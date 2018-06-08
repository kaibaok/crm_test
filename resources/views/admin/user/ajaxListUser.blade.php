@php
  $no         = 1;
  $permission = $list_permission;
@endphp

@foreach ($list_user as $value)
<tr class="even pointer">
  <td class=" ">{{$no++}}</td>
  <td class=" ">{{$value['name']}}</td>
  <td class=" ">{{$list_gender[$value['gender']]}}</td>
  <td class=" ">{{$value['email']}}</td>
  <td class=" "><i class="success fa fa-clock-o"></i> {{$value['created_at']}}</td>
  <td class=" "><i class="success fa fa-clock-o"></i> {{$value['updated_at']}}</td>
  <td class="a-right a-right "><i class="success fa fa-user"></i> {{$permission[$value['permission']]}}</td>
  <td class=" last"> <a href="/admin/user/edit/{{$value['id']}}"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/user/del/{{$value['id']}}"><i class="success fa fa-remove"></i> Xóa</a> </td>
</tr>
@endforeach

<?php 
  $no       = 1;
  $category = $view['list_category'];
  $type     = $view['list_type'];
 ?>

<?php foreach($view['list_product'] as $value): ?>
  <tr class="even pointer">
  <td><?php echo e($no++); ?></td>
  <td>
  <?php if($value['status'] == 1): ?>
    <i class="success fa fa-eye" title="Hiển thị"></i>
  <?php else: ?>
    <i class="success fa fa-eye-slash" title="Ẩn"></i>
  <?php endif; ?>
  </td>
  <td><?php echo e($value['code_id']); ?></td>
  <td><?php echo e($value['title']); ?></td>
  <td><?php echo e($category[$value['id_cate']]); ?></td>
  <td><?php echo e($value['price']); ?></td>
  <td><?php echo e($type[$value['type']]); ?></td>
  <td><i class="success fa fa-clock-o" title="Ngày hết hạn"></i> <?php echo e($value['limit_at']); ?></td>
  <td><i class="success fa fa-clock-o" title="Ngày nhập hàng"></i> <?php echo e($value['created_at']); ?></td>
  <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> <?php echo e($value['updated_at']); ?></td>
  <td class="last"> <a href="/admin/product/edit/<?php echo e($value['id']); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/product/del/<?php echo e($value['id']); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
  </tr>
<?php endforeach; ?>

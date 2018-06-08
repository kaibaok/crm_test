<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($title); ?></h3>
      </div>
      <div class="title_right">
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
                  <?php 
                    $no = 1;
                   ?>
                  <?php foreach($listItem as $value): ?>
                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td>
                      <?php if($value->status == 1): ?>
                        <a href="/admin/item-product/status/<?php echo e($value->id); ?>" class="btn_status_cproduct" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      <?php else: ?>
                        <a href="/admin/item-product/status/<?php echo e($value->id); ?>" class="btn_status_cproduct" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->title); ?></td>
                    <td class="last"> <a href="/admin/item-product/edit/<?php echo e($value->id); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/item-product/del/<?php echo e($value->id); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($listItem->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
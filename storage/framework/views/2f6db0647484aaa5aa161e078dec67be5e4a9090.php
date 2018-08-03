<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($title); ?></h3>
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
                  <?php 
                    $no       = 1;
                   ?>

                  <?php foreach($list_colors as $value): ?>
                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($value['name']); ?></td>
                    <td> <span style="background: <?php echo e($value['code']); ?>; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span> </td>
                    <td class="last"> <a href="/admin/colors/edit/<?php echo e($value['id']); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/colors/del/<?php echo e($value['id']); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($list_colors->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
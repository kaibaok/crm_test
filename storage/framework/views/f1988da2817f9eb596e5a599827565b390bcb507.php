<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($title); ?></h3>
      </div>
      <div class="title_right">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
          <form method="get">
            <div class="input-group">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="page" value="1">
                  <input type="text" name="txtSearch" class="form-control" placeholder="Tìm kiếm...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" >Tìm</button>
                  </span>
            </div>
          </form>
        </div>
        <div class="form-group pull-right">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/brand/add">Thêm mới</a>
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
                    <th class="column-title">Ngày giao</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">UserID</th>
                    <th class="column-title">Họ tên</th>
                    <th class="column-title">Địa chỉ</th>
                    <th class="column-title">Điện thoại</th>
                    <th class="column-title">Phường/Xã</th>
                    <th class="column-title">Quận</th>
                    <th class="column-title">Thành phố</th>
                    <th class="column-title">Ngày tạo</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_aluser">
                  <?php 
                    $no = 1;
                   ?>
                  <?php foreach($listCart as $value): ?>
                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e(($value->ship_date != "0000-00-00") ? $value->ship_date : ""); ?></td>
                    <td><?php echo e($listPaid[$value->paid]); ?></td>
                    <td> <?php if(!empty($value->userid)): ?> <a href="/admin/user/edit/<?php echo e($value->userid); ?>" target="_blank"><?php echo e($value->userid); ?></a> <?php endif; ?> </td>
                    <td><?php echo e($value->full_name); ?></td>
                    <td><?php echo e($value->address1); ?></td>
                    <td><?php echo e($value->phone); ?></td>
                    <td><?php echo e($value->stage); ?></td>
                    <td><?php echo e($value->district); ?></td>
                    <td><?php echo e($value->city); ?></td>
                    <td><?php echo e($value->created_at); ?></td>
                    <td class="last"> <a href="/admin/cart/edit/<?php echo e($value->id); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/cart/del/<?php echo e($value->id); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($listCart->appends($conditionPage)->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
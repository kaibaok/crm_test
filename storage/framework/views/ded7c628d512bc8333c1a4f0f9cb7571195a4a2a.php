<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div>
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($title); ?></h3>
      </div>
      <div class="title_right">
        <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
          <form method="get">
          <div class="input-group">
                <input type="hidden" name="_token" id="token_alproduct" value="<?php echo e(csrf_token()); ?>">
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
            <a class="btn btn-primary" href="/admin/event/add">Thêm mới</a>
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
                    <th class="column-title">Tên Event</th>
                    <th class="column-title">Hình ảnh</th>
                    <th class="column-title">Time Open</th>
                    <th class="column-title">Time Close</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_aluser">
                  <?php 
                    $no = 1;
                   ?>
                  <?php foreach($listEvent as $value): ?>
                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td>
                      <?php if($value->status == 1): ?>
                        <a href="/admin/event/status/<?php echo e($value->id); ?>" class="btn_status_cproduct" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      <?php else: ?>
                        <a href="/admin/event/status/<?php echo e($value->id); ?>" class="btn_status_cproduct" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->title); ?></td>
                     <td>
                      <?php if(!empty($value->eimg_detail) && file_exists(BASE_IMG."event/{$value->eimg_detail}")): ?>
                        <img width="50px" src="<?php echo e(URL_IMG."event/".$value->eimg_detail); ?>" alt="<?php echo e($value->title); ?>">
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->time_open); ?></td>
                    <td><?php echo e($value->time_close); ?></td>
                    <td class="last"> <a href="/admin/event/edit/<?php echo e($value->id); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/event/del/<?php echo e($value->id); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($listEvent->appends($conditionPage)->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
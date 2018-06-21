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
                <input type="hidden" name="_token" id="token_alproduct" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="page" value="1">
                <input type="text" name="txtSearch" class="form-control" placeholder="Tìm kiếm...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" >Tìm</button>
                </span>
          </div>
          </form>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/slider/add">Thêm mới</a>
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
                    <th class="column-title">Tiêu đề</th>
                    <th class="column-title">Link</th>
                    <th class="column-title">Hình ảnh</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_alproduct">
                  <?php 
                    $no = 1;
                   ?>

                  <?php foreach($listSlider as $value): ?>
                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td>
                      <?php if($value->status): ?>
                        <a class="btn_status_product" href="/admin/slider/status/<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      <?php else: ?>
                        <a class="btn_status_product" href="/admin/slider/status/<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->title); ?></td>
                    <td><input type="text" value="<?php echo e($value->link); ?>"></td>
                    <td>
                      <?php if(!empty($value->simg_detail) && file_exists(BASE_IMG."slider/{$value->simg_detail}")): ?>
                        <img width="50px" src="<?php echo e(URL_IMG."slider/".$value->simg_detail); ?>" alt="<?php echo e($value->title); ?>">
                      <?php endif; ?>
                    </td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> <?php echo e($value->updated_at); ?></td>
                    <td class="last"> <a href="/admin/slider/edit/<?php echo e($value->id); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/slider/del/<?php echo e($value->id); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                  <?php echo e($listSlider->appends($conditionPage)->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
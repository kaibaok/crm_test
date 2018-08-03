<?php $__env->startSection('title'); ?> <?php echo e($view['title']); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách User </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
              <input type="hidden" name="_token" id="token_aluser" value="<?php echo e(csrf_token()); ?>">
              <input type="text" class="form-control" placeholder="Tìm kiếm..." id="txt_aluser">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_search_aluser">Tìm</button>
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
            <div class="table-responsive" id="">
              <table class="table table-striped jambo_table bulk_action" >
                <thead>
                  <tr class="headings">
                    <th class="column-title">No</th>
                    <th class="column-title">Họ tên</th>
                    <th class="column-title">Giới tính</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Ngày tạo</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title">Quyền hạn</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                  </tr>
                </thead>

                <tbody id="tbl_aluser">
                  <?php 
                    $no         = 1;
                    $permission = $view['list_permission'];
                   ?>

                  <?php foreach($view['list_user'] as $value): ?>
                  <tr class="even pointer">
                    <td class=" "><?php echo e($no++); ?></td>
                    <td class=" "><?php echo e($value['name']); ?></td>
                    <td class=" "><?php echo e($view['list_gender'][$value['gender']]); ?></td>
                    <td class=" "><?php echo e($value['email']); ?></td>
                    <td class=" "><i class="success fa fa-clock-o"></i> <?php echo e($value['created_at']); ?></td>
                    <td class=" "><i class="success fa fa-clock-o"></i> <?php echo e($value['updated_at']); ?></td>
                    <td class="a-right a-right "><i class="success fa fa-user"></i> <?php echo e($permission[$value['permission']]); ?></td>
                    <td class=" last"> <a href="/admin/user/edit/<?php echo e($value['id']); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/user/del/<?php echo e($value['id']); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($view['list_user']->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
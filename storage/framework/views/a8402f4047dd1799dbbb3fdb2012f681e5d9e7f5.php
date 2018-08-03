<?php $__env->startSection('title'); ?> <?php echo e($view['title']); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($view['title']); ?></h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
              <input type="hidden" name="_token" id="token_alproduct" value="<?php echo e(csrf_token()); ?>">
              <input type="text" class="form-control" placeholder="Tìm kiếm..." id="txt_alproduct">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="btn_search_alproduct">Tìm</button>
              </span>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-5 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-primary" href="/admin/product/add">Thêm mới</a>
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
                    <th class="column-title">Mã Barcode</th>
                    <th class="column-title">Tên sản phẩm</th>
                    <th class="column-title">Loại sản phẩm</th>
                    <th class="column-title">Giá</th>
                    <th class="column-title">Trọng lượng</th>
                    <th class="column-title">Màu sắc</th>
                    <th class="column-title">Ngày hết hạn</th>
                    <th class="column-title">Ngày nhập hàng</th>
                    <th class="column-title">Ngày cập nhật</th>
                    <th class="column-title no-link last"><span class="nobr">Xử lý</span>
                    </th>
                    </tr>
                </thead>

                <tbody id="tbl_alproduct">
                  <?php 
                    $no       = 1;
                    $category = $view['list_category'];
                    $type     = $view['list_type'];
                    $colors   = $view['list_colors'];
                   ?>

                  <?php foreach($view['list_product'] as $value): ?>
                      <?php 
                        $color_choose = explode("|", $value['colors']);
                       ?>

                  <tr class="even pointer">
                    <td><?php echo e($no++); ?></td>
                    <td>
                      <?php if($value['status'] == 1): ?>
                        <a class="btn_status_product" href="/admin/product/status/<?php echo e($value['id']); ?>" rel="<?php echo e($value['id']); ?>"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      <?php else: ?>
                        <a class="btn_status_product" href="/admin/product/status/<?php echo e($value['id']); ?>" rel="<?php echo e($value['id']); ?>"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value['code_id']); ?></td>
                    <td><?php echo e($value['title']); ?></td>
                    <td><?php echo e($category[$value['id_cate']]); ?></td>
                    <td><?php echo e($value['price']); ?></td>
                    <td><?php echo e($type[$value['type']]); ?></td>
                    <td> <?php foreach($color_choose as $item): ?>
                        <span style="background: <?php echo e($colors[$item]['code']); ?>; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span>
                        <?php endforeach; ?>
                    </td>
                    <td><i class="success fa fa-clock-o" title="Ngày hết hạn"></i> <?php echo e($value['limit_at']); ?></td>
                    <td><i class="success fa fa-clock-o" title="Ngày nhập hàng"></i> <?php echo e($value['created_at']); ?></td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> <?php echo e($value['updated_at']); ?></td>
                    <td class="last"> <a href="/admin/product/edit/<?php echo e($value['id']); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/product/del/<?php echo e($value['id']); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <?php echo e($view['list_product']->links()); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?php echo e($title); ?></h3>
      </div>
      <div class="title_right">
        <div class="form-group pull-right top_search">
          <div class="input-group">
            <button class="btn btn-primary" id="btn_save">Lưu</button>
            <a class="btn btn-info" href="/admin/news/">Trở về</a>
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
                    <th class="column-title">Tin tức</th>
                    <th class="column-title">Loại tin</th>
                    <th class="column-title">Ngày cập nhật</th>
                  </tr>
                </thead>

                <tbody id="sortable" class="sortable">
                  <?php 
                    $no = 1;
                   ?>

                  <?php foreach($listNews as $value): ?>
                  <tr class="even pointer" id="item-<?php echo e($value->id); ?>">
                    <td><?php echo e($no++); ?></td>
                    <td>
                      <?php if($value->status): ?>
                        <a class="btn_status_product" href="/admin/news/status/<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye" title="Hiển thị"></i></a>
                      <?php else: ?>
                        <a class="btn_status_product" href="/admin/news/status/<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>"><i class="success fa fa-eye-slash" title="Ẩn"></i></a>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($value->title); ?></td>
                    <td><?php echo e($listNewsCate[$value->id_cate]); ?></td>
                    <td><i class="success fa fa-clock-o" title="Ngày cập nhật"></i> <?php echo e($value->updated_at); ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                 <?php echo e($listNews); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
  var idSortable = "news";
  var curentPage = "<?php echo e($page); ?>";

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
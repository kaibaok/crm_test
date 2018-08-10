<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" class="form-horizontal form-label-left" enctype="multipart/form-data" autocomplete="on" method="post" action="">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/brand/">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <?php echo e(csrf_field()); ?>

                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label>
                                <input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label> <label><input type="radio" class="flat" name="status"  value="1" /> Hiện
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tên loại tin <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($params['title']) ? $params['title'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group <?php if(isset($errors['seo_link'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="<?php echo e(isset($params['seo_link']) ? $params['seo_link'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Hình ảnh <span class="required">* 130x80</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="bimg_detail">
                                    </label>
                                    <button type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>  <?php if(isset($errors['finish'])): ?> popupNotice("<?php echo e($errors['finish']); ?>");  <?php endif; ?>  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
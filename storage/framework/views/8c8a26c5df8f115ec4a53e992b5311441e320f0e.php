<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/slider">Trở về</a>
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
                <form id="demo-form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label><input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label>
                                <label><input type="radio" class="flat" name="status"  value="1" /> Hiện </label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($params['title']) ? $params['title'] : ''); ?>" required>
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>

                     <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="link">Link </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="link" class="form-control col-md-7 col-xs-12" name="link" value="<?php echo e(isset($params['link']) ? $params['link'] : ''); ?>" required>
                        </div>
                        <?php if(isset($errors['link'])): ?> <div class="alert"><?php echo e($errors['link']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="simg_detail">
                                    </label>
                                    <button type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div><label class="control-label col-md-4 col-sm-4 col-xs-12"></label>
                        <span class="help-block">
                            <strong> <?php if(isset($errors['finish'])): ?> <?php echo e($errors['finish']); ?> <?php endif; ?> </strong>
                        </span>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                            <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
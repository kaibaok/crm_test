<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php  $url = URL_IMG."/slider/"   ?>

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

                    <input type="hidden" name="id" value="<?php echo e(isset($slider['id']) ?  $slider['id'] : ''); ?>"/>
                    <input type="hidden" id="simg_detail_url" name="simg_detail_url" value="<?php echo e(isset($slider['simg_detail']) ?  $slider['simg_detail'] : ''); ?>"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" <?php if(isset($slider['status']) && $slider['status'] == 0): ?> checked <?php endif; ?> /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" <?php if(isset($slider['status']) && $slider['status'] == 1): ?> checked <?php endif; ?> /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                       <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($slider['title']) ?  $slider['title'] : ''); ?>" >
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link">Link </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="link" class="form-control col-md-7 col-xs-12" name="link" value="<?php echo e(isset($slider['link']) ?  $slider['link'] : ''); ?>" >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">
                                <?php if(isset($slider['desc'])): ?>
                                    <?php echo e($slider['desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($slider['simg_detail']) && !empty($slider['simg_detail'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$slider['simg_detail']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="simg_detail">
                                    </label>
                                     <?php if(isset($slider['simg_detail']) && !empty($slider['simg_detail'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="simg_detail_url">Remove</button>
                                     <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="simg_detail_url" >Remove</button>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                        <span class="help-block">
                            <strong> <?php if(isset($errors['finish'])): ?> <?php echo e($errors['finish']); ?> <?php endif; ?> </strong>
                        </span>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
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
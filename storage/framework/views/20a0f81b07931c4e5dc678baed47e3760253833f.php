<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<?php  $url = URL_IMG."event/"   ?>
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-primary" href="/admin/event/">Trở về</a>
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

                    <input type="hidden" name="id" value="<?php echo e($event['id']); ?>"/>
                    <input type="hidden" id="eimg_detail_url" name="eimg_detail_url" value="<?php echo e(isset($event['eimg_detail']) ?  $event['eimg_detail'] : ''); ?>"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" <?php if(isset($event['status']) && $event['status'] == 0): ?> checked <?php endif; ?> /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" <?php if(isset($event['status']) && $event['status'] == 1): ?> checked <?php endif; ?> /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($event['title']) ? $event['title'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group <?php if(isset($errors['seo_link'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="<?php echo e(isset($event['seo_link']) ? $event['seo_link'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['seo_link'])): ?> <div class="alert"><?php echo e($errors['seo_link']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group <?php if(isset($errors['time_event'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Thời gian cho sự kiện <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left date_picker" id="time_event" name="time_event" value="<?php echo e(isset( $event['time_event']) ?  $event['time_event'] : ''); ?>">
                            <span class="fa fa-calendar-o form-control-feedback left"></span>
                        </div>
                        <?php if(isset($errors['time_event'])): ?> <div class="alert"><?php echo e($errors['time_event']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group <?php if(isset($errors['desc'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="desc">Mô tả <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit"><?php if(isset($event['desc'])): ?> <?php echo e($event['desc']); ?> <?php endif; ?></textarea>
                        </div>
                        <?php if(isset($errors['desc'])): ?> <div class="alert"><?php echo e($errors['desc']); ?></div> <?php endif; ?>
                    </div>

                     <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($event['eimg_detail']) && !empty($event['eimg_detail'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$event['eimg_detail']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="eimg_detail">
                                    </label>
                                     <?php if(isset($event['eimg_detail']) && !empty($event['eimg_detail'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="eimg_detail_url">Remove</button>
                                     <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="eimg_detail_url" >Remove</button>
                                     <?php endif; ?>
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
              </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <script>
        var time_open = "<?php echo e($event['time_open']); ?>";
        var time_close = "<?php echo e($event['time_close']); ?>";
        // if(time_open || time_close) time_open = time_close =  moment().startOf('hour');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
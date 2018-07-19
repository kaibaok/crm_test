<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php  $url = URL_IMG."/news/"   ?>

<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" class="form-horizontal" method="post" enctype="multipart/form-data">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/news">Trở về</a>
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

                    <input type="hidden" name="id" value="<?php echo e(isset($news['id']) ?  $news['id'] : ''); ?>"/>
                    <input type="hidden" id="nimg_list_url" name="nimg_list_url" value="<?php echo e(isset($news['nimg_list']) ?  $news['nimg_list'] : ''); ?>"/>
                    <input type="hidden" id="nimg_detail_url" name="nimg_detail_url" value="<?php echo e(isset($news['nimg_detail']) ?  $news['nimg_detail'] : ''); ?>"/>
                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                              <label><input type="radio" class="flat" name="status" value="0" <?php if(isset($news['status']) && $news['status'] == 0): ?> checked <?php endif; ?> /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" <?php if(isset($news['status']) && $news['status'] == 1): ?> checked <?php endif; ?> /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tin hot</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="is_hot" class="btn-group" data-toggle="buttons">
                                <input type="checkbox" name="is_hot" value="1" class="flat"
                                <?php if(isset($news['is_hot']) && $news['is_hot'] == 1): ?> checked <?php endif; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                       <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($news['title']) ?  $news['title'] : ''); ?>" >
                        </div>
                        <?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group <?php if(isset($errors['seo_link'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="seo_link">Seo Link <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="<?php echo e(isset($news['seo_link']) ?  $news['seo_link'] : ''); ?>" >
                        </div>
                        <?php if(isset($errors['seo_link'])): ?> <div class="alert"><?php echo e($errors['seo_link']); ?></div> <?php endif; ?>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại tin <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="id_cate">
                                <?php if(isset($listNewsCate)): ?>
                                    <?php foreach($listNewsCate as $key => $value): ?>
                                        <?php $selected = ""; if(isset($news['id_cate']) && $key ==  $news['id_cate']) $selected = "selected"; ?>
                                            <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                     <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả ngắn <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="short_desc" id="short_desc" class="ckedit">
                                <?php if(isset($news['short_desc'])): ?>
                                    <?php echo e($news['short_desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">
                                <?php if(isset($news['desc'])): ?>
                                    <?php echo e($news['desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($news['nimg_list']) && !empty($news['nimg_list'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$news['nimg_list']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="nimg_list">
                                    </label>
                                    <?php if(isset($news['nimg_list']) && !empty($news['nimg_list'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="nimg_list_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="nimg_list_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item form-group image_upload">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($news['nimg_detail']) && !empty($news['nimg_detail'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$news['nimg_detail']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <input type="file" name="nimg_detail">
                                    </label>
                                     <?php if(isset($news['nimg_detail']) && !empty($news['nimg_detail'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="nimg_detail_url">Remove</button>
                                     <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="nimg_detail_url" >Remove</button>
                                     <?php endif; ?>
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
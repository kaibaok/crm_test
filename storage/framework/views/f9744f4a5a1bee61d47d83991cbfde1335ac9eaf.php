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
                <a class="btn btn-primary" href="/admin/news">Trở về</a>
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
                <form id="demo-form" data-parsley-validate class="form-horizontal" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label><input type="radio" class="flat" name="status" value="0" checked="" required /> Ẩn </label>
                                <label><input type="radio" class="flat" name="status"  value="1" /> Hiện </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tin hot</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div id="is_hot" class="btn-group" data-toggle="buttons">
                                <input type="checkbox" name="is_hot" value="1" class="flat"
                                <?php if(isset($params['is_hot']) && $params['is_hot'] == 1): ?> checked <?php endif; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($params['title']) ? $params['title'] : ''); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại tin <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="id_cate">
                                <?php if(isset($listNewsCate)): ?>
                                    <?php foreach($listNewsCate as $key => $value): ?>
                                        <?php $selected = ""; if(isset($params['id_cate']) && $key == $params['id_cate']) $selected = "selected"; ?>
                                            <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="short_desc" id="short_desc" class="ckedit">
                                <?php if(isset($params['short_desc'])): ?>
                                    <?php echo e($params['short_desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <textarea  name="desc" id="desc" class="ckedit">
                                <?php if(isset($params['desc'])): ?>
                                    <?php echo e($params['desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img_list">
                                    </label>
                                    <button type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img_detail">
                                    </label>
                                    <button type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                        <span class="help-block">
                            <strong>
                                <?php echo e($errors); ?>

                            </strong>
                        </span>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                            <button type ="reset" class="btn btn-primary">Reset</button>
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
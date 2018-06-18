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
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>4 Banner <small>phía dưới slide show</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="form-horizontal form-label-left input_mask">
                <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner1']) && !empty($product['hbanner1'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner1']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner1">
                                </label>
                                <?php if(isset($product['hbanner1']) && !empty($product['hbanner1'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner1_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner1_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner2']) && !empty($product['hbanner2'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner2']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner2">
                                </label>
                                <?php if(isset($product['hbanner2']) && !empty($product['hbanner2'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner2_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner2_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner3']) && !empty($product['hbanner3'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner3']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner3">
                                </label>
                                <?php if(isset($product['hbanner3']) && !empty($product['hbanner3'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner3_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner3_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 4 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner4']) && !empty($product['hbanner4'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner4']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner4">
                                </label>
                                <?php if(isset($product['hbanner4']) && !empty($product['hbanner4'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner4_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner4_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="ln_solid"></div>
            </div>
          </div>
        </div>

        <div class="x_panel">
          <div class="x_title">
            <h2>5 Banner <small> nằm giữa (từ trái qua phải)</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="form-horizontal form-label-left input_mask">
                <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner1']) && !empty($product['hbanner1'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner1']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner1">
                                </label>
                                <?php if(isset($product['hbanner1']) && !empty($product['hbanner1'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner1_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner1_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner2']) && !empty($product['hbanner2'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner2']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner2">
                                </label>
                                <?php if(isset($product['hbanner2']) && !empty($product['hbanner2'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner2_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner2_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner3']) && !empty($product['hbanner3'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner3']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner3">
                                </label>
                                <?php if(isset($product['hbanner3']) && !empty($product['hbanner3'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner3_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner3_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 4 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner4']) && !empty($product['hbanner4'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner4']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner4">
                                </label>
                                <?php if(isset($product['hbanner4']) && !empty($product['hbanner4'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner4_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner4_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="ln_solid"></div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="x_panel">
          <div class="x_title">
            <h2>3 Banner <small> góc bìa</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="form-horizontal form-label-left input_mask">
                <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 1 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner5']) && !empty($product['hbanner5'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner5']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner5">
                                </label>
                                <?php if(isset($product['hbanner5']) && !empty($product['hbanner5'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner5_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner5_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 2</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner6']) && !empty($product['hbanner6'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner6']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner6">
                                </label>
                                <?php if(isset($product['hbanner6']) && !empty($product['hbanner6'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner6_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner6_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Banner 3 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['hbanner7']) && !empty($product['hbanner7'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['hbanner7']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="hbanner7">
                                </label>
                                <?php if(isset($product['hbanner7']) && !empty($product['hbanner7'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="hbanner7_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="hbanner7_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="ln_solid"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
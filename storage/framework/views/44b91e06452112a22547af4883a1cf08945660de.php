<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/item-product/">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content autocomp">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" id="id" value="<?php echo e(isset($cartDetail['id']) ? $cartDetail['id'] : ''); ?>">
                    <input type="hidden" name="product_id" id="product_id" value="<?php echo e(isset($cartDetail['product_id']) ? $cartDetail['product_id'] : ''); ?>">
                     <div class="item form-group  <?php if(isset($errors['name'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Tên sản phẩm <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="product_name" class="form-control col-md-7 col-xs-12" name="name" value="<?php echo e(isset($cartDetail['name']) ? $cartDetail['name'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['name'])): ?> <div class="alert"><?php echo e($errors['name']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group  <?php if(isset($errors['price'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Giá<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="price" class="form-control col-md-7 col-xs-12" name="price" value="<?php echo e(isset($cartDetail['price']) ? $cartDetail['price'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['price'])): ?> <div class="alert"><?php echo e($errors['price']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Giá giảm
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="dprice" class="form-control col-md-7 col-xs-12" name="dprice" value="<?php echo e(isset($cartDetail['dprice']) ? $cartDetail['dprice'] : ''); ?>">
                        </div>
                    </div>
                    <div class="item form-group  <?php if(isset($errors['number'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Số lượng <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="number" class="form-control col-md-7 col-xs-12" name="number" value="<?php echo e(isset($cartDetail['number']) ? $cartDetail['number'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['number'])): ?> <div class="alert"><?php echo e($errors['number']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group  <?php if(isset($errors['color'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Màu sắc <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select id="color" class="form-control col-md-7 col-xs-12" name="color">
                                <option value="0"></option>
                                <?php foreach($listColors as $key => $value): ?>
                                    <?php 
                                        $select = ($cartDetail['color'] == $key) ? "selected" : "";
                                     ?>
                                    <option value="<?php echo e($key); ?>" style="color:<?php echo e($value['code']); ?>" <?php echo e($select); ?>> <span style="background: <?php echo e($value['code']); ?>; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span>  <?php echo e($value['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php if(isset($errors['color'])): ?> <div class="alert"><?php echo e($errors['color']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group  <?php if(isset($errors['size'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Kích thước <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="size" class="form-control col-md-7 col-xs-12" name="size" value="<?php echo e(isset($cartDetail['size']) ? $cartDetail['size'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['size'])): ?> <div class="alert"><?php echo e($errors['size']); ?></div> <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        var listColors = null;
        <?php if(isset($errors['finish'])): ?> popupNotice("<?php echo e($errors['finish']); ?>");  <?php endif; ?>
        <?php if(!empty($listColors)): ?> listColors = <?php echo json_encode($listColors); ?>  <?php endif; ?>
     </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
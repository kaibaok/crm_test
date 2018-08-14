<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/public/admin/js/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="/public/admin/js/cropper/dist/cropper.min.css">
<?php $__env->stopSection(); ?>
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
	            <a class="btn btn-info" href="/admin/colors/">Trở về</a>
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

					<input type="hidden" name="id" value="<?php echo e($colors['id']); ?>"/>
					<div class="item form-group <?php if(isset($errors['name'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Tên màu <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" value="<?php echo e(isset($colors['name']) ? $colors['name'] : ''); ?>" >
						</div>
						<?php if(isset($errors['name'])): ?> <div class="alert"><?php echo e($errors['name']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="title">Code màu sắc</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="input-group code">
						    <input type="text" name='code' value="<?php echo e(isset($colors['code']) ? $colors['code'] : '#e01ab5'); ?>" class="form-control" />
						    <span class="input-group-addon"><i></i></span>
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
<script src="/public/admin/js/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
<script> $(".code").colorpicker();</script>
<script>  <?php if(isset($errors['finish'])): ?> popupNotice("<?php echo e($errors['finish']); ?>");  <?php endif; ?>  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
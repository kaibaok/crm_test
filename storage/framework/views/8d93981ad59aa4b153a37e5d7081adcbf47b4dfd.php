<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
<div>
	<div class="page-title">
		<div class="title_left">
			<h3><?php echo e($title); ?></h3>
		</div>
		<div class="title_right">
	        <div class=" pull-right">
	          <div class="input-group">
	          	<button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
	            <a class="btn btn-info" href="/admin/user">Trở về</a>
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

					<div class="item form-group <?php if(isset($errors['name'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Họ Tên <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" required="required" value="<?php echo e(isset($params['name']) ? $params['name'] : ''); ?>">
						</div>
						<?php if(isset($errors['name'])): ?> <div class="alert"><?php echo e($errors['name']); ?></div> <?php endif; ?>
					</div>
					<div class="item form-group <?php if(isset($errors['email'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="email" id="email" class="form-control col-md-7 col-xs-12" name="email" value="<?php echo e(isset($params['email']) ? $params['email'] : ''); ?>" required />
						</div>
						<?php if(isset($errors['email'])): ?> <div class="alert"><?php echo e($errors['email']); ?></div> <?php endif; ?>
					</div>
					<div class="item form-group <?php if(isset($errors['password'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Mật khẩu <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="password" id="password" required="required" class="form-control col-md-7 col-xs-12" name="password" value="<?php echo e(isset($params['password']) ? $params['password'] : ''); ?>">
						</div>
						<?php if(isset($errors['password'])): ?> <div class="alert"><?php echo e($errors['password']); ?></div> <?php endif; ?>
					</div>
					<div class="item form-group <?php if(isset($errors['gender'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<div id="gender" class="btn-group" data-toggle="buttons">
							<?php if(isset($list_gender)): ?>

							<label class="btn btn-default <?php echo e((isset($params['gender']) && $params['gender'] == 0) ? 'active' : ''); ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="0" <?php echo e((isset($params['gender']) && $params['gender'] == 0) ? 'checked' : ''); ?>> &nbsp; Nam &nbsp;
							</label>
							<label class="btn btn-primary <?php echo e((isset($params['gender']) && $params['gender'] == 1) ? 'active' : ''); ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" name="gender" value="1" <?php echo e((isset($params['gender']) && $params['gender'] == 1) ? 'checked' : ''); ?>> &nbsp; Nữ &nbsp;&nbsp;
							</label>
							<?php endif; ?>
						</div>
						</div>
						<?php if(isset($errors['gender'])): ?> <div class="alert"><?php echo e($errors['gender']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group <?php if(isset($errors['phone'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Số điện thoại <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="phone" class="form-control col-md-7 col-xs-12" name="phone" value="<?php echo e(isset($params['phone']) ? $params['phone'] : ''); ?>"/>
						</div>
						<?php if(isset($errors['phone'])): ?> <div class="alert"><?php echo e($errors['phone']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group <?php if(isset($errors['address'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Địa chỉ <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea  name="address" id="address" class="form-control" rows="5"><?php echo e(isset($params['address']) ? $params['address'] : ''); ?>

                  			</textarea>
						</div>
						<?php if(isset($errors['address'])): ?> <div class="alert"><?php echo e($errors['address']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Quyền hạn</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="permission">
							<?php if(isset($list_permission)): ?>
								<?php foreach($list_permission as $key => $value): ?>
									<?php $selected = ""; if(isset($params['permission']) && $key == $params['permission']) $selected = "selected"; ?>
										<option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
								<?php endforeach; ?>
							<?php endif; ?>
							</select>
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
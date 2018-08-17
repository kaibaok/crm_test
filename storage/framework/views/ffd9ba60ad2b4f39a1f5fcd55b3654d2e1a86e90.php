<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" class="form-horizontal form-label-left" method="post" action="">
<div>
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                <a class="btn btn-info" href="/admin/cart">Trở về</a>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="paid">
                                <?php if(isset($listPaid)): ?>
                                    <?php foreach($listPaid as $key => $value): ?>
                                        <?php $selected = ""; if(isset($params['paid']) && $key == $params['paid']) $selected = "selected"; ?>
                                            <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã Giảm giá
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" name="code">
                               <?php if(!empty($discountCode)): ?>
                                    <?php foreach($discountCode as $value): ?>
                                        <option value="<?php echo e($value->code); ?>" > <?php echo e($value->code); ?> - <?php echo e($value->type_discount ? "tiền giảm ".$value->discount_price  : "phần trăm giảm ".$value->percent."%"); ?> - hết hạn <?php echo e($value->end_date); ?>

                                        </option>
                                    <?php endforeach; ?>
                               <?php endif; ?>
                           </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã khách hàng
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="<?php echo e(!empty($params['userid']) ? $params['userid'] : ''); ?>">
                        </div>
                    </div>
                    <div class="item form-group <?php if(isset($errors['full_name'])): ?> bad <?php endif; ?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên khách hàng
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="full_name" class="form-control col-md-7 col-xs-12" value="<?php echo e(!empty($params['full_name']) ? $params['full_name'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['full_name'])): ?> <div class="alert"><?php echo e($errors['full_name']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group  <?php if(isset($errors['email'])): ?> bad <?php endif; ?>">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo e(!empty($params['email']) ? $params['email'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['email'])): ?> <div class="alert"><?php echo e($errors['email']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group <?php if(isset($errors['address1'])): ?> bad <?php endif; ?>">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address1" value="<?php echo e(!empty($params['address1']) ? $params['address1'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['address1'])): ?> <div class="alert"><?php echo e($errors['address1']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ 2</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address2" value="<?php echo e(!empty($params['address2']) ? $params['address2'] : ''); ?>">
                        </div>
                    </div>
                     <div class="item form-group <?php if(isset($errors['phone'])): ?> bad <?php endif; ?>">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Điện thoại</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="<?php echo e(!empty($params['phone']) ? $params['phone'] : ''); ?>">
                        </div>
                         <?php if(isset($errors['phone'])): ?> <div class="alert"><?php echo e($errors['phone']); ?></div> <?php endif; ?>
                    </div>
                      <div class="item form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phường/xã</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="stage" value="<?php echo e(!empty($params['stage']) ? $params['stage'] : ''); ?>">
                        </div>
                    </div>
                      <div class="item form-group <?php if(isset($errors['district'])): ?> bad <?php endif; ?>">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Quận</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="district" value="<?php echo e(!empty($params['district']) ? $params['district'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['district'])): ?> <div class="alert"><?php echo e($errors['district']); ?></div> <?php endif; ?>
                    </div>
                      <div class="item form-group <?php if(isset($errors['city'])): ?> bad <?php endif; ?>">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Thành phố</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="city" value="<?php echo e(!empty($params['city']) ? $params['city'] : ''); ?>">
                        </div>
                        <?php if(isset($errors['city'])): ?> <div class="alert"><?php echo e($errors['city']); ?></div> <?php endif; ?>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày đặt hàng</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" value="<?php echo e(!empty($params['created_at']) ? $params['created_at'] : ''); ?>">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày giao hàng</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="<?php echo e((!empty($params['ship_date']) && $params['ship_date'] != '0000-00-00') ? $params['ship_date'] : ''); ?>">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ghi chú</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <textarea name="note" id="note" class="form-control" rows="5"><?php echo e(!empty($params['note']) ? $params['note'] : ''); ?></textarea>
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
<script src="/public/admin/js/moment/min/moment.min.js"></script>
<script src="/public/admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
$('#registered_date,#ship_date').daterangepicker({
    locale: {
        format: 'YYYY-MM-DD'
    },
    singleDatePicker: true,
    singleClasses: "picker_1",
});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
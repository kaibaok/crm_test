<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="/public/admin/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-info" href="/admin/product/cart">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-sm-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Thông tin khách hàng</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left" method="post">
                        <?php echo e(csrf_field()); ?>

                         <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input readonly="readonly" type="text" id="code" name="code" class="form-control col-md-7 col-xs-12" value="<?php echo e(!empty($cart['code']) ? $cart['code'] : ''); ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="userid" name="userid" class="form-control col-md-7 col-xs-12" value="<?php echo e(!empty($cart['userid']) ? $cart['userid'] : ''); ?>">
                            </div>
                        </div>
                        <div class="item form-group <?php if(isset($errors['full_name'])): ?> bad <?php endif; ?>">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên khách hàng
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="full_name" class="form-control col-md-7 col-xs-12" value="<?php echo e(!empty($cart['full_name']) ? $cart['full_name'] : ''); ?>">
                            </div>
                            <?php if(isset($errors['full_name'])): ?> <div class="alert"><?php echo e($errors['full_name']); ?></div> <?php endif; ?>
                        </div>
                        <div class="item form-group <?php if(isset($errors['email'])): ?> bad <?php endif; ?>">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo e(!empty($cart['email']) ? $cart['email'] : ''); ?>">
                            </div>
                            <?php if(isset($errors['email'])): ?> <div class="alert"><?php echo e($errors['email']); ?></div> <?php endif; ?>
                        </div>
                        <div class="item form-group <?php if(isset($errors['address1'])): ?> bad <?php endif; ?>">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address1" value="<?php echo e(!empty($cart['address1']) ? $cart['address1'] : ''); ?>">
                            </div>
                            <?php if(isset($errors['address1'])): ?> <div class="alert"><?php echo e($errors['address1']); ?></div> <?php endif; ?>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ 2</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address2" value="<?php echo e(!empty($cart['address2']) ? $cart['address2'] : ''); ?>">
                            </div>
                        </div>
                         <div class="item form-group <?php if(isset($errors['phone'])): ?> bad <?php endif; ?>">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Điện thoại</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="<?php echo e(!empty($cart['phone']) ? $cart['phone'] : ''); ?>">
                            </div>
                             <?php if(isset($errors['phone'])): ?> <div class="alert"><?php echo e($errors['phone']); ?></div> <?php endif; ?>
                        </div>
                          <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phường/xã</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="stage" value="<?php echo e(!empty($cart['stage']) ? $cart['stage'] : ''); ?>">
                            </div>
                        </div>
                          <div class="item form-group <?php if(isset($errors['district'])): ?> bad <?php endif; ?>">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Quận</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="district" value="<?php echo e(!empty($cart['district']) ? $cart['district'] : ''); ?>">
                            </div>
                            <?php if(isset($errors['district'])): ?> <div class="alert"><?php echo e($errors['district']); ?></div> <?php endif; ?>
                        </div>
                          <div class="item form-group <?php if(isset($errors['city'])): ?> bad <?php endif; ?>">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Thành phố</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="city" value="<?php echo e(!empty($cart['city']) ? $cart['city'] : ''); ?>">
                            </div>
                            <?php if(isset($errors['city'])): ?> <div class="alert"><?php echo e($errors['city']); ?></div> <?php endif; ?>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày đặt hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="registered_date" aria-describedby="inputSuccess2Status" value="<?php echo e(!empty($cart['created_at']) ? $cart['created_at'] : ''); ?>">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Ngày giao hàng</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="ship_date" aria-describedby="inputSuccess2Status" name="ship_date" value="<?php echo e((!empty($cart['ship_date']) && $cart['ship_date'] != '0000-00-00') ? $cart['ship_date'] : ''); ?>">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>
                    </form>
              </div>
            </div>
        </div>
         <div class="col-sm-12">
             <div class="x_panel">
                  <div class="x_title">
                    <h2>Giỏ hàng</h2>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Giá giảm</th>
                                        <th>Số lượng</th>
                                        <th>Màu sắc</th>
                                        <th>Kích thước</th>
                                        <th>Xử lý</th>
                                    </thead>
                                    <thbody>
                                        <?php if(!empty($cartDetail)): ?>
                                        <?php foreach($cartDetail as $value): ?>
                                            <tr>
                                                <td><a href="/admin/product/edit/<?php echo e($value->product_id); ?>"><?php echo e($value->title); ?></a></td>
                                                <td><?php echo e($value->price); ?></td>
                                                <td><?php echo e($value->dprice); ?></td>
                                                <td><?php echo e($value->number); ?></td>
                                                <td><span style="background:  <?php echo e($value->code); ?> ; width: 15px;height: 15px;display: inline-block; margin-right: 2px;border-radius: 50%"></span>
                                                </td>
                                                <td><?php echo e($value->size); ?></td>
                                                <td class="last"> <a href="/admin/cartDetail/edit/<?php echo e($value->id); ?>"><i class="success fa fa-edit"></i> Sửa</a> | <a href="/admin/cartDetail/del/<?php echo e($value->id); ?>"><i class="success fa fa-remove"></i> Xóa</a> </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </thbody>
                                </table>
                            </div>
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>


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
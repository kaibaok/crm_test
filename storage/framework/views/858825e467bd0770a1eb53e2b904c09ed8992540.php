<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Xác nhận đơn hàng</h2>
                    </div>
                    <?php /* <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize"><a href="shop.html">shop</a> ></li>
                            <li class="text-capitalize">checkout</li>
                        </ul>
                    </div> */ ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- checkout start -->
<div class="checkout-area-start pt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-tab-menu section-tab-menu pb-50 text-center">
                    <ul>
                        <li class="text-uppercase"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase active"><a href="/don-hang">Xác nhận</a></li>
                        <li class="text-uppercase"><a href="javascript:void(0);">Hoàn tất</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="billing-detail">
                        <div class="section-title">
                            <h4 class="text-uppercase mb-35">Thông tin cần điền</h4>
                        </div>
                        <form action="" method="post">
                            <?php echo e(csrf_field()); ?>

                            <p>Họ và tên <span>*</span><br>
                                <input type="text" placeholder="Họ và tên" name="full_name" value="<?php echo e(!empty($info['full_name']) ? $info['full_name'] : ''); ?>">
                                <?php if(isset($errors['full_name'])): ?>
                                <span class="txt_error"><?php echo e($errors['full_name']); ?></span>
                                <?php endif; ?>
                            </p>
                            <div class="row">
                                <p class="col-sm-6 col-xs-12">
                                    Email <span>*</span><br>
                                    <input type="email" placeholder="Email" name="email" value="<?php echo e(!empty($info['email']) ? $info['email'] : ''); ?>">
                                    <?php if(isset($errors['email'])): ?>
                                    <span class="txt_error"><?php echo e($errors['email']); ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="col-sm-6 col-xs-12">
                                    Số điện thoại <span>*</span><br>
                                    <input type="text" placeholder="Số điện thoại" name="phone" value="<?php echo e(!empty($info['phone']) ? $info['phone'] : ''); ?>">
                                    <?php if(isset($errors['phone'])): ?>
                                    <span class="txt_error"><?php echo e($errors['phone']); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <p id="address">Địa chỉ nhận <span>*</span><br>
                            <input type="text" placeholder="Địa chỉ 1" name="address1" value="<?php echo e(!empty($info['address1']) ? $info['address1'] : ''); ?>">
                            <input type="text" placeholder="Địa chỉ 2" name="address2" value="<?php echo e(!empty($info['address2']) ? $info['address2'] : ''); ?>">
                            <?php if(isset($errors['address'])): ?>
                            <span class="txt_error"><?php echo e($errors['address']); ?></span>
                            <?php endif; ?>
                            </p>
                            <p>Thành phố <span>*</span><br>
                            <input type="text" placeholder="Thành phố" name="city" value="<?php echo e(!empty($info['city']) ? $info['city'] : ''); ?>">
                            </p>
                            <div class="row">
                                <p class="col-sm-6 col-xs-12">
                                    Phường/Xã <br>
                                    <input type="text" placeholder="Phường/Xã" name="stage" value="<?php echo e(!empty($info['stage']) ? $info['stage'] : ''); ?>">
                                    <?php if(isset($errors['stage'])): ?>
                                    <span class="txt_error"><?php echo e($errors['stage']); ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="col-sm-6 col-xs-12">
                                    Quận <span>*</span><br>
                                    <input type="text" placeholder="Quận" name="district" value="<?php echo e(!empty($info['district']) ? $info['district'] : ''); ?>">
                                    <?php if(isset($errors['district'])): ?>
                                    <span class="txt_error"><?php echo e($errors['district']); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="row">
                                <p class="col-sm-6 col-xs-12">
                                    Ghi chú <br><br>
                                    <textarea name="note" id="" cols="30" rows="10"><?php echo e(!empty($info['note']) ? $info['note'] : ''); ?></textarea>
                                </p>
                            </div>
                             <button type="submit" class="section-button">Đặt hàng</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="total-cart">
                        <div class="section-title">
                            <h4 class="text-uppercase mb-48">Chi tiết giỏ hàng</h4>
                        </div>
                        <div class="your-order">
                            <?php if(!empty($sCart)): ?>
                            <?php  $totalPrice = 0;  ?>
                                <div class="order-table">
                                    <ul>
                                        <li>
                                            <h5 class="focus">Sản phẩm <span>Thành tiền</span></h5>
                                            <?php foreach($sCart as $value): ?>
                                            <?php  $totalPrice += $value['price'] * $value['number'];  ?>
                                                <p><?php echo e($value['title']); ?>    <span> x  <?php echo e($value['number']); ?></span><span><?php echo e($value['price'] * $value['number']); ?></span></p>
                                            <?php endforeach; ?>

                                        </li>
                                        <li>
                                            <h5>Tổng giá trước khi giảm <span><?php echo e($totalPrice); ?></span></h5>
                                        </li>
                                        <?php if(!empty($discountPrice)): ?>
                                            <li>
                                                <h5>Giảm giá <span> <?php if($discountPrice->type_discount): ?>
                                                        <?php echo e($discountPrice->discount_price); ?>

                                                    <?php else: ?>
                                                        <?php echo e($discountPrice->percent); ?>%
                                                    <?php endif; ?>
                                                    </span>
                                                </h5>
                                            </li>
                                        <?php endif; ?>
                                        <li class="order-total-purple">
                                            <h5 class="focus">Thành tiền <span>
                                                <?php if(!empty($discountPrice)): ?>
                                                    <?php if($discountPrice->type_discount): ?>
                                                        <?php  $totalPrice = $totalPrice - $discountPrice->discount_price  ?>
                                                    <?php else: ?>
                                                        <?php  $totalPrice -= ($totalPrice * $discountPrice->percent)/100  ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php echo e($totalPrice); ?></span>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>
<!-- checkout end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
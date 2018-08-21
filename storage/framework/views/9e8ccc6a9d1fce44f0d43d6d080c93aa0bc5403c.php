<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area cart ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Giỏ Hàng</h2>
                    </div>
                   <?php /*  <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="/">Trang chủ</a> ></li>
                            <li class="text-capitalize"><a href="/p">Sản phẩm</a> ></li>
                            <li class="text-capitalize">cart</li>
                        </ul>
                    </div> */ ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- cart start -->
<div class="cart-area-start mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="cart-tab-menu section-tab-menu pb-50 text-center">
                    <ul>
                        <li class="text-uppercase active"><a href="/gio-hang">Giỏ hàng</a></li>
                        <li class="text-uppercase"><a href="/don-hang">Xác nhận</a></li>
                        <li class="text-uppercase"><a href="javascript:void(0);">Hoàn tất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php if(!empty($sCart)): ?>
            <?php  $totalPrice = 0;  ?>
            <form action="" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="cart-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="p-name">Sản phẩm</th>
                                        <th class="p-amount">Màu</th>
                                        <th class="p-amount">Màu</th>
                                        <th class="p-amount">Kích thước</th>
                                        <th class="p-amount">Giá</th>
                                        <th class="p-quantity">Số lượng</th>
                                        <th class="p-total">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody class="pt-30">
                                        <?php foreach($sCart as $key => $value): ?>
                                        <?php  $price = ($listProduct[$value['id']]['discount'] < $listProduct[$value['id']]['price'] )
                                                ? $listProduct[$value['id']]['discount'] : $listProduct[$value['id']]['price'];
                                            $totalPrice += $price * $value['number'];
                                         ?>
                                            <tr>
                                                <td class="p-name text-left">
                                                    <div class="cart-img">
                                                        <a href="/pd/<?php echo e($value['id']); ?>/<?php echo e($value['seo_link']); ?>">
                                                        <img src="<?php echo e($value['img']); ?>" alt="<?php echo e($value['title']); ?>"></a>
                                                    </div>

                                                </td>
                                                <td class="p-amount"><a href="/pd/<?php echo e($value['id']); ?>/<?php echo e($value['seo_link']); ?>"><?php echo e($value['title']); ?></a></td>
                                                <td class="p-amount"><span class="span_color_med"
                                                style="background: <?php echo e($listColors[$value['color']]['code']); ?>"></span></span></td>
                                                <td class="p-amount"><?php echo e($value['size']); ?></span></td>
                                                <td class="p-amount"><?php echo e($price); ?></span></td>
                                                <td class="p-quantity"><?php echo e($value['number']); ?></td>
                                                <td class="p-total"><?php echo e($price * $value['number']); ?> <a href="/xoa-gio-hang/<?php echo e($key); ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-sm-6 pt-50">
                        <div class="cart-coupn-leftside">
                            <div class="section-title">
                                <h4 class="text-uppercase pb-15">Mã giảm giá</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cpn-code">
                                        <input type="text" placeholder="Code" name="discountCode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="shipping-info">
                                        <button name="btnAddCode">Kiểm tra mã</button> <br><br>
                                        <?php if(!empty($discountPrice)): ?>
                                         <button name="btnRemoveCode">Hủy mã</button><br><br>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php if(!empty($errors)): ?>
                                <?php if(isset($errors['success'])): ?>
                                    <p class="txt_success"><?php echo e($errors['success']); ?></p>
                                <?php else: ?>
                                    <p class="txt_error"><?php echo e($errors['fail']); ?></p>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cart-coupon-rightside pt-50">
                            <div class="section-title">
                                <h4 class="text-uppercase pb-15">Tổng tiền</h4>
                            </div>
                            <div class="amount-table table-responsive">
                                <table>
                                    <tbody>
                                        <tr class="s-total">
                                            <td>Tổng giá trước khi giảm <span><?php echo e($totalPrice); ?></span></td>
                                        </tr>
                                        <?php if(!empty($discountPrice)): ?>
                                        <tr class="s-total">
                                            <td>Giảm giá <span>
                                                <?php if($discountPrice->type_discount): ?>
                                                    <?php echo e($discountPrice->discount_price); ?>

                                                <?php else: ?>
                                                    <?php echo e($discountPrice->percent); ?>%
                                                <?php endif; ?>
                                            </span></td>
                                        </tr>
                                        <?php endif; ?>
                                        <tr class="g-total">
                                            <td>Thành tiền<span class="grand">
                                            <?php if(!empty($discountPrice)): ?>
                                                <?php if($discountPrice->type_discount): ?>
                                                    <?php  $totalPrice = $totalPrice - $discountPrice->discount_price  ?>
                                                <?php else: ?>
                                                    <?php  $totalPrice -= ($totalPrice * $discountPrice->percent)/100  ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php echo e($totalPrice); ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="check-update pull-right">
                                <button type="submit" class="mt-25 mr-25 section-button">Cập nhật</button>
                                <a href="/don-hang" class="checkout mt-25 section-button">Xác nhận</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php else: ?>
             <p class="text-center">Hiện tại bạn chưa đặt sản phẩm nào</p>
        <?php endif; ?>
    </div>
</div>
<!-- cart end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
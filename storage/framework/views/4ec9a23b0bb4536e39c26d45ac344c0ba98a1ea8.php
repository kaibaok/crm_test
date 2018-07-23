<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area cart ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text text-center">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Shopping Cart</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize"><a href="shop.html">shop</a> ></li>
                            <li class="text-capitalize">cart</li>
                        </ul>
                    </div>
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
                        <li class="text-uppercase active"><a href="cart.html">Shopping Cart</a></li>
                        <li class="text-uppercase"><a href="checkout.html">Checkout</a></li>
                        <li class="text-uppercase"><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form action="#">
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="p-name">Product Name</th>
                                    <th class="p-amount">Unit Price</th>
                                    <th class="p-quantity">Quantity</th>
                                    <th class="p-total">Total</th>
                                </tr>
                            </thead>
                            <tbody class="pt-30">
                                <tr>
                                    <td class="p-name text-left">
                                        <div class="cart-img">
                                            <a href="#"><img src="img/cart/4.jpg" alt=""></a>
                                        </div>
                                        <a href="#">Imaontria jastma</a>
                                        <p>Lorem ipsum dolor sit <span>amet, consectetur</span></p>
                                        <p class="c-p-size"><span>Size : </span> L</p>
                                    </td>
                                    <td class="p-amount"><span class="amount">$165</span></td>
                                    <td class="p-quantity"><input type="text" value="2"></td>
                                    <td class="p-total">$330 <a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="p-name text-left">
                                        <div class="cart-img">
                                            <a href="#"><img src="img/cart/5.jpg" alt=""></a>
                                        </div>
                                        <a href="#">Tietria postma</a>
                                        <p>Lorem ipsum dolor sit <span>amet, consectetur</span></p>
                                        <p class="c-p-size"><span>Size : </span> XL</p>
                                    </td>
                                    <td class="p-amount"><span class="amount">$130</span></td>
                                    <td class="p-quantity"><input type="text" value="1"></td>
                                    <td class="p-total">$130 <a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="p-name text-left">
                                        <div class="cart-img">
                                            <a href="#"><img src="img/cart/6.jpg" alt=""></a>
                                        </div>
                                        <a href="#">Elemtum Fiels</a>
                                        <p>Lorem ipsum dolor sit <span>amet, consectetur</span></p>
                                        <p class="c-p-size"><span>Size : </span> M</p>
                                    </td>
                                    <td class="p-amount"><span class="amount">$150</span></td>
                                    <td class="p-quantity"><input type="text" value="2"></td>
                                    <td class="p-total">$300 <a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 pt-50">
                <div class="cart-coupn-leftside">
                    <div class="section-title">
                        <h4 class="text-uppercase pb-15">Calculate Shipping</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shipping-info">
                                <select name="country">
                                    <option>Country</option>
                                    <option>Bangladesh</option>
                                    <option>USA</option>
                                    <option>India</option>
                                    <option>UK</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="shipping-info">
                                <select name="state">
                                    <option>State</option>
                                    <option>Dhaka</option>
                                    <option>New York</option>
                                    <option>Torento</option>
                                    <option>Tokeyo</option>
                                    <option>Jakarta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shipping-info">
                                <select name="zip">
                                    <option>Postcode/Zip</option>
                                    <option>008</option>
                                    <option>001</option>
                                    <option>007</option>
                                    <option>002</option>
                                    <option>009</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shipping-info">
                               <button>Estimate</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title">
                                <h4 class="text-uppercase pb-15 pt-10">Discount Coupon Code</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cpn-code">
                                <input type="text" placeholder="Coupon Code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shipping-info">
                                <button>Apply Code</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cart-coupon-rightside pt-50">
                    <div class="section-title">
                        <h4 class="text-uppercase pb-15">cart total</h4>
                    </div>
                    <div class="amount-table table-responsive">
                        <table>
                            <tbody>
                                <tr class="s-total">
                                    <td>Sub Total <span>$760.00</span></td>
                                </tr>
                                <tr class="s-total">
                                    <td>Shipping <span>$0.00</span></td>
                                </tr>
                                <tr class="g-total">
                                    <td>Grand Total<span class="grand">$760.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="check-update pull-right">
                        <a href="#" class="mt-25 mr-25 section-button">Update</a>
                        <a href="checkout.html" class="checkout mt-25 section-button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
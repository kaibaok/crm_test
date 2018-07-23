<?php $__env->startSection('middlecontent'); ?>
<!-- banner start -->
<div class="banner-area checkout ptb-110 text-left">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-text">
                    <div class="banner-title">
                        <h2 class="text-uppercase">Check Out</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="text-capitalize"><a href="index.html">Home</a> ></li>
                            <li class="text-capitalize"><a href="shop.html">shop</a> ></li>
                            <li class="text-capitalize">checkout</li>
                        </ul>
                    </div>
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
                        <li class="text-uppercase"><a href="cart.html">Shopping Cart</a></li>
                        <li class="text-uppercase active"><a href="checkout.html">Checkout</a></li>
                        <li class="text-uppercase"><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="billing-detail">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-35">Billing detail</h4>
                    </div>
                    <form action="#">
                        <p>Country <span>*</span><br>
                        <select>
                            <option value="">Bangladesh</option>
                            <option value="">United State</option>
                        </select>
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                First Name <span>*</span><br>
                                <input type="text" placeholder="First name">
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Last Name <span>*</span><br>
                                <input type="text" placeholder="Last name">
                            </p>
                        </div>
                        <p>Company Name <span>*</span><br>
                        <input type="text" placeholder="Company name">
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                Email Address <span>*</span><br>
                                <input type="text" placeholder="Email address">
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Phone No. <span>*</span><br>
                                <input type="text" placeholder="Phone no.">
                            </p>
                        </div>
                        <p id="address">Address <span>*</span><br>
                        <input type="text" placeholder="Address line 1">
                        <input type="text" placeholder="Address line 2">
                        </p>
                        <p>Town/City <span>*</span><br>
                        <input type="text" placeholder="Town/City">
                        </p>
                        <div class="row">
                            <p class="col-sm-6 col-xs-12">
                                State <span>*</span><br>
                                <input type="text" placeholder="State">
                            </p>
                            <p class="col-sm-6 col-xs-12">
                                Zip Code <span>*</span><br>
                                <input type="text" placeholder="Zip Code">
                            </p>
                        </div>
                        <div class="account-address">
                            <label>
                                <input type="radio" checked="checked" value="old-address" name="shipping-address">Ship to this address
                            </label>
                            <label>
                                <input type="radio" id="add-new-address" value="new-address" name="shipping-address">Ship to different address
                            </label>
                        </div>
                        <div id="add-new-address-info">
                            <div class="customer-name">
                                <div class="first-name">
                                    <p>First Name<span>*</span></p>
                                    <input type="text" required="">
                                </div>
                                <div class="last-name">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" required="">
                                </div>
                            </div>
                            <div class="customer-info">
                                <div class="company-name">
                                    <p>Company</p>
                                    <input type="text">
                                </div>
                                <div class="email-address">
                                    <p>Email Adress<span>*</span></p>
                                    <input type="email" required="">
                                </div>
                            </div>
                            <p>Address<span>*</span></p>
                            <input type="text" required="">
                            <input type="text">
                            <div class="city-country">
                                <div class="city">
                                    <p>City<span>*</span></p>
                                    <input type="text" required="">
                                </div>
                                <div class="state">
                                    <p>State/Province</p>
                                    <select class="country">
                                        <option value="state">Please select region, state or province</option>
                                        <option value="indo">Bahasa Indonesia</option>
                                        <option value="melyu">Bahasa Melayu</option>
                                        <option value="deutsch">Deutsch (Deutschland)</option>
                                        <option value="austra">English (Australia)</option>
                                        <option value="canada">English (Canada)</option>
                                        <option value="india">English (India)</option>
                                        <option value="ireland">English (Ireland)</option>
                                        <option value="maktoob">English (Maktoob)</option>
                                        <option value="malaysia">English (Malaysia)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="city-country">
                                <div class="city">
                                    <p>Zip/Postal Code<span>*</span></p>
                                    <input type="text" required="">
                                </div>
                                <div class="state">
                                    <p>Country<span>*</span></p>
                                    <select class="country">
                                        <option value="AF">Afghanistan</option>
                                        <option value="AU">Australia</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="CA">Canada</option>
                                        <option value="DK">Denmark</option>
                                        <option value="EG">Egypt</option>
                                        <option value="FR">France</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US" selected="selected">United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="customer-info">
                                <div class="telephone">
                                    <p>Telephone<span>*</span></p>
                                    <input type="text" required="">
                                </div>
                                <div class="fax">
                                    <p>Fax</p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="total-cart">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-48">Cart total</h4>
                    </div>
                    <div class="your-order">
                        <div class="order-table">
                            <ul>
                                <li>
                                    <h5 class="focus">Product <span>Total</span></h5>
                                    <p>Eletria ostma    <span> x  02</span><span>$300.00</span></p>
                                    <p>Celletria ostma  <span> x  01</span><span>$120.00</span></p>
                                    <p>Pelletria ostma  <span> x  02</span><span>$200.00</span></p>
                                </li>
                                <li>
                                    <h5>Sub total <span>$620.00</span></h5>
                                </li>
                                <li>
                                    <h5>Shipping <span>$0.00</span></h5>
                                </li>
                                <li class="order-total-purple">
                                    <h5 class="focus">Grand Total <span>$620.00</span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-title mt-50 mb-25">
                        <h4 class="text-uppercase">Payment Method</h4>
                    </div>
                    <div class="your-order">
                        <div class="order-table">
                            <ul>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="transfer" value="bank" name="payment" type="radio">Direct bank tranfer

                                    </label>
                                    <p id="transfer-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="payment" value="check" name="payment" type="radio">Cheque Payment
                                    </label>
                                    <p id="payment-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title">
                                        <input id="paypal" value="paypal" name="payment" type="radio">Paypal
                                    </label>
                                    <p id="paypal-info">Make your payment directly into our bank account. Please use your order ID as the payment reference. Your order won’t be shippided until the funds have cleared in our account.</p>
                                </li>
                                <li>
                                    <label class="checkbox-title red">
                                        <input type="radio">I’ve read &amp; Accept the terms &amp; Conditions.
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="section-button">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
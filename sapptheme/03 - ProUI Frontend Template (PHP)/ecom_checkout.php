<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><strong>Checkout</strong></h1>
    </div>
</section>
<!-- END Intro -->

<!-- Checkout Process -->
<section class="site-content site-section">
    <div class="container">
        <div class="site-block">
            <form id="checkout-wizard" action="ecom_checkout.php" method="post">
                <!-- First Step -->
                <div id="checkout-first" class="step">
                    <!-- Step Info -->
                    <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                        <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-first"><strong>1. DETAILS</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-second"><strong>2. ADDRESSES</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-third"><strong>3. PAYMENT</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                    </ul>
                    <!-- END Step Info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="page-header">Account</h4>
                            <div class="form-group">
                                <label for="checkout-username">Username</label>
                                <input type="text" id="checkout-username" name="checkout-username" class="form-control" placeholder="Your username..">
                            </div>
                            <div class="form-group">
                                <label for="checkout-email">Email</label>
                                <input type="email" id="checkout-email" name="checkout-email" class="form-control" placeholder="test@example.com">
                            </div>
                            <div class="form-group">
                                <label for="checkout-password">Password</label>
                                <input type="password" id="checkout-password" name="checkout-password" class="form-control" placeholder="Choose a crazy one..">
                            </div>
                            <div class="form-group">
                                <label for="checkout-password2">Confirm Password</label>
                                <input type="password" id="checkout-password2" name="checkout-password2" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="page-header">Personal Info</h4>
                            <div class="form-group">
                                <label for="checkout-firstname">Firstname</label>
                                <input type="text" id="checkout-firstname" name="checkout-firstname" class="form-control" placeholder="John..">
                            </div>
                            <div class="form-group">
                                <label for="checkout-lastname">Lastname</label>
                                <input type="text" id="checkout-lastname" name="checkout-lastname" class="form-control" placeholder="Doe..">
                            </div>
                            <div class="form-group">
                                <label for="checkout-country">Country</label>
                                <input type="text" id="checkout-country" name="checkout-country" class="form-control" placeholder="Where do you live?">
                            </div>
                            <div class="form-group">
                                <label for="checkout-city">City</label>
                                <input type="text" id="checkout-city" name="checkout-city" class="form-control" placeholder="Which one?">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END First Step -->

                <!-- Second Step -->
                <div id="checkout-second" class="step">
                    <!-- Step Info -->
                    <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                        <li><a href="javascript:void(0)" data-gotostep="checkout-first"><i class="fa fa-check"></i> <strong>1. DETAILS</strong></a></li>
                        <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-second"><strong>2. ADDRESSES</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-third"><strong>3. PAYMENT</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                    </ul>
                    <!-- END Step Info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="page-header">Billing Address</h4>
                            <div class="form-group">
                                <label for="checkout-billing-name">Name</label>
                                <input type="text" id="checkout-billing-name" name="checkout-billing-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-billing-address1">Address 1</label>
                                <input type="text" id="checkout-billing-address1" name="checkout-billing-address1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-billing-address1">Address 2</label>
                                <input type="text" id="checkout-billing-address2" name="checkout-billing-address2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-billing-postal">Postal Code</label>
                                <input type="text" id="checkout-billing-postal" name="checkout-billing-postal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-billing-phone">Phone</label>
                                <input type="text" id="checkout-billing-phone" name="checkout-billing-phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-billing-address1">City</label>
                                <input type="text" id="checkout-billing-city" name="checkout-billing-city" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="page-header">Shipping Address</h4>
                            <div class="form-group">
                                <label for="checkout-shipping-name">Name</label>
                                <input type="text" id="checkout-shipping-name" name="checkout-shipping-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-shipping-address1">Address 1</label>
                                <input type="text" id="checkout-shipping-address1" name="checkout-shipping-address1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-shipping-address1">Address 2</label>
                                <input type="text" id="checkout-shipping-address2" name="checkout-shipping-address2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-shipping-postal">Postal Code</label>
                                <input type="text" id="checkout-shipping-postal" name="checkout-shipping-postal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-shipping-phone">Phone</label>
                                <input type="text" id="checkout-shipping-phone" name="checkout-shipping-phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="checkout-shipping-address1">City</label>
                                <input type="text" id="checkout-shipping-city" name="checkout-shipping-city" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Second Step -->

                <!-- Third Step -->
                <div id="checkout-third" class="step">
                    <!-- Step Info -->
                    <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                        <li><a href="javascript:void(0)" data-gotostep="checkout-first"><i class="fa fa-check"></i> <strong>1. DETAILS</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-second"><i class="fa fa-check"></i> <strong>2. ADDRESSES</strong></a></li>
                        <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-third"><strong>3. PAYMENT</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                    </ul>
                    <!-- END Step Info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="page-header"><i class="fa fa-credit-card"></i> Add Credit Card</h4>
                            <div class="form-group">
                                <label for="checkout-payment-name">Name</label>
                                <input type="text" id="checkout-payment-name" name="checkout-payment-name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="checkout-payment-number">Card Number</label>
                                <input type="text" id="checkout-payment-number" name="checkout-payment-number" class="form-control" placeholder="0000-0000-0000-0000">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label for="checkout-payment-cvc">CVC</label>
                                        <input type="text" id="checkout-payment-cvc" name="checkout-payment-cvc" class="form-control" placeholder="000">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="checkout-payment-expire">Expiration Date</label>
                                        <input type="text" id="checkout-payment-expire" name="checkout-payment-expire" class="form-control" placeholder="MM/YY">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="page-header">Other Payment Methods</h4>
                            <div class="form-group">
                                <label>Choose</label>
                                <div>
                                    <label class="radio-inline" for="checkout-payment-paypal">
                                        <input type="radio" id="checkout-payment-paypal" name="checkout-payments" value="paypal"> <i class="fa fa-paypal"></i> Paypal
                                    </label>
                                    <label class="radio-inline" for="checkout-payment-prepaid">
                                        <input type="radio" id="checkout-payment-prepaid" name="checkout-payments" value="prepaid"> Prepaid Card
                                    </label>
                                    <label class="radio-inline" for="checkout-payment-cash">
                                        <input type="radio" id="checkout-payment-cash" name="checkout-payments" value="cash"> Cash
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Third Step -->

                <!-- Fourth Step -->
                <div id="checkout-fourth" class="step">
                    <!-- Step Info -->
                    <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                        <li><a href="javascript:void(0)" data-gotostep="checkout-first"><i class="fa fa-check"></i> <strong>1. DETAILS</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-second"><i class="fa fa-check"></i> <strong>2. ADDRESSES</strong></a></li>
                        <li><a href="javascript:void(0)" data-gotostep="checkout-third"><i class="fa fa-check"></i> <strong>3. PAYMENT</strong></a></li>
                        <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                    </ul>
                    <!-- END Step Info -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-right">Unit Price</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 200px;">
                                        <img src="img/placeholders/photos/photo35.jpg" alt="" style="width: 180px;">
                                    </td>
                                    <td>
                                        <strong>PID.8799</strong><br>
                                        Super Laptop 11'<br>
                                        <strong class="text-success">In stock</strong> - 24h Delivery
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success"><strong>1</strong></span>
                                    </td>
                                    <td class="text-right">$799,00</td>
                                    <td class="text-right"><strong>$799,00</strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/placeholders/photos/photo32.jpg" alt="" style="width: 180px;">
                                    </td>
                                    <td>
                                        <strong>PID.6215</strong><br>
                                        White Headset<br>
                                        <strong class="text-success">In stock</strong> - 24h Delivery
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success"><strong>1</strong></span>
                                    </td>
                                    <td class="text-right">$59,00</td>
                                    <td class="text-right"><strong>$59,00</strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/placeholders/photos/photo34.jpg" alt="" style="width: 180px;">
                                    </td>
                                    <td>
                                        <strong>PID.9874</strong><br>
                                        Bluetooth<br>
                                        <strong class="text-success">In stock</strong> - 24h Delivery
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success"><strong>1</strong></span>
                                    </td>
                                    <td class="text-right">$49,00</td>
                                    <td class="text-right"><strong>$49,00</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>Sub Total</strong></td>
                                    <td class="text-right h4"><strong>$907,00</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>Shipping Cost</strong></td>
                                    <td class="text-right h4"><strong>$0,00</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>VAT (20%)</strong></td>
                                    <td class="text-right h4"><strong>$181,40</strong></td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4" class="text-right text-uppercase h4"><strong>Total Price</strong></td>
                                    <td class="text-right text-success h4"><strong>$1088,40</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 push-bit">
                            <h4 class="page-header"><strong>Billing Address</strong></h4>
                            <h4><strong>Jonathan Taylor</strong></h4>
                            <address>
                                Sunset Str 620<br>
                                Melbourne<br>
                                Australia, 21-842<br><br>
                                <i class="fa fa-phone"></i> (999) 852-11111<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">johnathan.taylor@example.com</a>
                            </address>
                        </div>
                        <div class="col-sm-6 push-bit">
                            <h4 class="page-header"><strong>Shipping Address</strong></h4>
                            <h4><strong>Harry Burke</strong></h4>
                            <address>
                                Sunset Str 598<br>
                                Melbourne<br>
                                Australia, 21-852<br><br>
                                <i class="fa fa-phone"></i> (999) 852-22222<br>
                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">harry.burke@example.com</a>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Fourth Step -->

                <!-- Form Buttons -->
                <div class="form-group text-right">
                    <input type="reset" class="btn btn-danger" id="back" value="">
                    <input type="submit" class="btn btn-primary" id="next" value="">
                </div>
                <!-- END Form Buttons -->
            </form>
            <!-- END Checkout Wizard Content -->
        </div>
    </div>
</section>
<!-- END Checkout Process -->

<!-- Services Info -->
<section class="site-content site-section site-section-light themed-background-coral">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-5 push visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <span class="h3"><i class="fa fa-truck"></i> <strong>FREE SHIPPING</strong><br>24h DELIVERY</span>
            </div>
            <div class="col-sm-2 push visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuickInv" data-element-offset="-100">
                <i class="fa fa-plus fa-4x"></i>
            </div>
            <div class="col-sm-5 push visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <span class="h3"><i class="fa fa-support"></i> <strong>FREE SUPPORT</strong><br>24/7</span>
            </div>
        </div>
    </div>
</section>
<!-- END Services Info -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomCheckout.js"></script>
<script>$(function(){ EcomCheckout.init(); });</script>

<?php include 'inc/template_end.php'; ?>
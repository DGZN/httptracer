<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><i class="fa fa-shopping-cart"></i> <strong>Shopping Cart</strong></h1>
    </div>
</section>
<!-- END Intro -->

<!-- Shopping Cart -->
<section class="site-content site-section">
    <div class="container">
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
                            <strong>1</strong>
                            <a href="javascript:void(0)" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></a>
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
                            <strong>1</strong>
                            <a href="javascript:void(0)" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></a>
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
                            <strong>1</strong>
                            <a href="javascript:void(0)" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></a>
                        </td>
                        <td class="text-right">$49,00</td>
                        <td class="text-right"><strong>$49,00</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right h4"><strong>Sub Total</strong></td>
                        <td class="text-right h4"><strong>$907,00</strong></td>
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
            <div class="col-xs-7 col-md-3">
                <a href="ecom_product_list.php" class="btn btn-block btn-primary">Continue Shopping</a>
            </div>
            <div class="col-xs-5 col-md-3 col-md-offset-6">
                <a href=ecom_checkout.php class="btn btn-block btn-danger">Checkout</a>
            </div>
        </div>
    </div>
</section>
<!-- END Shopping Cart -->

<!-- Best Sellers -->
<section class="site-content site-section">
    <div class="container">
        <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
        <hr>
        <div class="row store-items">
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="ecom_product.php">
                            <img src="img/placeholders/photos/photo26.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                        <a href="ecom_product.php"><strong>Sport Shoes</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="ecom_product.php">
                            <img src="img/placeholders/photos/photo29.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                        <a href="ecom_product.php"><strong>Jacket</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="ecom_product.php">
                            <img src="img/placeholders/photos/photo27.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 299</span>
                        <a href="ecom_product.php"><strong>Watch</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Best Sellers -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
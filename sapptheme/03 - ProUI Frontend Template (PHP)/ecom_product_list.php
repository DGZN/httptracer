<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><strong>Explore over 5.000 products!</strong></h1>
    </div>
</section>
<!-- END Intro -->

<!-- Product List -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4 col-lg-3">
                <aside class="sidebar site-block">
                    <!-- Store Menu -->
                    <!-- Store Menu functionality is initialized in js/app.js -->
                    <div class="sidebar-block">
                        <ul class="store-menu">
                            <li>
                                <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Clothes</a>
                                <ul>
                                    <li><a href="javascript:void(0)">Women</a></li>
                                    <li><a href="javascript:void(0)">Men</a></li>
                                </ul>
                            </li>
                            <li class="open">
                                <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Electronics</a>
                                <ul>
                                    <li><a href="javascript:void(0)">PCs</a></li>
                                    <li><a href="javascript:void(0)">Laptops</a></li>
                                    <li class="open">
                                        <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Tablets</a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Android</a></li>
                                            <li><a href="javascript:void(0)">iOS</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Headsets</a></li>
                                    <li><a href="javascript:void(0)" class="active">Mobile Phones</a></li>
                                    <li><a href="javascript:void(0)">Mp3 Players</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="submenu"><i class="fa fa-angle-right"></i> Games</a>
                                <ul>
                                    <li><a href="javascript:void(0)">PC</a></li>
                                    <li><a href="javascript:void(0)">PS4</a></li>
                                    <li><a href="javascript:void(0)">Xbox One</a></li>
                                    <li><a href="javascript:void(0)">Wii U</a></li>
                                    <li><a href="javascript:void(0)">PS Vita</a></li>
                                    <li><a href="javascript:void(0)">3Ds</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Sports</a></li>
                            <li><a href="javascript:void(0)">Kids</a></li>
                            <li><a href="javascript:void(0)">Home</a></li>
                        </ul>
                    </div>
                    <!-- END Store Menu -->

                    <!-- Shopping Cart -->
                    <div class="sidebar-block">
                        <div class="row">
                            <div class="col-xs-6 push-bit">
                                <span class="h3">$ 750<br><small><em>3 Items</em></small></span>
                            </div>
                            <div class="col-xs-6">
                                <a href="ecom_shopping_cart.php" class="btn btn-sm btn-block btn-success">VIEW CART</a>
                                <a href="ecom_checkout.php" class="btn btn-sm btn-block btn-danger">CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Shopping Cart -->
                </aside>
            </div>
            <!-- END Sidebar -->

            <!-- Products -->
            <div class="col-md-8 col-lg-9">
                <div class="form-inline push-bit clearfix">
                    <select id="results-show" name="results-show" class="form-control pull-right" size="1">
                        <option value="0" disabled selected>SHOW</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                    <select id="results-sort" name="results-sort" class="form-control" size="1">
                        <option value="0" disabled selected>SORT BY</option>
                        <option value="1">Popularity</option>
                        <option value="2">Name (A to Z)</option>
                        <option value="3">Name (Z to A)</option>
                        <option value="4">Price (Lowest to Highest)</option>
                        <option value="5">Price (Highest to Lowest)</option>
                        <option value="6">Sales (Lowest to Highest)</option>
                        <option value="7">Sales (Highest to Lowest)</option>
                    </select>
                </div>
                <div class="row store-items">
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo25.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 109</span>
                                <a href="ecom_product.php"><strong>Sunglasses</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo28.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 59</span>
                                <a href="ecom_product.php"><strong>Gloves</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo30.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                                <a href="ecom_product.php"><strong>Jacket</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo32.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                                <a href="ecom_product.php"><strong>Headset</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo35.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
                                <a href="ecom_product.php"><strong>Laptop</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
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
                                    <img src="img/placeholders/photos/photo33.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">$ 149</span>
                                <a href="ecom_product.php"><strong>Sunglasses</strong></a><br>
                                <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Products -->
        </div>
    </div>
</section>
<!-- END Product List -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
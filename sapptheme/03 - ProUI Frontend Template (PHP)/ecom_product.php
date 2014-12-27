<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><strong>Blue Jacket</strong></h1>
    </div>
</section>
<!-- END Intro -->

<!-- Product View -->
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

            <!-- Product Details -->
            <div class="col-md-8 col-lg-9">
                <div class="row" data-toggle="lightbox-gallery">
                    <!-- Images -->
                    <div class="col-sm-6 push-bit">
                        <a href="img/placeholders/photos/photo31.jpg" class="gallery-link"><img src="img/placeholders/photos/photo31.jpg" alt="" class="img-responsive push-bit"></a>
                        <div class="row push-bit">
                            <div class="col-xs-4">
                                <a href="img/placeholders/photos/photo30.jpg" class="gallery-link"><img src="img/placeholders/photos/photo30.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="img/placeholders/photos/photo29.jpg" class="gallery-link"><img src="img/placeholders/photos/photo29.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="img/placeholders/photos/photo28.jpg" class="gallery-link"><img src="img/placeholders/photos/photo28.jpg" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <!-- END Images -->

                    <!-- Info -->
                    <div class="col-sm-6 push-bit">
                        <div class="clearfix">
                            <div class="pull-right">
                                <span class="h2"><strong>$ 69</strong></span>
                            </div>
                            <span class="h4"><strong class="text-success">IN STOCK</strong><br><small>15 Available</small></span>
                        </div>
                        <hr>
                        <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
                        <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
                        <hr>
                        <form action="ecom_shopping_cart.php" method="post" class="form-inline push-bit text-right">
                            <select id="ecom-addcart-size" name="ecom-addcart-size" class="form-control" size="1">
                                <option value="0" disabled selected>SIZE</option>
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="xxl">XXL</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                    <!-- END Info -->

                    <!-- More Info Tabs -->
                    <div class="col-xs-12 site-block">
                        <ul class="nav nav-tabs push-bit" data-toggle="tabs">
                            <li class="active"><a href="#product-specs">Specs</a></li>
                            <li><a href="#product-description">Description</a></li>
                            <li><a href="#product-reviews">Reviews (3)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-specs">
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Main Features</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 120px;"><strong>Feature #1</strong></td>
                                            <td>Details</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Feature #2</strong></td>
                                            <td>Details</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Feature #3</strong></td>
                                            <td>Details</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Dimensions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 120px;"><strong>Height</strong></td>
                                            <td>85cm</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Width</strong></td>
                                            <td>40cm</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th colspan="2">More Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 120px;"><strong>Info #1</strong></td>
                                            <td>Details</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Info #2</strong></td>
                                            <td>Details</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Info #3</strong></td>
                                            <td>Details</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="product-description">
                                <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                                <p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.</p>
                                <p>Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales!</p>
                            </div>
                            <div class="tab-pane" id="product-reviews">
                                <ul class="media-list push">
                                    <li class="media">
                                        <a href="javascript:void(0)" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <div class="text-warning pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                            <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="javascript:void(0)" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <div class="text-warning pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                            <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="javascript:void(0)" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <div class="text-warning pull-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="javascript:void(0)"><strong>Customer</strong></a><br>
                                            <span class="text-muted"><small><em>2 hours ago</em></small></span>
                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END More Info Tabs -->
                </div>
            </div>
            <!-- END Product Details -->
        </div>
    </div>
</section>
<!-- END Product View -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><strong>Search Results</strong></h1>
        <h2 class="h3 animation-slideUp"><strong>24</strong> products found!</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Search Results -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4 col-lg-3">
                <aside class="sidebar site-block">
                    <!-- Refine Search -->
                    <div class="sidebar-block">
                        <form action="ecom_search_results.php" method="post" class="form-horizontal">
                            <div class="form-group push-bit">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <input type="text" id="ecom-search" name="ecom-search" class="form-control" placeholder="Search Store.." value="Gift">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4><strong>Price Range</strong></h4>
                            <div class="form-group push-bit">
                                <div class="col-xs-12">
                                    <label class="radio-inline" for="example-inline-radio1">
                                        <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> $0 - $99
                                    </label>
                                    <label class="radio-inline" for="example-inline-radio2">
                                        <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> $100 - $299
                                    </label>
                                    <label class="radio-inline" for="example-inline-radio3">
                                        <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> > $300
                                    </label>
                                </div>
                            </div>
                            <h4><strong>Filters</strong></h4>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <select id="ecom-filter-condition" name="ecom-filter-condition" class="form-control" size="1">
                                        <option value="0" disabled selected>Condition</option>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <select id="ecom-filter-rating" name="ecom-filter-rating" class="form-control" size="1">
                                        <option value="0" disabled selected>Rating</option>
                                        <option value="5">5 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="2">2 Stars</option>
                                        <option value="1">1 Stars</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group push-bit">
                                <div class="col-sm-8">
                                    <select id="ecom-filter-color" name="ecom-filter-color" class="form-control" size="1">
                                        <option value="0" disabled selected>Color</option>
                                        <option value="1">Red (15)</option>
                                        <option value="2">Blue (15)</option>
                                        <option value="3">Yellow (23)</option>
                                        <option value="4">Black (95)</option>
                                        <option value="5">Grey (52)</option>
                                        <option value="5">Not Specified (690)</option>
                                    </select>
                                </div>
                            </div>
                            <h4 class="-header"><strong>Categories</strong></h4>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category1">
                                        <input type="checkbox" id="ecom-filter-category1" name="ecom-filter-category1" value="1" checked> <strong>Clothes</strong> (1521)
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category2">
                                        <input type="checkbox" id="ecom-filter-category2" name="ecom-filter-category2" value="2" checked> <strong>Electronics</strong> (1223)
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category3">
                                        <input type="checkbox" id="ecom-filter-category3" name="ecom-filter-category3" value="3" checked> <strong>Games</strong> (564)
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category4">
                                        <input type="checkbox" id="ecom-filter-category4" name="ecom-filter-category4" value="4" checked> <strong>Sports</strong> (754)
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category5">
                                        <input type="checkbox" id="ecom-filter-category5" name="ecom-filter-category5" value="5" checked> <strong>Kids</strong> (1514)
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <label class="checkbox-inline" for="ecom-filter-category6">
                                        <input type="checkbox" id="ecom-filter-category6" name="ecom-filter-category6" value="6" checked> <strong>Home</strong> (369)
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Refine Search -->

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
                    <div class="col-xs-12 text-right">
                        <ul class="pagination">
                            <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END Products -->
        </div>
    </div>
</section>
<!-- END Search Results -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="animation-slideDown"><strong>Project Name</strong></h1>
        <h2 class="h3 animation-slideUp">Single Project Page</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Content -->
<section class="site-content site-section">
    <div class="container">
        <!-- Project Navigation -->
        <div class="site-block clearfix">
            <div class="btn-group pull-right">
                <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Prev</a>
                <a href="javascript:void(0)" class="btn btn-primary">Next <i class="fa fa-chevron-right"></i></a>
            </div>
            <a href="portfolio_4.php" class="btn btn-primary pull-left"><i class="fa fa-th-large"></i> All projects</a>
        </div>
        <!-- END Project Navigation -->

        <!-- Project Info -->
        <div class="row">
            <!-- Project Slider -->
            <div class="col-sm-5 site-block">
                <div id="project-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner text-center">
                        <div class="active item">
                            <img src="img/placeholders/photos/photo11.jpg" alt="Image 1">
                        </div>
                        <div class="item">
                            <img src="img/placeholders/photos/photo13.jpg" alt="Image 2">
                        </div>
                        <div class="item">
                            <img src="img/placeholders/photos/photo17.jpg" alt="Image 3">
                        </div>
                    </div>
                    <!-- END Wrapper for slides -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#project-carousel" data-slide="prev">
                        <span>
                            <i class="fa fa-chevron-left"></i>
                        </span>
                    </a>
                    <a class="right carousel-control" href="#project-carousel" data-slide="next">
                        <span>
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>
                    <!-- END Controls -->
                </div>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><strong>Client</strong></td>
                            <td class="text-right">Company Inc</td>
                        </tr>
                        <tr>
                            <td><strong>Category</strong></td>
                            <td class="text-right">Web Design</td>
                        </tr>
                        <tr>
                            <td><strong>Website</strong></td>
                            <td class="text-right"><a href="javascript:void(0)">http://example.com</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Project Slider -->

            <!-- Project Details -->
            <div class="col-sm-7 site-block">
                <h3 class="site-heading"><strong>Quick</strong> Description</h3>
                <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <!-- END Project Details -->
        </div>
        <!-- END Project Info -->
        <hr>
    </div>
</section>
<!-- END Content -->

<!-- Key Features -->
<section class="site-content site-section">
    <div class="container">
        <div class="row row-items text-center">
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-fire" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-fire"></i>
                </a>
                <h4><strong>Bootstrap</strong> Powered</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-iphone_shake"></i>
                </a>
                <h4><strong>Fully</strong> Responsive</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-flatie" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-eye_open"></i>
                </a>
                <h4><strong>Retina</strong> Ready</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-amethyst" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-globe_af"></i>
                </a>
                <h4><strong>Cross Browser</strong> Support</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-spring" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-flash"></i>
                </a>
                <h4><strong>Lightweight</strong> UI</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-autumn" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-iphone"></i>
                </a>
                <h4><strong>Mobile</strong> First</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-night" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-settings"></i>
                </a>
                <h4><strong>Awesome</strong> Components</h4>
            </div>
            <div class="col-sm-3">
                <a href="javascript:void(0)" class="circle visibility-none themed-background-fancy" data-toggle="animation-appear" data-animation-class="animation-fadeIn360" data-element-offset="-100">
                    <i class="gi gi-electricity"></i>
                </a>
                <h4><strong>Flexible</strong> Layout</h4>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Key Features -->

<!-- Testimonials -->
<section class="site-content site-section">
    <div class="container">
        <div class="site-block">
            <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                </ol>
                <!-- END Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-center">
                    <div class="active item">
                        <p>
                            <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                        </p>
                        <blockquote class="no-symbol">
                            <p>An awesome team that brought our ideas to life! Highly recommended!</p>
                            <footer><strong>Sophie Illich</strong>, example.com</footer>
                        </blockquote>
                    </div>
                    <div class="item">
                        <p>
                            <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                        </p>
                        <blockquote class="no-symbol">
                            <p>I have never imagined that our final product would look that good!</p>
                            <footer><strong>David Cull</strong>, example.com</footer>
                        </blockquote>
                    </div>
                    <div class="item">
                        <p>
                            <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                        </p>
                        <blockquote class="no-symbol">
                            <p>An extraordinary service that helped us grow way too fast!</p>
                            <footer><strong>Nathan Brown</strong>, example.com</footer>
                        </blockquote>
                    </div>
                </div>
                <!-- END Wrapper for slides -->
            </div>
        </div>
    </div>
</section>
<!-- END Testimonials -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
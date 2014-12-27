<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Media Container -->
<div class="media-container">
    <!-- Intro -->
    <section class="site-section site-section-light site-section-top">
        <div class="container">
            <h1 class="text-center animation-slideDown"><i class="fa fa-building-o"></i> <strong>Our Company</strong></h1>
            <h2 class="h3 text-center animation-slideUp"><strong>Built with love by passionate people!</strong></h2>
        </div>
    </section>
    <!-- END Intro -->

    <!-- Gmaps.js (initialized in js/pages/about.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
    <div id="gmap-top" class="media-map"></div>
</div>
<!-- END Media Container -->

<!-- Company Info -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="site-block">
                    <h3 class="site-heading"><strong>When</strong> did all start?</h3>
                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                </div>
                <div class="site-block">
                    <h3 class="site-heading"><strong>Where</strong> did all start?</h3>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="site-block">
                    <h3 class="site-heading"><strong>What</strong> will the future bring?</h3>
                    <p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="site-block">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th class="text-center">Year</th>
                                <th class="text-center">Projects</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 50%;">2009</td>
                                <td><strong>300</strong></td>
                            </tr>
                            <tr>
                                <td>2010</td>
                                <td><strong>450</strong></td>
                            </tr>
                            <tr>
                                <td>2011</td>
                                <td><strong>1000</strong></td>
                            </tr>
                            <tr>
                                <td>2012</td>
                                <td><strong>1200</strong></td>
                            </tr>
                            <tr>
                                <td>2013</td>
                                <td><strong>1800</strong></td>
                            </tr>
                            <tr>
                                <td>2014</td>
                                <td><strong>2000</strong> &amp; Counting..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="site-block">
                    <p class="text-center">
                        <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote>
                        <p>I'm grateful we made it that far and continue strong! Thank you all for supporting us!</p>
                        <footer><strong>John Doe</strong>, CEO</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Company Info -->

<!-- Work Together Action -->
<section class="site-content site-section themed-background-dark-night">
    <div class="container">
        <div class="site-block text-center">
            <a href="contact.php" class="btn btn-lg btn-primary">Let's work together!</a>
        </div>
    </div>
</section>
<!-- END Work Together Action -->

<!-- Quick Stats -->
<section class="site-content site-section themed-background">
    <div class="container">
        <!-- Stats Row -->
        <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="row" id="counters">
            <div class="col-sm-6 col-md-3">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="6800" data-after="+"></span>
                    <small>Projects</small>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="5500" data-after="+"></span>
                    <small>Happy Customers</small>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="12362"></span>
                    <small>Cups of Coffee</small>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="2150"></span>
                    <small>Awesome Days</small>
                </div>
            </div>
        </div>
        <!-- END Stats Row -->
    </div>
</section>
<!-- END Quick Stats -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/about.js"></script>
<script>$(function(){ About.init(); });</script>

<?php include 'inc/template_end.php'; ?>
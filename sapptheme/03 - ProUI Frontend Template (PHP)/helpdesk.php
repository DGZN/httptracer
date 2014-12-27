<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><i class="fa fa-support"></i> <strong>Helpdesk</strong></h1>
        <h2 class="h3 text-center animation-slideUp push">How can we help you?</h2>
        <div class="text-center">
            <form action="helpdesk.php" method="post" class="form-horizontal" onsubmit="return false;">
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <label class="sr-only" for="helpdesk-question">Search</label>
                        <div class="input-group input-group-lg">
                            <input type="text" id="helpdesk-question" name="helpdesk-question" class="form-control" placeholder="Have a question? Ask or enter a search term..">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- END Intro -->

<!-- Helpdesk -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Tutorials -->
                        <h3 class="push-bit"><i class="fa fa-pencil"></i> <strong>Tutorials</strong></h3>
                        <ul class="fa-ul ul-breath push">
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to get started</a>
                                <p class="text-muted"><small>6 days ago by <strong>Bobby Miller</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to change your username</a>
                                <p class="text-muted"><small>2 weeks ago by <strong>Stephen Jacobs</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to change your email</a>
                                <p class="text-muted"><small>1 month ago by <strong>Randy Guzman</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to refer more people</a>
                                <p class="text-muted"><small>1 year ago by <strong>Bobby Miller</strong></small></p>
                            </li>
                        </ul>
                        <!-- END Tutorials -->

                        <!-- Membership -->
                        <h3 class="push-bit"><i class="fa fa-user"></i> <strong>Membership</strong></h3>
                        <ul class="fa-ul ul-breath push">
                            <li>
                                <i class="fa fa-arrow-right fa-li"></i> <a href="javascript:void(0)">What are the available plans?</a>
                                <p class="text-muted"><small>3 months ago by <strong>Gerald Freeman</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right fa-li"></i> <a href="javascript:void(0)">Can I cancel my membership?</a>
                                <p class="text-muted"><small>4 months ago by <strong>Megan Obrien</strong></small></p>
                            </li>
                        </ul>
                        <!-- END Membership -->

                        <!-- Payments -->
                        <h3 class="push-bit"><i class="fa fa-money"></i> <strong>Payments</strong></h3>
                        <ul class="fa-ul ul-breath push">
                            <li>
                                <i class="fa fa-arrow-right fa-li"></i> <a href="javascript:void(0)">What are the available payment services?</a>
                                <p class="text-muted"><small>1 year ago by <strong>Sharon Mills</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-arrow-right fa-li"></i> <a href="javascript:void(0)">Can I request a refund?</a>
                                <p class="text-muted"><small>1 year ago by <strong>Henry Castro</strong></small></p>
                            </li>
                        </ul>
                        <!-- END Payments -->
                    </div>
                    <div class="col-sm-6 ">
                        <!-- Features -->
                        <h3 class="push-bit"><i class="fa fa-rocket"></i> <strong>Features</strong></h3>
                        <ul class="fa-ul ul-breath push">
                            <li>
                                <i class="fa fa-check fa-li"></i> <a href="javascript:void(0)">How to use our email service</a>
                                <p class="text-muted"><small>6 days ago by <strong>Harold Rodriguez</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> <a href="javascript:void(0)">How to enable the tasks feature</a>
                                <p class="text-muted"><small>2 weeks ago by <strong>Kenneth Daniels</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> <a href="javascript:void(0)">New features roundup for v3.0</a>
                                <p class="text-muted"><small>1 month ago by <strong>Ashley Henry</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-check fa-li"></i> <a href="javascript:void(0)">Introducing auto backups</a>
                                <p class="text-muted"><small>3 months ago by <strong>AMary Dean</strong></small></p>
                            </li>
                        </ul>
                        <!-- END Features -->

                        <!-- Articles -->
                        <h3 class="push-bit"><i class="fa fa-file-text"></i> <strong>Articles</strong></h3>
                        <ul class="fa-ul ul-breath push">
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">What are the best third party apps?</a>
                                <p class="text-muted"><small>1 hour ago by <strong>Dennis Johnson</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">What are the best third party apps?</a>
                                <p class="text-muted"><small>3 days ago by <strong>Linda Daniels</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to get started</a>
                                <p class="text-muted"><small>6 days ago by <strong>Bobby Miller</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to change your username</a>
                                <p class="text-muted"><small>2 weeks ago by <strong>Stephen Jacobs</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to change your email</a>
                                <p class="text-muted"><small>1 month ago by <strong>Randy Guzman</strong></small></p>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to refer more people</a>
                                <p class="text-muted"><small>1 year ago by <strong>Bobby Miller</strong></small></p>
                            </li>
                        </ul>
                        <!-- END Articles -->
                    </div>
                </div>
                <!-- END All Categories -->
            </div>
            <!-- END Content -->

            <!-- Sidebar -->
            <div class="col-sm-4 col-md-3">
                <aside class="sidebar site-block">
                    <!-- Contact Us -->
                    <div class="sidebar-block">
                        <div class="alert alert-warning">
                            <h4><i class="fa fa-medkit"></i> <strong>Extra Support</strong></h4>
                            <p>Didn't find what you were looking for? Feel free to <a href="contact.php" class="alert-link">contact us</a>.</p>
                        </div>
                    </div>
                    <!-- END Contact Us -->

                    <!-- Categories -->
                    <div class="sidebar-block">
                        <h4 class="site-heading"><strong>All</strong> Categories</h4>
                        <ul class="list-unstyled ul-breath">
                            <li><a href="javascript:void(0)" class="label label-default">Tutorials (25)</a></li>
                            <li><a href="javascript:void(0)" class="label label-warning">Features (19)</a></li>
                            <li><a href="javascript:void(0)" class="label label-success">Payments (32)</a></li>
                            <li><a href="javascript:void(0)" class="label label-info">Membership (14)</a></li>
                            <li><a href="javascript:void(0)" class="label label-danger">Articles (17)</a></li>
                        </ul>
                    </div>
                    <!-- END Categories -->

                    <!-- Popular Articles -->
                    <div class="sidebar-block">
                        <h4 class="site-heading"><strong>Popular</strong> Articles</h4>
                        <ul class="fa-ul ul-breath">
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Is my data secured?</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to get started?</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Can I change my username?</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Can I change my email?</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">How to refer more people</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Intro for advanced users</a></li>
                        </ul>
                    </div>
                    <!-- END Popular Articles -->

                    <!-- Latest Articles -->
                    <div class="sidebar-block">
                        <h4 class="site-heading"><strong>Latest</strong> Articles</h4>
                        <ul class="fa-ul ul-breath">
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Get a free subscription</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Special Offers</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Intro for advanced users</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Is my data secured?</a></li>
                            <li><i class="fa fa-file-text-o fa-li"></i> <a href="javascript:void(0)">Tips and Tricks</a></li>
                        </ul>
                    </div>
                    <!-- END Latest Articles -->
                </aside>
            </div>
            <!-- END Sidebar -->
        </div>
    </div>
</section>
<!-- END Helpdesk -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Error Container -->
<div id="error-container">
    <div class="error-options">
        <h3><i class="fa fa-chevron-circle-left text-muted"></i> <a href="page_ready_search_results.php">Go Back</a></h3>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
            <h1 class="animation-fadeIn"><i class="fa fa-times-circle-o text-muted"></i> 401</h1>
            <h2 class="h3">Oops, we are sorry but you are not authorized to access this page..</h2>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <form action="page_ready_search_results.php" method="post">
                <input type="text" id="search-term" name="search-term" class="form-control input-lg" placeholder="Search <?php echo $template['name']; ?>..">
            </form>
        </div>
    </div>
</div>
<!-- END Error Container -->

<?php include 'inc/template_end.php'; ?>
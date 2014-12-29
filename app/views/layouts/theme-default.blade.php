<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Lazylytics</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="{{ URL::asset( '/css/styles.css') }} " rel="stylesheet">
   <!--  <link href="{{ URL::asset('/css/font-awesome.min.css') }}" rel="stylsheet"> -->

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <link href="{{ URL::asset( '/css/datatables-styles.css') }} " rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    
    <!-- Morris Charts JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


    
    

    @yield('header')

	</head>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Lazylytics</a>
    	</div>
    </nav>
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!--sidebar-->
        <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="{{ URL::asset('lazylytics') }}">Dashboard</a></li>
              <li><a href="{{ URL::asset('lazylytics/analytics') }}">Tracer</a></li>
              <li><a href="#section2">Analytics</a></li>
              <li><a href="#section3">Settings</a></li>
              <li><a href="#">Help</a></li>
            </ul>
           </div>
        </div><!--/sidebar-->
  	     
         @yield('content')
        
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
  




@yield('footer')

<footer><!--footer-->
  <div class="container">
      	<div class="row">
          <!-- <ul class="list-unstyled text-right">
            <li class="col-sm-4 col-xs-6">
              <a href="#">About</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Services</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Studies</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">References</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Login</a>
            </li>
           <li class="col-sm-4 col-xs-6">
              <a href="#">Press</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Contact</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Impressum</a>
            </li>
          </ul> -->
		</div><!--/row-->
    </div><!--/container-->
</footer>
        
	<!-- script references -->
		

    @yield('footer-scripts')

    <!-- Databales JS -->
    <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- <script src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script> -->
    
    {{ HTML::script('js/scripts.js', array('async' => 'false')) }}

	</body>
</html>
<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<title>Laravel PHP Framework</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<style>

		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			/*background-color: #808080;*/
			
		}

		.content {
			position: relative;
			top: 200px;
			width: 800px;
			height: auto;
			margin: 0 auto;
			
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			/*font-size: 32px;*/
			margin: 16px 0 16px 0;
		}

		.users{
			position: relative;
			text-align: left;
		}

		.userRow {
			position: relative;
			font-size: .9em;
			line-height: 1em;
			color: grey;
		}


		.endpointGraph {
			height: 150px;
		}

		.endpointStats {
			font-size: 18px;
			font-weight: bold;
			text-decoration: underline;
		}

		.traces {
			position: relative;
			margin: 0 auto;
			width: 500px;
			height: auto;
			text-align: left;
			font-size: 18px;
		}

		.trace {
			position: relative;
			width: 500px;
			height: 25px;
			background-color: rgba(64,64,64,.5);
			border: 1px dotted black;
			padding: 10px;
		}

		.traceID {
			font-size:  16px;
			font-weight: bold;
			margin: 1px;
		}

		.traceTime {
			font-size:  16px;
			font-weight: bold;
			margin: 1px;
		}

		.traceDate {
			font-size: 13px;
			margin: 1px;
		}

		.navbar-grey {
		background-color: rgba(64,64,64,.3);
		color: rgba(64,64,64,1);
		margin-bottom: 100px;
		}

		.content-container {
			position: absolute;
			margin: 0 auto;
			width: 90%;
			height: auto;
			min-height: 900px;
			border-radius: 15px;
			border: 1px solid black;
			
		}

		/*input[type=text] {
			width: 350px;
			height: 40px;
			font-size: 16px;
		    border: 1px solid black; 

		    -webkit-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 

		    -moz-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 

		    box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 

		    padding: 2px;
		    background: rgba(64,64,64,0.5);
		    margin: 1px;
		}*/

	</style>
	
	v

</head>
<body>

	<div class="container-fluid">

		@yield('content')


		@yield('footer')

	</div>

</body>
</html>
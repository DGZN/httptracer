@extends('layouts.theme-default')

@section('header')

<style>

.graph {
	position: relative;
	top: 100px;
}

.endpoint h3 {
	color: #9d9d9d;
	font-weight: 400;
	font-size: 20px;
}

.endpoint h3 span {
	color: #9d9d9d;
	font-weight: 400;
	font-size: 14px;
}

.endpointStats {
	/*border: 1px dotted rgba(64,64,64, .3);*/
/*	background-color: rgba(64,64,64, .05);
*/	border-radius: 5px;
	margin-top: 75px;
	text-align: center;
}

.endpointStats h4 {
	font-size: 35px;
	font-weight: 400;
	margin: 25px;
}

.endpointStats h4 .sub {
	position: relative;
	top: -5px;
	left: -1%;
	font-size: 16px;
	font-style: italic;
	font-weight: 400;
}

#endpointGraph {
	position: relative;
	margin: 0 auto;
	width: 90%;
	height: 300px;
	margin-top: 30px;
}

</style>

@stop


@section('content')


<div class="col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav">
          
          <br/><br/>

        <div class="row">        

            <div class="col-sm-11">

				<div class="content">

					<div class="endpoint">

						<h3> {{ $endpoint->name }} <a href="{{ url( 'endpoints/' . $endpoint->id . '/edit' ) }}" > <span class="pull-right glyphicon glyphicon-th-list"> </span> </a> </h3>

				    	<div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-danger"> {{ $traces['max'] }} <span class="sub">ms</span> </h4>

		                	</form>

		                </div>

		                <div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-primary"> {{ $traces['avg'] }} <span class="sub">ms</span> </h4>

		                	</form>
		                	
		                </div>

		                <div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-success"> {{ $traces['min'] }} <span class="sub">ms</span> </h4>

		                	</form>
		                	
		                </div>

		                <div class="graph">

					    	<div id="endpointGraph" ></div> 
					    	
					    </div>

					</div> 

				</div>

			</div>

		</div>

@stop

@section('footer-scripts')

	<script>

		$( document ).ready(function() {

		    new Morris.Line({
			  element: 'endpointGraph',
			  data: [

			  	@for ( $i = 0; $i < count($traces['records']); $i++)
					    
					{ year: '{{ $traces['records'][$i]['date'] }}', value:  {{ $traces['records'][$i]['time'] }} }

					@if ( $i < count($traces['records']) ) 

						{{ ',' }}

					@endif

				@endfor

			  ],
			  xkey: 'year',
			  ykeys: ['value'],
			  labels: ['Time'],
			  postUnits: ' (ms)',
			  hideHover: true,
			  lineWidth: 2.5,
			  pointSize: 0,
			  parseTime: false,
			  xLabels: 'week',
			  grid: false,
			  resize: true,
			  gridTextColor: '#7D7D7D',
			  gridTextSize: 0,
			  gridTextWeight: 600,
			  lineColors: ['#31708f'],
			  smooth: true,
			  fillOpacity: '.2'
			})

		})
	

	</script>

@stop
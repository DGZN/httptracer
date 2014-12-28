@extends('layouts.theme-default')

@section('header')

<style>

.graph {
	position: relative;
	top: 100px;
	color: #000000;
	margin-bottom: 150px;
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

#endpointRecords {
	position: relative;
	top: 50px;
	width: 100%;
	height: auto;
}

#endpointTable {
	display: none;
	margin-bottom: 25px;
	color: #ffffff;
}

.endpointRecordsBody{
	font-size: 12px;
	font-weight: 300;
	cursor: pointer;
}

.deleteTrace {
	cursor: pointer;
}

.endpointStatPanel {
	position: relative;
	margin-top: 50px;
	color: #ffffff;
}

.dataTables_wrapper .dataTables_filter input {
	background-color: #1E1E1E;
	border: 0px;
	color: #6E6E6E;
	outline: 0;
}

/**
-------------------------------------------
PROGRESS BAR
-------------------------------------------
**/
.progress {
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
}
.progress.progress-sidebar 		{margin: 15px 0 0 0;}
.progress.progress-sm 			{height: 10px;}
.progress.progress-xs 			{height: 5px;}
.progress.no-rounded 			{border-radius: 0px;}
.progress-bar {
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0);
}
.progress.progress-sm.progress-striped .progress-bar {background-size: 20px 20px;}
.progress.progress-xs.progress-striped .progress-bar {background-size: 10px 10px;}
.progress-bar-primary 			{background-color: #37BC9B;}
.progress-bar-success 			{background-color: #8CC152;}
.progress-bar-info 				{background-color: #3BAFDA;}
.progress-bar-warning 			{background-color: #F6BB42;}
.progress-bar-danger 			{background-color: #E9573F;}

.bg-dark {
	background-color: #1E1E1E;
	background-image: none !important; 
}

</style>

@stop


@section('content')


<div class="col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav">
          
          <br/><br/>

        <div class="row">        

            <div class="col-sm-12">

				<div class="content">

					<div class="endpoint">

						<h3> {{ $endpoint->name }} <span class="pull-right"> {{ $traces['report'] }} </span> </h3>

				    	<div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-danger"> <span id="traceMax"> {{ $traces['max'] }} </span> <span class="sub">ms</span> </h4>

		                	</form>

		                </div>

		                <div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-primary"> <span id="traceAvg"> {{ $traces['avg'] }} </span> <span class="sub">ms</span> </h4>

		                	</form>
		                	
		                </div>

		                <div class="endpointStats col-md-4">

		                	<form class="form-horizontal" role="form">

		                		<h4 class="text-success"> <span id="traceMin"> {{ $traces['min'] }} </span> <span class="sub">ms</span> </h4>

		                	</form>
		                	
		                </div>

		                <div class="row">

		                	<div class="col-md-6 col-sm-6">

						    	<div id="endpointRecords" class="input-group input-group-sm" >

						    		<input type="hidden" value="{{ $endpoint->id }}" id="endpointID" >

						    		<table id="endpointTable" class="cel-border hover stripe compact">

									    <thead>
									        <tr>
									            <th>Trace Time (ms)</th>
									            <th>Date</th>
									            <th>Timestamp</th>
									        </tr>
									    </thead>

									    <tbody class="endpointRecordsBody">

										    <!-- @foreach ( $traces['records'] as $trace )

								    			<tr>

								    				<td> {{ link_to( "/traces/{$endpoint->id}-{$trace['timestamp']}:{$trace['time']}", $trace['time']) }} </td> 

								    				<td> {{ $trace['date'] }} </td>

								    				<td> {{ $trace['timestamp'] }} <span class="deleteTrace pull-right glyphicon glyphicon-remove" data-trace-id="{{ $endpoint->id }}-{{ $trace['timestamp'] }}:{{ $trace['time'] }}"></span></td>


								    			</tr>

								    		@endforeach -->

									    </tbody>

									</table>

						    	</div> 
						    	
						    </div>

						    <div class="col-md-5 col-sm-4 endpointStatPanel">

								<h4 class="big-heading">APDEX Score: {{ $traces['apdexScore'] }}</h4>

								<p class="big">Frusturating Traces - <span class="text">[{{ count($traces['apdex']['frusturating']) }} traces]</span></p>

								<div class="progress no-rounded progress-xs bg-dark">
								  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $traces['apdex']['stats']['frusturatingPct'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $traces['apdex']['stats']['frusturatingPct'] }}%">
								  </div><!-- /.progress-bar .progress-bar-danger -->
								</div><!-- /.progress .no-rounded -->
								
								<p class="big">Tolerable Traces - <span class="text">[{{ count($traces['apdex']['tolerable']) }} traces]</span></p>
								
								<div class="progress no-rounded progress-xs bg-dark">
								  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $traces['apdex']['stats']['tolerablePct'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $traces['apdex']['stats']['tolerablePct'] }}%">
								  </div><!-- /.progress-bar .progress-bar-warning -->
								</div><!-- /.progress .no-rounded -->
								
								<p class="big">Satifactory Traces - <span class="text">[{{ count($traces['apdex']['satisfactory']) }} traces]</span></p>
								
								<div class="progress no-rounded progress-xs bg-dark">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $traces['apdex']['stats']['satisfactoryPct'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $traces['apdex']['stats']['satisfactoryPct'] }}%">
								  </div><!-- /.progress-bar .progress-bar-success -->
								</div><!-- /.progress .no-rounded -->
								
								<!-- <p class="small">Social - <span class="text-defaul">[234 users]</span></p>
								
								<div class="progress no-rounded progress-xs bg-dark">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
								  </div>
								</div> -->

							</div><!-- /.col-sm-6 -->

						</div>

					</div> 

				</div>

			</div>

		</div>

@stop

@section('footer-scripts')

	

@stop
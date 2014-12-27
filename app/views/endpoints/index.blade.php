@extends('layouts.default')

@section('content')

	<style>

	@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,400,300);

	body {
		/*font-family: 'Ubuntu', sans-serif;*/
	}

	.endpoints {
		position: relative;
		margin: 15px;
	}

	.endpointOverview {
		position: relative;
		display: inline-block;
		margin: 6px 12px 6px 0;
		width: 325px;
		height: 325px;
		border: 1px solid black;
		border-radius: 10px;
		background-color: rgba(124,124,124,.7);
		text-align: center;
	}

	.endpointOverview a {
		font-size: 18px;
		font-weight: 300;
		text-decoration: none;
		color: white;
	}

	</style>
 
	<h1>Endpoints</h1>

	<div class="endpoints">

		<div class="row">

			@if ( count($endpoints) )

				@foreach ($endpoints as $endpoint)

					<div class="col-md-2 endpointOverview"> 

						<h3> {{ link_to( "/endpoints/{$endpoint->id}", $endpoint->name) }} </h3>

					</div>

				@endforeach

			@else

				<h1> Sorry, there are no endpoints! </h1>

			@endif

		</div>

	</div>

@stop

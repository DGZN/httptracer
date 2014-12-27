@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>Endpoint Group</h1>

		<div class="endpointGroup">

			<h1>  {{ $endpointGroup->name }} </h1>

			<h3>  {{ $endpointGroup->description }}  </h3>

			<div class="endpointGroups endpoints">

				@forEach ($endpoints as $endpoint)

					<div class="endpoint">

						<span> {{ link_to( "/endpoints/{$endpoint->id}", $endpoint->name) }} </span>

					</div>

				@endForeach

			</div>

		</div>

	</div>
@stop
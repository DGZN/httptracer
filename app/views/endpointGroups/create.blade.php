@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>Create New Endpoint Group</h1>

		{{ Form::open( [ 'route' => 'endpointGroups.store' ] ) }}

			<div>

				{{ Form::label('name', 'Name: ') }}

				{{ Form::text('name') 			     }}

				{{ $errors->first('name', '<span class="errors">:message</span>') }}

			</div>

			<div>

				{{ Form::label('description', 'Description: ') }}
				
				{{ Form::text('description') 			 }}

				{{ $errors->first('description', '<span class="errors">:message</span>') }}

			</div>

			<div> {{ Form::submit('Create Endpoint Group') }} </div>

		{{ Form::close() }}

	</div>
@stop

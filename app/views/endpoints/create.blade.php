@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>Create New Endpoint</h1>

		{{ Form::open( [ 'route' => 'endpoints.store' ] ) }}

			<div>

				{{ Form::label('name', 'Name: ') }}

				{{ Form::text('name') 			     }}

				{{ $errors->first('name', '<span class="errors">:message</span>') }}

			</div>

			<div>

				{{ Form::label('uri', 'URI: ') }}
				
				{{ Form::text('uri') 			 }}

				{{ $errors->first('uri', '<span class="errors">:message</span>') }}

			</div>

			<div> {{ Form::submit('Create Endpoint') }} </div>

		{{ Form::close() }}

	</div>
@stop

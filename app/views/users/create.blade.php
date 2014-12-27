@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>Create New User</h1>

		{{ Form::open( [ 'route' => 'users.store' ] ) }}

			<div>

				{{ Form::label('email', 'Email: ') }}

				{{ Form::text('email') 			     }}

				{{ $errors->first('email', '<span class="errors">:message</span>') }}

			</div>

			<div>

				{{ Form::label('password', 'Password: ') }}
				
				{{ Form::password('password') 			 }}

				{{ $errors->first('password', '<span class="errors">:message</span>') }}

			</div>

			<div> {{ Form::submit('Create User') }} </div>

		{{ Form::close() }}

	</div>
@stop

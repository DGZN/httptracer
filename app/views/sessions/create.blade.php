@extends('layouts.default')

@section('content')

	<style>

		.form-group.login-form {
			position: relative;
			margin: 0 auto;
		}

		.btn.login {
			position: relative;
			float: right;
			
		}

		.login-fields div {
			margin: 10px 0 10px 0;
		}

	</style>


	<div class="form-group login-form">		

		{{ Form::open( [ 'route' => 'sessions.store' ] ) }}

		<div class="row">

			<div class="col-md-6 col-md-offset-2 login-fields">

				<h1>Login</h1>

				<div>

					{{ Form::label('email', 'Email: ') }}

					{{ Form::text('email', null, array('class' => 'form-control')) }}

					{{ $errors->first('email', '<span class="errors">:message</span>') }}

				</div>

				<div>

					{{ Form::label('password', 'Password: ') }}
					
					{{ Form::password('password', array('class' => 'form-control')) }}

					{{ $errors->first('password', '<span class="errors">:message</span>') }}

				</div>

				<div>

				{{ Form::submit('Login', array('class' => 'btn login btn-primary')) }} 

				</div>

			</div>

		</div> 

		

			

			

		{{ Form::close() }}

	</div>

@stop
@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>Users</h1>

		<div class="users">

			@if ( count($users) )

				@foreach ($users as $user)

					<li> {{ link_to( "/users/{$user->id}", $user->email) }} </li>

				@endforeach

			@else

				<h1> Sorry, there are no users! </h1>

			@endif

		</div>

	</div>
@stop

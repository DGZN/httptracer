@extends('layouts.default')

@section('content')
	<div class="content">

		<h1>User</h1>

		<div class="user">

			<h1> Welcome {{ $user->email }} </h1>

		</div>

	</div>
@stop
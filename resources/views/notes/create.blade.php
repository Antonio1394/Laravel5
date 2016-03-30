@extends('layout')

@section('content')
	<h1>Create a note</h1>
	<form method="post" action="{{ url('notes') }}">
		{!! csrf_field() !!}

		<textarea name="note"></textarea>
		<button type="submit">Create note</button>
	</form>

@endsection
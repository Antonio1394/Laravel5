@extends('layout')

@section('content')
	<h1>Create a note</h1>
	@if (! $errors->isEmpty())
	<div class="alert alert-danger">
		<p><strong>Opps!</strong> Please fix the following errors:</p>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form method="post" action="{{ url('notes') }}" class="form">
		{!! csrf_field() !!}

		<textarea name="note" class="form-control">{{ old('note') }}</textarea>
		<br>
		<button type="submit" class="btn btn-primary">Create note</button>
	</form>

@endsection
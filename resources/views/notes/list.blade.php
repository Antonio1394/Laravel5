@extends('layout')

@section('content')
	<h2>Notes</h2>
	<p>
		<a href="{{ url('notes/create') }}">Add a note</a>
	</p>
	<ul class="list-group">
		@foreach($notes as $note)

			<li class="list-group-item">
			@if ($note->category)
				<span class="label label-danger">{{ $note->category->name }}</span>
			@else
				<span class="label label-danger">Others</span>	
			@endif
				{{ $note->note }}
				<a  class="btn btn-danger btn-xs" href="#">View note</a>
			</li>
		@endforeach
	</ul>
	{!! $notes->render() !!}
@endsection
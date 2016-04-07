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
				<span class="label label-info">Others</span>	
			@endif
				{{ substr($note->note, 0, 100) }}...
				<a style="float=right" class="btn btn-primary btn-xs" href="{{ url('notes/'.$note->id) }}">View note</a>
			</li>
		@endforeach
	</ul>
	{!! $notes->render() !!}
@endsection
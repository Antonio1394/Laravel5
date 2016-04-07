@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Create a note</h1>
			{{ $note -> note }}
			<p>
				Categoria:
				@if ($note->category)
					<span class="label label-danger">{{ $note->category->name }}</span>
				@else
					<span class="label label-info">Others</span>	
				@endif
			</p>
			
		</div>
	</div>
	

@endsection
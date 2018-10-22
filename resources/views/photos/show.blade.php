@extends('layouts.app')

@section('content')
	<a href={{ URL::previous() }}>Back</a>
	<h1 class="h3">Photo id: {{ $photo->id }}</h1>
	{{-- <img class="img-fluid" src="{{ asset($photo->image) }}">
	<p class="footer">
		{{ $photo->text }}
	</p>
	<small class="text-muted">Upload date: {{ $photo->created_at }}</small> --}}
	@include('photos.photocard')
@endsection

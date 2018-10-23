@extends('layouts.app')

@section('content')
<div class='jumbotron rounded-bottom text-center shadow'>
    <h1 class="h1">Ivan Morales</h1>
	<nav class="flex-row d-flex">
		<ul class='nav nav-pills'>
			@foreach ($links as $link)
				<li class='nav-item pr-2'>
					<a target="{{ $link[2] }}" class='nav-link btn btn-light' href="{{ $link[0] }}">{{ $link[1] }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>

{{-- Formulario --}}
<div class="row">
	<form class="col-3" action="/photos/create" method="post">
		<div class="form-group">
			{{ csrf_field() }}
			<input type="text" name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" placeholder="Describe la imagen">
			@if ($errors->has('description'))
				@foreach ($errors->get('description') as $error)
					<div class="invalid-feedback">
						{{ $error }}
					</div>
				@endforeach
			@endif
		</div>
	</form>
</div>

<div class="row">
	<div class="col-12">
		<div class="card-columns">
			@forelse ($photos as $photo)
				{{-- <div class="card mb-4 shadow">
					<img class="card-img-top" src="{{ $photo->image }}">
					<div class="card-body">
						<h5 class="card-title">{{ $photo->text }}</h5>
						<p class="card-text">Submitted by {{ $photo->user->name }}<br>
						<span class="text-muted">{{ $photo->created_at }}</span></p>
						<a class="btn btn-block btn-light" href="photos/{{ $photo->id }}">Open</a>
					</div>
				</div> --}}
				@include('photos.photocard')
			@empty
				<div class="col-12">
					<p>
						No hay fotos para mostrar
					</p>
				</div>
			@endforelse
		</div>
	</div>

	{{-- Paginado --}}
	@if (count($photos))
		<div class="col-12 mt-4">
			<div class="d-flex pagination justify-content-center">
				{{ $photos->links() }}
			</div>
		</div>
	@endif
</div>
@endsection

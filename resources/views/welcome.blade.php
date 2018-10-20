@extends('layouts.app')

@section('content')
<div class='jumbotron text-center shadow'>
    <h1 class="h3">Ivan Morales</h1>
	<nav class="flex-row d-flex">
		<ul class='nav nav-pills'>
			@foreach ($links as $link => $text)
				<li class='nav-item pr-2'>
					<a target="_blank" class='nav-link btn btn-light' href="{{ $link }}">{{ $text }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>

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
	@forelse ($photos as $photo)
		<div class="col-6 mb-4 d-flex">
		{{-- @if ($photo->id % 2) pl-3 pr-2 @else pl-2 pr-3 @endif"> --}}
			<div class="card shadow-sm">
				<div class="p-2">
					<a href="photos/{{ $photo->id }}">
						<img class="img-thumbnail" src="{{ $photo->image }}">
					</a>
					<p class="card-text mb-1">
						{{ $photo->text }}
					</p>
					<a class="btn btn-block btn-light"href="photos/{{ $photo->id }}">Open</a>
				</div>
			</div>
		</div>
	@empty
		<div class="col-12">
			<p>
				No hay fotos para mostrar
			</p>
		</div>
	@endforelse

	@if (count($photos))
		<div class="col-12 mt-2">
			<div class="d-flex justify-content-center">
				{{ $photos->links() }}
			</div>
		</div>
	@endif
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class='jumbotron text-center'>
    <h1 class="h3">Ivan Morales</h1>
	<nav>
		<ul class='nav nav-pills'>
			@foreach ($links as $link => $text)
				<li class='nav-item'>
					<a class='nav-link' href="{{ $link }}">{{ $text }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>

<div class="row">
	<form action="/photos/create" method="post">
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
		<div class="col-6">
			<a href="photos/{{ $photo->id }}">
				<img class="img-thumbnail" src="{{ $photo->image }}">
			</a>
			<p class="card-text">
				{{ $photo->text }}
				<a href="photos/{{ $photo->id }}">Open</a>
			</p>
		</div>
	@empty
		<div class="col-12">
			<p>
				No hay fotos para mostrar
			</p>
		</div>
	@endforelse
</div>
@endsection

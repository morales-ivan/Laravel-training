@extends('layouts.app')

@section('content')
<div class='jumbotron text-center shadow'>
    <h1 class="h3">Ivan Morales</h1>
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
		<div class="col-12 col-md-6 mb-4 d-flex">
			<div class="d-flex flex-column card p-2">
				<div class="mb-auto">
					<a href="photos/{{ $photo->id }}">
						<img class="img-thumbnail" src="{{ $photo->image }}">
					</a>
					<p class="card-text mb-1">{{ $photo->text }}</p>
				</div>
				<a class="btn btn-block btn-light" href="photos/{{ $photo->id }}">Open</a>
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

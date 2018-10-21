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
	<div class="col-6 mb-4 d-flex">
		<div class="d-flex flex-column card p-2">
			<div class="mb-auto">
				<a href="/prueba">
					<img class="img-thumbnail" src="https://lorempixel.com/640/360/transport/?0">
				</a>
				<p class="card-text">Descripcion de la foto numero 1, esto es una prueba de texto corta</p>
			</div>
			<a class="btn btn-block btn-light" href="/prueba">Open</a>
		</div>
	</div>
	@for ($i=1; $i < 4; $i++)
	<div class="col-6 mb-4 d-flex">
		<div class="d-flex flex-column card p-2">
			<div class="mb-auto">
				<a href="/prueba">
					<img class="img-thumbnail" src="https://lorempixel.com/640/360/transport/?{{ $i }}">
				</a>
				<p class="card-text">Descripcion de la foto numero {{ $i+1 }}, esto es una prueba de texto mas larga para que pueda wrapear el texto</p>
			</div>
			<a class="btn btn-block btn-light" href="/prueba">Open</a>
		</div>
	</div>
	@endfor
</div>
@endsection

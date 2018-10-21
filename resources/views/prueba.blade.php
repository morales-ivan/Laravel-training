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
	<div class="col-12 col-md-6 mb-4 d-flex">
		<div class="card shadow-sm">
			<img class="card-img-top" src="https://lorempixel.com/640/360/transport/?0">
			<div class="card-body d-flex flex-column">
				<p class="card-text">Descripcion de la foto numero 1, esto es una prueba de texto corta</p>
				<a class="btn btn-block btn-light mt-auto" href="/prueba">Open</a>
			</div>
		</div>
	</div>
	@for ($i=1; $i < 4; $i++)
	<div class="col-12 col-md-6 mb-4 d-flex">
		<div class="d-flex flex-column card shadow-sm">
			<img class="card-img-top" src="https://lorempixel.com/640/360/transport/?{{ $i }}">
			<div class="card-body">
				<p class="card-text">Descripcion de la foto numero {{ $i+1 }}, esto es una prueba de texto mas larga para que pueda wrapear el texto</p>
				<a class="btn btn-block btn-light mt-auto" href="/prueba">Open</a>
			</div>
		</div>
	</div>
	@endfor
</div>

<div class="row">
  <div class="col-sm-6 d-flex">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content, but with even more text so it has ore than one line and you can appreciate how the button of the cards (look to the next card) always stays on the bottom.</p>
        <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 d-flex">
    <div class="card shadow-sm">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection

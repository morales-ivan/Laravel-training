@extends('layouts.app')

@section('content')
@include('layouts.assets.jumbotron')

<div class="row">
	<div class="col-12">
		<div class="card-columns">
			{{-- <div class="card shadow-sm">
				<img class="card-img-top" src="https://lorempixel.com/640/360/transport/?0">
				<div class="card-body">
					<p class="card-text">Descripcion de la foto numero 1, esto es una prueba de texto corta</p>
					<a class="btn btn-block btn-light mt-auto" href="/prueba">Open</a>
				</div>
			</div> --}}
			<div class="card shadow-sm">
				<img class="card-img-top" src="https://lorempixel.com/640/360/transport/?0">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title">Descripcion de la foto numero 1, esto es una prueba de texto corta</h5>
					<p class="card-text">Submitted by Someone</p>
					<p class="text-muted card-text">17-03-1998</p>
					<a class="btn btn-block btn-light mt-auto" href="#">Open</a>
				</div>
			</div>
			@for ($i=1; $i < 11; $i++)
				<div class="card shadow-sm">
					<img class="card-img-top" src="https://lorempixel.com/640/360/transport/?{{ $i }}">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title">Descripcion de la foto numero {{ $i+1 }}, esto es una prueba de textoun poco mas larga de forma que el texto wrapee mas alla de una linea</h5>
						<p class="card-text">Submitted by Someone</p>
						<p class="text-muted card-text">{{ $i }}-03-1998</p>
						<a class="btn btn-block btn-light mt-auto" href="#">Open</a>
					</div>
				</div>
			@endfor
		</div>
	</div>
</div>

{{-- <div class="row">
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
</div> --}}
@endsection

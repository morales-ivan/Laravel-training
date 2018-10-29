@extends('layouts.app')

@section('content')
<a href={{ URL::previous() }}>Back</a>
@include('layouts.assets.jumbotron')

<div class="content">
    <p>
		Aprendiendo php, html, bootstrap, laravel y mas... _p
	</p>
    <a href="prueba">Pagina de prueba!</a>
</div>
@endsection

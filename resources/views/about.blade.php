@extends('layouts.app')

@section('content')
<div class='jumbotron'>
	<a href={{ URL::previous() }}>Back</a>
    <div class="text-center">
		<h1>Ivan Morales</h1>
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
</div>
<div class="content">
    <p>
		Aprendiendo php, html, bootstrap, laravel y mas... _p
	</p>
    <a href="prueba">Pagina de prueba!</a>
</div>
@endsection

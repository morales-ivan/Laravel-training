@extends('layouts.app')

@section('content')
<div class='jumbotron shadow'>
	<a href={{ URL::previous() }}>Back</a>
	<div class="text-center">
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
</div>

<div class="content">
    <p>
		Aprendiendo php, html, bootstrap, laravel y mas... _p
	</p>
    <a href="prueba">Pagina de prueba!</a>
</div>
@endsection

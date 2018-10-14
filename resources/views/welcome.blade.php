@extends('layouts.app')

@section('content')
<div class='jumbotron text-center'>
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

<div class="row">
	<div class="col-12">
		<img src={{asset('RallyArrecifes01.jpg')}} class="img-fluid"></ig>
	</div>
</div>
@endsection

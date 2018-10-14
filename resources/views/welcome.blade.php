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
	@foreach ($photos as $photo)
		<div class="col-6">
			<img class="img-thumbnail" src="{{ asset($photo['image']) }}">
			<p class="card-text">
				{{ $photo['text'] }}
				<a href="photos/{{ $photo['id'] }}">Open</a>
			</p>
		</div>
	@endforeach
</div>
@endsection

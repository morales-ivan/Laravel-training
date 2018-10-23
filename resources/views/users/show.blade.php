@extends('layouts.app')

@section('content')
{{-- <h1 class="h1">{{ $user->name }}</h1> --}}
<div class="row my-4">
	<div class="col-12 col-md-3">
		<div class="card shadow">
			<div class="card-body pb-1 text-center">
				<img class="rounded-circle shadow-sm img-fluid mb-3" src="{{ $user->avatar }}">
				<h3 class="card-title mb-0">{{ $user->name }}</h4>
				<p class="text-muted">
					{{ $user->username }}
				</p>
			</div>
			<ul class="list-group list-group-flush">
				<a href="/profile/{{ $user->username }}/" class="list-group-item list-group-item-action d-flex align-items-center">Photos <span class="badge badge-pill badge-primary ml-auto">{{ count($user->photos) }}</span></a>
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Following <span class="badge badge-pill badge-primary ml-auto">248</span></a>
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Followers <span class="badge badge-pill badge-primary ml-auto">230</span></a>
			</ul>
		</div>
	</div>
	<div class="col-12 col-md-9">
		@if (count($user->photos))
			<div class="card-columns">
				@foreach ($user->photos as $photo)
					@include('photos.photocard')
				@endforeach
			</div>
		@else
			<p>
				No hay fotos para mostrar.
			</p>
		@endif
	</div>
</div>
@endsection

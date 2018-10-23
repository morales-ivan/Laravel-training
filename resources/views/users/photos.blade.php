@extends('users.profile')

@section('user')
	@include('users.assets.profilecard')
@endsection

@section('userContent')
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
@endsection

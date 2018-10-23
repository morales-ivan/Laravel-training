@extends('users.profile')

@section('user')
	@include('users.assets.profilecard')
@endsection

@section('userContent')
	@if (count($user->following))
		<div class="row">
			@foreach ($user->following as $listedUser)
				<div class="col-12 col-md-4 mb-3">
					@include('users.assets.usercard')
				</div>
			@endforeach
		</div>
	@else
		<p>
			Este usuario no sigue a nadie :/
		</p>
	@endif
@endsection

@extends('users.profile')

@section('user')
	@include('users.assets.profilecard')
@endsection

@section('userContent')
	@if (count($user->followers))
		<div class="row">
			@foreach ($user->followers as $listedUser)
				<div class="col-12 col-md-4 mb-3">
					@include('users.assets.usercard')
				</div>
			@endforeach
		</div>
	@else
		<p>
			Nadie sigue a este usuario :/
		</p>
	@endif
@endsection

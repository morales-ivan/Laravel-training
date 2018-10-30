@extends('users.profile')

{{-- @section('styles')
	.card-columns {
		column-count: 2;

		@include media-breakpoint-up(md) {
			column-count: 3;
		}
}
@endsection --}}

@section('user')
	@include('users.assets.profilecard')
@endsection

@section('userContent')
	@if (count($user->photos))
		<div class="card-columns">
			@foreach ($user->photos as $photo)
				@include('photos.assets.userphotocard')
			@endforeach
		</div>
	@else
		@include('photos.assets.empty')
	@endif
@endsection

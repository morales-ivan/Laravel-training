@extends('layouts.app')

{{-- @section('styles')
	@scss
		.card-columns {
			column-count: 2;

			@include media-breakpoint-up(lg) {
				column-count: 3;
			}
			@include media-breakpoint-up(xl) {
				column-count: 4;
			}
		}
	@endscss
@endsection --}}

@section('content')
<div class="row">
	<div class="col-12 col-md-3 mb-4">
		@yield('user')

		@if (Auth::user()->id == $user->id)
		<button class="btn btn-success btn-block mt-4" data-toggle="modal" data-target="#submission">Subir foto</button>
		@include('photos.upload')
		@endif
	</div>
	<div class="col-12 col-md-9">
		@yield('userContent')
	</div>
</div>
@endsection

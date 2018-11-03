@extends('layouts.app')

@section('content')
@include('layouts.assets.jumbotron')

<button class="btn btn-success mb-4" data-toggle="modal" data-target="#submission">Subir foto</button>
@include('photos.upload')

<div class="row">
	<div class="col-12">
		<div class="card-columns">
			@forelse ($photos as $photo)
				@include('photos.assets.mainphotocard')
			@empty
				<div class="col-12">
					@include('photos.assets.empty')
				</div>
			@endforelse
		</div>
	</div>

	{{-- Paginado --}}
	@if (count($photos))
		<div class="col-12 mt-4">
			<div class="d-flex pagination justify-content-center">
				{{ $photos->links() }}
			</div>
		</div>
	@endif
</div>
@endsection

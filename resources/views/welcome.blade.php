@extends('layouts.app')

@section('content')
@include('layouts.assets.jumbotron')

{{-- Formulario --}}
<div class="row">
	<form class="col-3" action="/photos/create" method="post">
		<div class="form-group">
			{{ csrf_field() }}
			<input type="text" name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" placeholder="Describe la imagen">
			@if ($errors->has('description'))
				@foreach ($errors->get('description') as $error)
					<div class="invalid-feedback">
						{{ $error }}
					</div>
				@endforeach
			@endif
		</div>
	</form>
</div>

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

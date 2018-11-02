<form action="/photos/create" method="post">
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

{{-- <form action="/photos/create" method="post">
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
</form> --}}

<button class="btn btn-success mb-4" data-toggle="modal" data-target="#submission">Subir foto</button>

<div class="modal fade" id="submission" tabindex="-1" role="dialog">
	<form action="/photos/create" method="post" enctype="multipart/form-data">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Envianos una foto!</h5>
			</div>
			<div class="modal-body">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="file">Elige una foto</label>
						<input type="file" name="image" class="form-control-file">
					</div>
					<div class="form-group">
						<label for="description">Describe la imagen</label>
						<input type="text" name="description" class="form-control @if ($errors->has('description')) is-invalid @endif" placeholder="Describe la imagen">
						@if ($errors->has('description'))
							@foreach ($errors->get('description') as $error)
								<div class="invalid-feedback">
									{{ $error }}
								</div>
							@endforeach
						@endif
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Subir</button>
			</div>
		</div>
	</div>
	</form>
</div>

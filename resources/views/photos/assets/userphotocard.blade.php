<div class="card mb-4 shadow">
	<img class="card-img-top" src="{{ $photo->image }}">
	<div class="card-body p-3">
		<h6 class="card-title">{{ $photo->text }}</h5>
		<small class="text-muted text-right">{{ $photo->created_at }}</small></p>
		<a class="btn btn-block btn-light" href="/photos/{{ $photo->id }}">Open</a>
	</div>
</div>

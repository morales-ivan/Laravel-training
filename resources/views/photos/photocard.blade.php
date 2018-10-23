<div class="card mb-4 shadow">
	<img class="card-img-top" src="{{ $photo->image }}">
	<div class="card-body">
		<h5 class="card-title">{{ $photo->text }}</h5>
		<p class="card-text">Submitted by <a href="/profile/{{ $photo->user->username }}">{{ $photo->user->name }}</a><br>
		<small class="text-muted">{{ $photo->created_at }}</small></p>
		<a class="btn btn-block btn-light" href="/photos/{{ $photo->id }}">Open</a>
	</div>
</div>

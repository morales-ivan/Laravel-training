<div class="card shadow">
	<div class="card-body">
		<img class="rounded-circle shadow-sm w-100 img-fluid mb-3" src="{{ $user->avatar }}">
		<h2 class="card-title text-center mb-0">{{ $user->name }}</h2>
		<p class="text-muted text-center">
			{{ $user->username }}
		</p>
		@guest
		@else
			<form action="/profile/{{ $user->username }}/follow" method="post">
				{{ csrf_field() }}
				<button class="btn btn-primary btn-block">Follow</button>
				@if (session('success'))
				<div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
					{{ session('success') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				@endif
			</form>
		@endguest
	</div>
	<ul class="list-group list-group-flush">
		<a href="/profile/{{ $user->username }}/" class="list-group-item list-group-item-action d-flex align-items-center">
			Photos <span class="badge badge-pill badge-primary ml-auto">{{ count($user->photos) }}</span>
		</a>
		<a href="/profile/{{ $user->username }}/following" class="list-group-item list-group-item-action d-flex align-items-center">
			Following <span class="badge badge-pill badge-primary ml-auto">{{ count($user->following) }}</span>
		</a>
		<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Followers <span class="badge badge-pill badge-primary ml-auto">230</span></a>
	</ul>
</div>

<div class="card shadow">
	<div class="card-header">
	    <div class="row">
		    <div class="col-4">
		        <img class="rounded-circle shadow-sm img-fluid" src="{{ $listedUser->avatar }}">
		    </div>
		    <div class="col-8 pl-0 align-items-center">
		        <h4 class="card-title mb-0">{{ $listedUser->name }}</h4>
		        <p class="text-muted mb-0">
					{{ $listedUser->username }}
				</p>
		    </div>
	    </div>
	</div>
	<ul class="list-group list-group-flush">
		<a href="/profile/{{ $listedUser->username }}" class="list-group-item list-group-item-action d-flex">
			Photos <span class="badge badge-pill badge-light ml-auto">{{ count($listedUser->photos) }}</span>
		</a>
		<a href="/profile/{{ $user->username }}/following" class="list-group-item list-group-item-action d-flex align-items-center">
			Following <span class="badge badge-pill badge-light ml-auto">{{ count($user->following) }}</span>
		</a>
	</ul>
	<div class="card-body p-3">
		<div class="row">
		@guest
			<div class="col-12">
				<a href="/profile/{{ $listedUser->username }}" class="btn btn-primary btn-block">View profile</a>
			</div>
		@else
			<div class="col-6 pr-1">
				<a href="/profile/{{ $listedUser->username }}" class="btn btn-primary btn-block">View profile</a>
			</div>
			<div class="col-6 pl-1">
				<form action="/profile/{{ $listedUser->username }}/follow" method="post">
					{{ csrf_field() }}
					<button class="btn btn-light btn-block">Follow</button>
				</form>
				{{-- <a href="/profile/{{ $listedUser->username }}/follow" class="btn btn-light btn-block">Follow</a> --}}
			</div>
		@endguest
		</div>
	</div>
</div>

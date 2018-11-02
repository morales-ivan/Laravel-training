@extends('users.profile')

@section('user')
	@include('users.assets.profilecard')
@endsection

@section('userContent')
<div class="card">
	<div class="card-header">
		Conversacion con {{ $conversation->users->except($me->id)->implode('name', ', ') }}
	</div>
	<ul class="list-group list-group-flush">
		@forelse ($conversation->privateMessages as $message)
		<li class="list-group-item @if ($message->user->id == Auth::user()->id)text-right @endif">
		   <span class="font-weight-bold">{{ $message->user->name }}:</span> {{ $message->message }}<br>
		   <small class="text-muted">{{ $message->created_at }}</small>
		</li>
		@empty
			<div class="card-body text-center">
				No se han enviado mensajes!
			</div>
		@endforelse
	</ul>
	<div class="card-footer">
		@if (Gate::allows('pms', $user))
			<form action="/profile/{{ $user->username }}/messages/send" method="post">
				{{ csrf_field() }}
				<div class="d-flex">
					<input type="text" placeholder="Escribe un mensaje..." name="message" class="form-control mr-3">
					<button class="btn btn-primary">
						<i class="material-icons">send</i>
					</button>
				</div>
			</form>
		@else
			<form action="/profile/{{ $user->username }}/messages/send" method="post">
				{{ csrf_field() }}
				<div class="d-flex">
					<input type="text" placeholder="No puedes enviar un mensaje porque no se siguen mutuamente" name="message" class="form-control mr-3" disabled>
					<button class="btn btn-primary" disabled>
						<i class="material-icons">send</i>
					</button>
				</div>
			</form>
		@endif
	</div>
</div>
@endsection

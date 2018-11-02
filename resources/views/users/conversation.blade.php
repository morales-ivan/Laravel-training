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
		@foreach ($conversation->privateMessages as $message)
       <li class="list-group-item @if ($message->user->id == Auth::user()->id)text-right @endif">
		   <span class="font-weight-bold">{{ $message->user->name }}:</span> {{ $message->message }}<br>
		   <small class="text-muted">{{ $message->created_at }}</small>
	   </li>
		@endforeach
	</ul>
	<div class="card-footer">
		<form action="/profile/{{ $user->username }}/messages/send" method="post">
			{{ csrf_field() }}
			<div class="d-flex">
				<input type="text" placeholder="Escribe un mensaje..." name="message" class="form-control mr-3">
				<button class="btn btn-primary">
					<i class="material-icons">send</i>
				</button>
			</div>
		</form>
	</div>
</div>
@endsection

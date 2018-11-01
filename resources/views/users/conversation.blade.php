@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header">
		Conversacion con {{ $conversation->users->except($user->id)->implode('name', ', ') }}
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
		<form action="/profile/{{ $user->username }}/pms" method="post">
			{{ csrf_field() }}
			<div class="d-flex no-gutters">
				<input type="text" name="message" class="form-control mr-3">
				<button class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</div>
@endsection

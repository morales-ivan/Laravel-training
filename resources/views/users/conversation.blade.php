@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header">
		Conversacion con {{ $conversation->users->except($user->id)->implode('name', ', ') }}
	</div>
	<ul class="list-group list-group-flush">
		@foreach ($conversation->privateMessages as $message)
	       <li class="list-group-item">
			   <span class="font-weight-bold">{{ $message->user->name }}:</span> {{ $message->message }}<br>
			   <span class="text-muted float-right">{{ $message->created_at }}</span>
		   </li>
		@endforeach
	</ul>
</div>
@endsection

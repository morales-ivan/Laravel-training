@extends('layouts.app')

@section('content')
	<ul>
		@foreach ($user->following as $userfollowed)
			<li>{{ $userfollowed->name }}</li>
		@endforeach
	</ul>
@endsection

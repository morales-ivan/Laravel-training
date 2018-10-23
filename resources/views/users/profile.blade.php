@extends('layouts.app')

@section('content')
<div class="row my-4">
	<div class="col-12 col-md-3 mb-4">
		@yield('user')
	</div>
	<div class="col-12 col-md-9">
		@yield('userContent')
	</div>
</div>
@endsection

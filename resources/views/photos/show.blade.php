@extends('users.profile')

@section('user')
	@php
		$user = $photo->user
	@endphp
	@include('users.assets.profilecard')
@endsection

@section('userContent')
	@include('photos.assets.mainphotocard')
@endsection

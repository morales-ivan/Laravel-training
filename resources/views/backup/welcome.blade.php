@extends('layouts.app')

@section('content')
<div class="title m-b-md">
    Ivan Morales
</div>

<div class="links">
    @foreach ($links as $link => $text)
        <a href="{{ $link }}">{{ $text }}</a>
    @endforeach
</div>
@endsection

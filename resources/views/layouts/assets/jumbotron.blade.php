<div class='jumbotron rounded-bottom text-center shadow'>
    <h1 class="h1 mb-4">Ivan Morales</h1>
	<nav class="flex-row d-flex">
		<ul class='nav nav-pills'>
			@foreach ($links as $link)
				<li class='nav-item pr-2'>
					<a target="{{ $link[2] }}" class='nav-link btn btn-light' href="{{ $link[0] }}">{{ $link[1] }}</a>
				</li>
			@endforeach
		</ul>
	</nav>
</div>

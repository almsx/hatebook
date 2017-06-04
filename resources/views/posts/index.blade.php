@extends('layouts.app');

@section('content')

<!-- lo que sigue es una interpolacion -->

<div class="panel-heading">Todos los posts</div>
<div class="panel-body">
	<ul>
		@forelse ($posts as $post)

		<li>
			<!-- Forma normal -->
			<a href="/posts/{{ $post->id }}">
				{{ $post->content }}
			</a>
			<!-- Forma Recomendada -->
			|
			<a href="{{ url('posts', $post->id)}}">
				{{ $post->content }}
			</a>
		</li>
		@empty
			<p>No has hecho ningun post</p>
		@endforelse
		<!-- Aqu acaba la interpolacion -->
	</ul>
</div>
@stop
@extends('layout');

@section('content')

<h2>Todos los posts</h2>
<!-- lo que sigue es una interpolacion -->
<ul>
	@forelse ($posts as $post)
	<li>{{ $post->content }}</li>
	@empty
	<p>No has hecho ningun post</p>
	@endforelse
	<!-- Aqu acaba la interpolacion -->
</ul>
@stop
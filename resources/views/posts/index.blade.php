@extends('layouts.app')
@section('content')
<div class="panel-heading">Todos los posts</div>
<div class="panel-body">
	<ul>
		@forelse ($posts as $post)

		<li>
			<!-- Forma Recomendada -->
			<a href="/posts/{{ $post->id }}">
				{{ $post->abstract }}
			</a>
		</li>
		@empty
			<p>No has hecho ningun post</p>
		@endforelse
		<!-- Aqu acaba la interpolacion -->
	</ul>
</div>
@stop
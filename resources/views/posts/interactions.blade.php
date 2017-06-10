@extends('layouts.app')
@section('content')

<!-- Aqui mandamos un mensaje -->
@if (session()->has('message'))

<div class="alert alert-info">
	<strong> {{ session()->get('message') }}</strong>
</div>
@endif
<!-- Aqui mandamos un mensaje -->

<div class="panel-heading">
	Todos mis pinches reacciones	
</div>
<div class="panel-body">
	<ul>
		@forelse ($interactions as $post)

		<li>
			<!-- Forma Recomendada -->
			{{ $post->pivot->reaction }}
			<a href="/posts/{{ $post->id }}">
				{{ $post->abstract }}
			</a>
			<small>Publicado {{ $post->created_at }}</small>
		</li>
		@empty
		<p>No has hecho ninguna puta reaccion</p>
		@endforelse
		<!-- Aqu acaba la interpolacion -->
	</ul>
	<!-- Aregamos paginacion normal -->
	{{ $interactions->links() }}
	
</div>
@stop
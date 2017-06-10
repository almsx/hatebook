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
	Todos los posts mamon
	
	@if (Request::has('search'))
		<strong> que dicen {{ Request::get('search') }}</strong>
	@endif
	
	<br/>
	<a href="/posts/create"><button class="btn btn-primary" type="button">Crear Post</button></a>
	<div class="clearfix"></div>
	
	
	
	
	
</div>
<div class="panel-body">
	<form action="{{ route('posts.index') }}" method="GET" class="form-horizontal" role="form" >
		<div class="input-group">
			<input type="search" name="search" id="search" value="{{ old('search') }}" class="form-control" placeholder="busca entre los posts...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">Buscar!</button>
			</span>
		</div>
	</form>
	<ul>
		@forelse ($posts as $post)

		<li>
			<!-- Forma Recomendada -->
			<a href="/posts/{{ $post->id }}">
				{{ $post->abstract }}
			</a>
			<small>Publicado {{ $post->created_at }}</small>
		</li>
		@empty
		<p>No has hecho ningun post</p>
		@endforelse
		<!-- Aqu acaba la interpolacion -->
	</ul>
	<!-- Aregamos paginacion normal -->
	
	<!-- Agregamos paginacion para el buscador -->
	{{ $posts->appends(['search' => Request::input('search')])->links() }}
	
</div>
@stop
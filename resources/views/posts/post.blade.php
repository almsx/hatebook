@extends('layouts.app')

@section('content')
<div class="panel-heading">Tu pinche post</div>
<div class="panel-body">
	<div class="media">
		<div class="media-left">
			<a href="#">
				<img class="media-object" src="..." alt="...">
			</a>
		</div>
		<div class="media-body">
			{{ $post->content }}
			<div class="media-footer">
				Publicado {{ $post->created_at }} 
				<br/>
				Publicado {{ Carbon\Carbon::now()->diffForHumans($post->created_at) }} 
     

			</div>
		</div>

	</div>
</div>

@stop
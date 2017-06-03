@extends('layout');

@section('content')

<div style="border: 1px solid black">
	{{ $post->content }}
	Creado {{ $post->created_at }}
</div>

@stop
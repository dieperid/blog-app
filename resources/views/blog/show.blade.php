@extends('base')

@section('title', $post->title)

@section('content')
	<article>
		<h2 class="text-3xl">{{ $post->content }}</h2>
		<p class="mb-3">
			{{ $post->content }}
		</p>
	</article>
@endsection

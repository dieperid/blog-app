@extends('base')

@section('title', 'Welcome of the blog')

@section('content')
	<h1 class="text-5xl">My blog</h1>

	@foreach ($posts as $post)
		<article>
			<h2 class="text-3xl">{{ $post->content }}</h2>
			<p class="mb-3">
				{{ $post->content }}
			</p>
			<p>
				<a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}"
					class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Read
					more</a>
			</p>
		</article>
	@endforeach

	{{ $posts->links() }}

@endsection

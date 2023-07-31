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
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Read
                    more</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}

@endsection

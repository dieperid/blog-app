<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(25);

        return view('blog.index');
    }

    public function show(string $slug, string $id): RedirectResponse | Post
    {
        // Find one article and display it
        $post = Post::findOrFail($id);
        // If the slug is false, correct it and display the good route
        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }

        return $post;
    }
}

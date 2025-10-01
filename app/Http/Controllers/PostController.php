<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get(); // eager loading otomatis dari model
        return view('posts', ['title' => 'Blog', 'posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }
}

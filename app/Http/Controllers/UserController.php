<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        $posts = $user->posts()->latest()->get(); // eager loading otomatis dari model Post
        return view('posts', [
            'title' => $posts->count() . ' Articles by ' . $user->name,
            'posts' => $posts
        ]);
    }
}

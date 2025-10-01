<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->posts()->latest()->get(); // eager loading otomatis dari model Post
        return view('posts', [
            'title' => 'Articles in: ' . $category->name,
            'posts' => $posts
        ]);
    }
}

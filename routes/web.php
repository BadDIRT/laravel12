<?php

// use App\Models\Category;
// use App\Models\Post;
// use App\Models\User;
// use Illuminate\Support\Arr;
// use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home',['title' => 'Homepage']);
// });


// Route::get('/posts', function () {
//     // $posts = Post::with(['author','category'])->latest()->get();
//     $posts = Post::latest()->get();
//     return view('posts',['title' => 'Blog'],['posts' => $posts]);
// });


// Route::get('/posts/{post:slug}', function(Post $post) {

//     // $post = Post::find($id);
    
//     return view('post', ['title' => 'single post', 'post' => $post]);

// });


// Route::get('/authors/{user:username}', function(User $user) {
//     // $posts = $user->posts->load(['author','category']);

//     return view('posts', ['title' => count($user->posts) . 'Articles by ' . $user->name, 'posts' => $user->posts]);

// });


// Route::get('/categories/{category:slug}', function(Category $category) {
//     // $posts = $category->posts->load(['author','category']);

//     return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);

// });


// Route::get('/about', function () {
//     return view('about',['title' => 'About']);
// });


// Route::get('/contact', function () {
//     return view('contact',['title' => 'Contact']);
// });


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/authors/{user:username}', [UserController::class, 'show']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);


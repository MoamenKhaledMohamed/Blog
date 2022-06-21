<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', function () {
    return view('posts', ['posts' => Post::with('author', 'category')->paginate(10)]);
});

Route::get('posts/{post}', function (Post $post){  // binding routes
    return view('post', ['post' => $post]);
});

Route::get('categories/{category}', function (Category $category){
    return view('posts', ['posts' => $category->posts->load('category', 'author')]);
});

Route::get('users/{author}', function (User $author){
    return view('posts', ['posts' => $author->posts->load('category', 'author')]);
});

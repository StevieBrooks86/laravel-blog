<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use \App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Illuminate\Support\Facades\DB::listen(function($query) {
        logger($query->sql);
    });
    return view('welcome');
});

Route::get('/posts', function () {

    return view('posts', [
        'posts' => Post::latest()->with('category', 'author')->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
       'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
//dd($category);
    return view('posts', [
       'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
       'posts' => $author->posts
    ]);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Post;
use App\Models\Category;


Route::view('/', 'home',[
    'title'=>'home',
    'active'=>'home',

])->name('home');

Route::get('/about', function () {
    return view('about',
    [
        'name'=>'andry',
        'active'=>'about',
        'title'=>'about',
    ]
);
})->name('about');



Route::get('/posts', [PostController::class, 'index']);

// detail postingan
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('detail_post');
Route::get('/author/{author:username}',[PostController::class, 'author'])->name('author');

// category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('category');
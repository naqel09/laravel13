<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
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

// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');


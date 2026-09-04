<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::view('/', 'home',[
    'title'=>'home'
])->name('home');

Route::get('/about', function () {
    return view('about',
    [
        'name'=>'andry',
        'title'=>'about',
    ]
);
})->name('about');



Route::get('/posts', [PostController::class, 'index']);

// detail postingan
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('detail_post');
<?php

use Illuminate\Support\Facades\Route;
 
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

Route::get('/posts', function () {
    return view('posts',
    [
        'title'=>'posts'
    ]
);
})->name('posts');

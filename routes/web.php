<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/about', function () {
    return view('about',['name'=>'andry']);
})->name('about');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

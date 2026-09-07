<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'all post',
            'active'=>'posts',
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('detail',
        [
            'title'=> 'detail',
            'active'=>'posts',
            'post'=> $post
        ]);
    }

    public function author(User $author)
    {
        return view('posts', [
            'title' => "post by Author: $author->name",
            'posts' => $author->posts->load(['author','category']),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('posts', [
            'title' => 'all post',
            'active'=>'posts',
            'posts' => Post::latest()->filter($request->only(['search', 'category']))->paginate(7)->withQueryString()
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

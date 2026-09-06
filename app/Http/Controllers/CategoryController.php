<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('categories', [
            'title' => 'post categories',
            'categories' => Category::all(),
        ]);
    }
    public function show(Category $category)
    {
        return view('posts', [
            'title' => "post by categories: $category->name",
            'posts' => $category->post->load('author', 'category'),
        ]);
    }
}

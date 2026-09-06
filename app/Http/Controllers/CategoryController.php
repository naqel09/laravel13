<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'title' => 'post by category '.$category->name,
            'posts' => $category->post,
            'category' => $category->name,
        ]);
    }
}
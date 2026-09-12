<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            "posts" => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title'=> 'required|max:255',
                'slug'=> 'required| unique:posts',
                'category_id'=> 'required',
                'excerpt'=> 'required',
                'content'=>'required'
            ]
            );

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->content), 200);

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rule = 
            [
                'title'=> 'required|max:255',
                'category_id'=> 'required',
                'excerpt'=> 'required',
                'content'=>'required'
            ];
        
            if($request->slug != $post->slug){
                $rule['slug'] = 'required| unique:posts';
            }
            $validData = $request->validate($rule);

            $validData['user_id'] = auth()->user()->id;
            $validData['excerpt'] = Str::limit(strip_tags($request->content), 200);

            Post::where('id', $post->id)->update($validData);

            return redirect('/dashboard/posts')->with('success', 'data telah di updated');

            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post berhasil dihapus!');
    }
}

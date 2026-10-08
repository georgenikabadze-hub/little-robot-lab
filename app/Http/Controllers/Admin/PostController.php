<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('admin.posts.index', compact('posts'));
    }
    
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_public' => $request->boolean('is_public'),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.posts.index');
    }

        public function edit(Post $post)
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

        public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_public' => $request->boolean('is_public'),
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
            $post->delete();

            return redirect()->route('admin.posts.index');
    }

}
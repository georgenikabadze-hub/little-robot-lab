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
        $posts = Post::where('user_id', auth()->id())->latest()->get();
        return view('admin.posts.index', compact('posts'));
    }
    
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

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
        abort_unless($post->user_id === auth()->id(), 403);
        
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

        public function update(Request $request, Post $post)
        
    {
        abort_unless($post->user_id === auth()->id(), 403);
        
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        

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
            abort_unless($post->user_id === auth()->id(), 403);

            $post->delete();

            return redirect()->route('admin.posts.index');
    }

}
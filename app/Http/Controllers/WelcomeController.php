<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_public', true)->latest()->take(5)->get();

        return view('welcome', compact('posts'));
    }
}
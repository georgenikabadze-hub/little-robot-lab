<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        $posts = $author->posts()->where('is_public', true)->latest()->get();
        return view('authors.show', compact('author', 'posts'));
    }

    public function index()
    {
        $authors = User::orderBy('name')->get();

        return view('authors.index', compact('authors'));
    }

}

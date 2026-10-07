<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $user)
    {
        $posts = $user->posts()->where('is_public', true)->latest()->get();
        return view('authors.show', compact('user', 'posts'));
    }

    public function index()
    {
        $authors = User::orderBy('name')->get();

        return view('authors.index', compact('authors'));
    }

}

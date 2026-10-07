<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::orderBy('name')->get();

        return view('authors.index', compact('authors'));
    }

}

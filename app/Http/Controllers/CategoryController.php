<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
              
        $categories = Category::orderBy('name')->get();
        return view('categories.index', compact('categories'));

    }   

    public function show(Category $category)
    {

        $posts = $category->posts()->where('is_public', true)->latest()->get();
        return view('categories.show', compact('category', 'posts'));

    }
}

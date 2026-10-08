<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('admin.tags.index', ['tags' => Tag::orderBy('name')->get()]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50', 'unique:tags,name'],
        ]);

        Tag::create($validated);

        return redirect()->route('admin.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index');
    }
}

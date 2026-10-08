<x-site-layout>
<h1 class="text-3xl font-bold mb-2">{{ $category->name }}</h1>
<p class="text-slate-600 mb-6">Robot projects in this category.</p>

<ul>
@forelse($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}"><b>{{ $post->title }}</b></a>
        by {{ $post->author->name }}
    </li>
@empty
    <li>No projects in this category yet.</li>
@endforelse
</ul>

<a href="{{ route('categories.index') }}">Back to all categories</a>
</x-site-layout>
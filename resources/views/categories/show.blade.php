<x-site-layout>
<h1>{{ $category->name }}</h1>
<p>Robot projects in this category.</p>

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
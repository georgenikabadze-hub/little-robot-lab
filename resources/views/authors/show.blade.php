<x-site-layout>
<h1>{{ $author->name }}</h1>
<p>Robot projects shared by this parent.</p>

<ul>
@forelse($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}"><b>{{ $post->title }}</b></a>
        in {{ $post->category->name }}
    </li>
@empty
    <li>No public projects yet.</li>
@endforelse
</ul>

<a href="{{ route('authors.index') }}">Back to all authors</a>
</x-site-layout>
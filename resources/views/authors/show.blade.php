<x-site-layout>
<h1 class="text-3xl font-bold mb-2">{{ $author->name }}</h1>
<p class="text-slate-600 mb-6">Robot projects shared by this parent.</p>
<ul>
@forelse($posts as $post)
    <li>
        <a class="underline hover:text-yellow-500" href="{{ route('posts.show', $post) }}"><b>{{ $post->title }}</b></a>
        in {{ $post->category->name }}
    </li>
@empty
    <li>No public projects yet.</li>
@endforelse
</ul>

<a class="underline hover:text-yellow-500" href="{{ route('authors.index') }}">Back to all authors</a>
</x-site-layout>
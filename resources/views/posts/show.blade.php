<x-site-layout>
<h1>{{ $post->title }}</h1>
<p>by {{ $post->author->name }} in {{ $post->category->name }}</p>

<div>{{ $post->content }}</div>

<a href="{{ route('posts.index') }}">Back to all posts</a>
</x-site-layout>
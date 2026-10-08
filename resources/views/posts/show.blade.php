<x-site-layout>
<h1>{{ $post->title }}</h1>
<p>by {{ $post->author->name }} in {{ $post->category->name }}</p>

<div>{{ $post->content }}</div>

@if($post->tags->isNotEmpty())
    <p>
        Tags:
        @foreach($post->tags as $tag)
            {{ $tag->name }}@if(!$loop->last), @endif
        @endforeach
    </p>
@endif

<a href="{{ route('posts.index') }}">Back to all posts</a>
</x-site-layout>
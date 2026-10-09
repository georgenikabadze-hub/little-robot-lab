<x-site-layout>
<h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
<p class="text-slate-500 mb-6">by {{ $post->author->name }} in {{ $post->category->name }}</p>

<div>{{ $post->content }}</div>

@if($post->tags->isNotEmpty())
    <p>
        Tags:
        @foreach($post->tags as $tag)
            {{ $tag->name }}@if(!$loop->last), @endif
        @endforeach
    </p>
@endif

<a class="underline hover:text-yellow-500" href="{{ route('posts.index') }}">Back to all posts</a>
</x-site-layout>
<x-site-layout>
<h1 class="text-3xl font-bold mb-2">Robot projects</h1>
<p class="text-slate-600 mb-6">All public projects from our parents.</p>

<ul>
@foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}"><b>{{ $post->title }}</b></a>
        by {{ $post->author->name }}
    </li>
@endforeach
</ul>
</x-site-layout>
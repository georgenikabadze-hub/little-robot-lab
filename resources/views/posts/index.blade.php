<x-site-layout>
<h1>Robot projects</h1>
<p>All public projects from our parents.</p>

<ul>
@foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}"><b>{{ $post->title }}</b></a>
        by {{ $post->author->name }}
    </li>
@endforeach
</ul>
</x-site-layout>
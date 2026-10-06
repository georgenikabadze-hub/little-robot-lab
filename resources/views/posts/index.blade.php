<nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('posts.index') }}">Projects</a>
</nav>

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
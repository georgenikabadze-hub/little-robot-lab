
<h1>Robot projects</h1>
<p>All public projects from our parents.</p>

<ul>
@foreach($posts as $post)
    <li><b>{{ $post->title }}</b> by {{ $post->author->name }}</li>
@endforeach
</ul>
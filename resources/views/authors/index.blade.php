<x-site-layout>
<h1>Authors</h1>
<p>The parents who share their robot projects.</p>

<ul>
@foreach($authors as $author)
    <li><a href="{{ route('authors.show', $author) }}">{{ $author->name }}</a></li>
@endforeach
</ul>
</x-site-layout>
<x-site-layout>
<h1>Authors</h1>
<p>The parents who share their robot projects.</p>

<ul>
@foreach($authors as $author)
    <li>{{ $author->name }}</li>
@endforeach
</ul>
</x-site-layout>
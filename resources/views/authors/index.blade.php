<x-site-layout>
<h1 class="text-3xl font-bold mb-2">Authors</h1>
<p class="text-slate-600 mb-6">The parents who share their robot projects.</p>
<ul>
@foreach($authors as $author)
    <li><a class="underline hover:text-yellow-500" href="{{ route('authors.show', $author) }}">{{ $author->name }}</a></li>
@endforeach
</ul>
</x-site-layout>
<x-site-layout>
<h1>Categories</h1>
<p>Browse robot projects by topic.</p>

<ul>
@foreach($categories as $category)
    <li>{{ $category->name }}</li>
@endforeach
</ul>
</x-site-layout>
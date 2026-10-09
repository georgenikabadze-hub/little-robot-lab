<x-site-layout>
<h1 class="text-3xl font-bold mb-2">Categories</h1>
<p class="text-slate-600 mb-6">Browse robot projects by topic.</p>
<ul>
@foreach($categories as $category)
    <li><a class="underline hover:text-amber-700" href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>@endforeach
</ul>
</x-site-layout>
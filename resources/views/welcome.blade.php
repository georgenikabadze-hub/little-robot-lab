<x-site-layout>
<h1 class="text-3xl font-bold mb-2">Little Robot Lab</h1>
<p class="text-slate-600">Small robotics projects for parents and kids.</p>

<h2 class="text-xl font-semibold mt-6 mb-2">Latest projects</h2>
<ul>
@foreach($posts as $post)
    <li>
        <a class="underline hover:text-amber-700" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        by {{ $post->author->name }}
    </li>
@endforeach
</ul>
</x-site-layout>
@props(['post'])

<article {{ $attributes->merge(['class' => 'flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm']) }}>
    <a href="{{ route('categories.show', $post->category) }}" class="self-start rounded-full bg-teal-50 px-3 py-1 text-xs font-semibold text-teal-800 hover:underline">
        {{ $post->category->name }}
    </a>
    <h2 class="text-xl font-bold leading-7 text-slate-900">
        <a href="{{ route('posts.show', $post) }}" class="hover:text-teal-700 hover:underline">{{ $post->title }}</a>
    </h2>
    <p class="line-clamp-3 text-sm leading-6 text-slate-600">{{ $post->content }}</p>
    <div class="mt-auto border-t border-slate-100 pt-4 flex flex-wrap items-center justify-between gap-3 text-sm">
        <p class="text-slate-600">By <a href="{{ route('authors.show', $post->author) }}" class="font-medium text-slate-800 hover:underline">{{ $post->author->name }}</a></p>
        <a href="{{ route('posts.show', $post) }}" class="font-semibold text-teal-700 hover:underline">View project &rarr;</a>
    </div>
</article>

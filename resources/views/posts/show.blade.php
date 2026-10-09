<x-site-layout>
    <div class="max-w-3xl mx-auto">
        <a href="{{ route('posts.index') }}" class="text-sm font-semibold text-teal-700 hover:underline">&larr; Back to all projects</a>
        <article class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 sm:p-10">
            <a href="{{ route('categories.show', $post->category) }}" class="text-sm font-semibold text-teal-700 hover:underline">{{ $post->category->name }}</a>
            <h1 class="mt-3 text-3xl sm:text-4xl font-bold leading-tight text-slate-900">{{ $post->title }}</h1>
            <p class="mt-4 text-sm text-slate-600">By <a href="{{ route('authors.show', $post->author) }}" class="font-medium text-slate-800 hover:underline">{{ $post->author->name }}</a></p>

            <div class="mt-8 whitespace-pre-line leading-8 text-slate-700">{{ $post->content }}</div>

            @if($post->tags->isNotEmpty())
                <div class="mt-8 border-t border-slate-100 pt-6">
                    <h2 class="mb-3 text-sm font-semibold text-slate-900">Tags</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach($post->tags as $tag)
                            <span class="rounded-full bg-teal-50 px-3 py-1 text-xs font-medium text-teal-800">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
        </article>
    </div>
</x-site-layout>

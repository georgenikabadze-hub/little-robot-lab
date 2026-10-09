<x-site-layout>
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-800">Meet the community</p>
        <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-slate-900">Authors</h1>
        <p class="mt-3 text-slate-600">The parents who share their robot projects.</p>
    </div>

    <ul class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse($authors as $author)
            <li class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                <a href="{{ route('authors.show', $author) }}" class="block rounded-2xl p-6 hover:bg-teal-50">
                    <h2 class="text-xl font-bold text-slate-900">{{ $author->name }}</h2>
                    <p class="mt-4 text-sm font-semibold text-teal-700">View projects &rarr;</p>
                </a>
            </li>
        @empty
            <li class="text-slate-600">No authors yet.</li>
        @endforelse
    </ul>
</x-site-layout>

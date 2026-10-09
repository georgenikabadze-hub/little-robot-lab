<x-site-layout>
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-800">Find an idea</p>
        <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-slate-900">Categories</h1>
        <p class="mt-3 text-slate-600">Browse robot projects by topic.</p>
    </div>

    <ul class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse($categories as $category)
            <li class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                <a href="{{ route('categories.show', $category) }}" class="block rounded-2xl p-6 hover:bg-teal-50">
                    <h2 class="text-xl font-bold text-slate-900">{{ $category->name }}</h2>
                    <p class="mt-4 text-sm font-semibold text-teal-700">Explore projects &rarr;</p>
                </a>
            </li>
        @empty
            <li class="text-slate-600">No categories yet.</li>
        @endforelse
    </ul>
</x-site-layout>

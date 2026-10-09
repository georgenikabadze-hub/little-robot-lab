<x-site-layout>
    <a href="{{ route('categories.index') }}" class="text-sm font-semibold text-teal-700 hover:underline">&larr; Back to all categories</a>
    <div class="mt-6 mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-800">Category</p>
        <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-slate-900">{{ $category->name }}</h1>
        <p class="mt-3 text-slate-600">Robot projects in this category.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p class="text-slate-600">No projects in this category yet.</p>
        @endforelse
    </div>
</x-site-layout>

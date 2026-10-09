<x-site-layout>
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-800">Explore the lab</p>
        <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-slate-900">Robot projects</h1>
        <p class="mt-3 text-slate-600">All public projects from our parents.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p class="text-slate-600">No public projects yet.</p>
        @endforelse
    </div>
</x-site-layout>

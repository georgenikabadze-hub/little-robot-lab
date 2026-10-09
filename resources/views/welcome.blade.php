<x-site-layout>
    <section class="rounded-3xl border border-teal-100 bg-teal-50 p-6 sm:p-10">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-800">Build. Learn. Share.</p>
        <h1 class="max-w-2xl mt-4 text-4xl sm:text-5xl font-bold leading-tight text-slate-900">Small builds.<br>Big discoveries.</h1>
        <p class="max-w-xl mt-5 text-lg leading-8 text-slate-600">Small robotics projects for parents and kids. Explore an idea, build together, and share what you learn.</p>
        <div class="mt-7 flex flex-wrap gap-3">
            <a href="{{ route('posts.index') }}" class="rounded-lg bg-teal-700 px-5 py-3 text-sm font-semibold text-white hover:bg-teal-800">Explore projects &rarr;</a>
            <a href="{{ route('categories.index') }}" class="rounded-lg border border-teal-200 bg-white px-5 py-3 text-sm font-semibold text-teal-800 hover:bg-teal-100">Browse categories</a>
        </div>
    </section>

    <section class="mt-10" aria-labelledby="latest-projects">
        <div class="mb-6 flex flex-wrap items-end justify-between gap-3">
            <div>
                <h2 id="latest-projects" class="text-2xl font-bold text-slate-900">Latest projects</h2>
                <p class="mt-2 text-slate-600">Ideas shared by our community.</p>
            </div>
            <a href="{{ route('posts.index') }}" class="text-sm font-semibold text-teal-700 hover:underline">View all projects &rarr;</a>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse($posts as $post)
                <x-post-card :post="$post" />
            @empty
                <p class="text-slate-600">No public projects yet.</p>
            @endforelse
        </div>
    </section>
</x-site-layout>

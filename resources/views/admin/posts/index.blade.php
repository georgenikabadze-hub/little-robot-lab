<x-site-layout>
<h1 class="text-3xl font-bold mb-6">My posts</h1>

<a class="underline hover:text-amber-700" href="{{ route('admin.posts.create') }}">Create new post</a>

@foreach($posts as $post)
    <div>
        {{ $post->title }}
        @if(! $post->is_public) <i>(draft)</i> @endif
        <a class="underline hover:text-amber-700" href="{{ route('admin.posts.edit', $post) }}">edit</a>
        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="underline text-red-700 hover:text-red-900">delete</button>
        </form>
    </div>
@endforeach
</x-site-layout>
<x-site-layout>
<h1>My posts</h1>

<a href="{{ route('admin.posts.create') }}">Create new post</a>

@foreach($posts as $post)
    <div>
        {{ $post->title }}
        @if(! $post->is_public) <i>(draft)</i> @endif
        <a href="{{ route('admin.posts.edit', $post) }}">edit</a>
        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>
@endforeach
</x-site-layout>
<x-site-layout>
<h1>Tags</h1>

<a href="{{ route('admin.tags.create') }}">New tag</a>

<ul>
    @foreach($tags as $tag)
        <li>
            {{ $tag->name }}
            <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" style="display: inline;">
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
</x-site-layout>
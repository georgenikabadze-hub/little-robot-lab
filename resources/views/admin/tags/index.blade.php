<x-site-layout>
<h1>Tags</h1>

<a class="underline hover:text-amber-700" href="{{ route('admin.tags.create') }}">New tag</a>

<ul>
    @foreach($tags as $tag)
        <li>
            {{ $tag->name }}
            <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="underline text-red-700 hover:text-red-900">delete</button>
            </form>
        </li>
    @endforeach
</ul>
</x-site-layout>
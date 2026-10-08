<x-site-layout>
<h1>My posts</h1>

@foreach($posts as $post)
    <div>
        {{ $post->title }}
        @if(! $post->is_public) <i>(draft)</i> @endif
        <a href="">edit</a>
        <a href="">delete</a>
    </div>
@endforeach
</x-site-layout>
<x-site-layout>
<h1>Edit post</h1>

<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        @error('title') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="content">Content</label><br>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        @error('content') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected($category->id === $post->category_id)>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
    <label>Tags</label><br>
    @foreach($tags as $tag)
        <label>
        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" @checked(in_array($tag->id, old('tags', $post->tags->pluck('id')->all())))>
            {{ $tag->name }}
        </label> 
    @endforeach
    @error('tags.*') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label><input type="checkbox" name="is_public" value="1" @checked($post->is_public)> Published</label>
    </div>

    <button type="submit" class="rounded bg-slate-900 px-4 py-2 text-white hover:bg-slate-700">Save changes</button>
</form>
</x-site-layout>
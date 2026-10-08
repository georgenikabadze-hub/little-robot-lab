<x-site-layout>
<h1>Edit post</h1>

<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
    </div>

    <div>
        <label for="content">Content</label><br>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
    </div>

    <div>
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected($category->id === $post->category_id)>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label><input type="checkbox" name="is_public" value="1" @checked($post->is_public)> Published</label>
    </div>

    <button type="submit">Save changes</button>
</form>
</x-site-layout>
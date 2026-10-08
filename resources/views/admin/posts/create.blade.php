<x-site-layout>
<h1>Create new post</h1>

<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="content">Content</label><br>
        <textarea name="content" id="content"></textarea>
    </div>

    <div>
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label><input type="checkbox" name="is_public" value="1"> Publish now</label>
    </div>

    <button type="submit">Create post</button>
</form>
</x-site-layout>
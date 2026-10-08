<x-site-layout>
<h1>Create new post</h1>

<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="content">Content</label><br>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
        @error('content') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="category_id">Category</label><br>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <div>
        <label><input type="checkbox" name="is_public" value="1"> Publish now</label>
    </div>

    <button type="submit">Create post</button>
</form>
</x-site-layout>
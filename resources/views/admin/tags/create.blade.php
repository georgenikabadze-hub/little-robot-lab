<x-site-layout>
<h1>Create new tag</h1>

<form action="{{ route('admin.tags.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit">Create tag</button>
</form>
</x-site-layout>
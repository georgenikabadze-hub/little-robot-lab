<x-site-layout>
<h1>Create new tag</h1>

<form action="{{ route('admin.tags.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') <div style="color: red;">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="rounded bg-slate-900 px-4 py-2 text-white hover:bg-slate-700">Create tag</button>
</form>
</x-site-layout>
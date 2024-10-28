<x-app-layout>

    <h1>Create a new post</h1><br>

    {{ __('Client Closed Request') }}

    @if ($errors->any())

        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-600">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.index') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}"><br><br>
        @error('title')
            <small class="text-red-600">{{ $message }}</small><br>
        @enderror
        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug" value="{{ old('slug') }}"><br><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category') }}"><br><br>
        <label for="content">Content:</label>
        <textarea type="text" id="content" name="content">{{ old('content') }}</textarea><br><br>
        <input type="submit" value="Submit">
    </form>

</x-app-layout>

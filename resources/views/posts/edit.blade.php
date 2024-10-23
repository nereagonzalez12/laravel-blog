<x-app-layout>

    <h1>Update a new post</h1><br>
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
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"><br><br>
        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug" value="{{ old('slug', $post->slug) }}"><br><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category', $post->category) }}"><br><br>
        <label for="content">Content:</label>
        <textarea type="text" id="content" name="content">{{ old('content', $post->content) }}</textarea><br><br>
        <input type="submit" value="Update">
    </form>

</x-app-layout>

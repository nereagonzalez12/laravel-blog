<x-app-layout>

    <h1>Update a new post</h1><br>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br><br>
        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug" value="{{ $post->slug }}"><br><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ $post->category }}"><br><br>
        <label for="content">Content:</label>
        <textarea type="text" id="content" name="content">{{ $post->content }}</textarea><br><br>
        <input type="submit" value="Update">
    </form>

</x-app-layout>

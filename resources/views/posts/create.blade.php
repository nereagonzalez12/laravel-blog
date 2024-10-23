<x-app-layout>

    <h1>Create a new post</h1><br>
    <form action="{{ route('posts.index') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug"><br><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category"><br><br>
        <label for="content">Content:</label>
        <textarea type="text" id="content" name="content"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

</x-app-layout>

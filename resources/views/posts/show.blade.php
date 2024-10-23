<x-app-layout>
    <a href="{{ route('posts.index') }}">Volver </a>
    <hr><br>
    <h1>Detail view of post {{ $post->id }}</h1>
    <br>
    <h1><b>{{ $post->title }}</b></h1>
    <p>{{ $post->category }}</p>
    <p>{{ $post->content }}</p>
    <hr>
    <small>{{ $post->published_at }}</small>

    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
</x-app-layout>

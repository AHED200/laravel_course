<h1>Edit post: {{ $post->title }}</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}">
    <br><br>
    <input type="text" name="body" value="{{ $post->body }}">

    <br><br>
    <button type="submit">Update</button>
</form>

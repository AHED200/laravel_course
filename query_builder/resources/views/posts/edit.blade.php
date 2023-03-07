<h1>Edit post</h1>

<form method="post" action="">
    @csrf
    <input type="text" name="title" value="{{ $post->title }}">
    <br><br>
    <input type="text" name="body" value="{{ $post->body }}">

    <br><br>
    <button type="submit">Update</button>
</form>

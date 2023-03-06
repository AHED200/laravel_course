<h1>Create new post</h1>

<form method="post" action="{{route('post.insert')}}">
    @csrf
    <input type="text" name="title" placeholder="Enter title">
    <br><br>
    <input type="text" name="body" placeholder="Enter body">

    <br><br>
    <button type="submit">Submit</button>
</form>
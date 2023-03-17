<h1>
    Create New Post
</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Enter Title">
    <br><br>
    <input type="text" name="body" placeholder="Enter Body">

    <br><br><br>
    <button type="submit">Submit</button>
</form>

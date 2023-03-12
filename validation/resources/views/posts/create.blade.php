<html>
<title>
    Create Post
</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body>
    <h1>Create new post</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @method('post')
        @csrf
        <input name="title" id="title" type="text" placeholder="Enter title"
            class="@error('title') is-invalid @enderror">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <input name="body" id="body" type="text" placeholder="Enter body"
            class="@error('body') is-invalid @enderror">
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<html>
<title>
    All Posts SoftDeleted
</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Process</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.restore', $post->id) }}"
                            role="button">Restore</a>

                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @method('Delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" action role="button">Delete</a>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{-- <center> <a class="btn btn-danger" href="{{ route('posts.delete.all') }}" role="button">Delete All</a></center>
    <center> <a class="btn btn-danger" href="{{ route('posts.delete.all.truncate') }}" role="button">Delete All
            TrunCate</a>
    </center> --}}

</body>

</html>

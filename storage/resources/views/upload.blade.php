<form action="{{ route('store-image') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="photo">
    <br><br>
    <button type="submit">Submit</button>
</form>

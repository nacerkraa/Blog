<h2>Upload file</h2>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" > <br><br>
    <button type="submit">Upload file</button>
</form>
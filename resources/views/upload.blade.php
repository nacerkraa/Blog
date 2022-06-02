<h2>Upload file</h2>
<div>Hello {{session("user")}}</div>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" ><br><br>
    <button type="submit">Upload file1</button>
</form>

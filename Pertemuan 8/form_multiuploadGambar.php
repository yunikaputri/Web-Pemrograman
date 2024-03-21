<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Gambar</title>
</head>
<body>
    <!-- Form HTML untuk mengunggah beberapa gambar sekaligus -->
    <h2>Unggah Gambar</h2>
    <form action="proses_upload_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imageFiles[]" multiple="multiple" accept="image/jpeg, image/png">
        <input type="submit" value="Unggah Gambar">
    </form>
</body>
</html>
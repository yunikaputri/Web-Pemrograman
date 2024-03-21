<!DOCTYPE html>
<html>
<head>
    <title>Unggah Gambar</title>
</head>
<body>
    <!-- Form HTML untuk mengunggah beberapa gambar sekaligus -->
    <form id="image-upload-form" action="upload_ajaxGambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imageFiles[]" id="imageFiles" multiple accept="image/jpeg, image/png">
        <input type="submit" name="submit" value="Unggah Gambar">
    </form>
    <div id="image-status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="uploadGambar.js"></script>
</body>
</html>
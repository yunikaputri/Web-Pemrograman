<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <!-- Mengunggah file ke server menggunakan metode POST dan enctype multipart/form-data -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
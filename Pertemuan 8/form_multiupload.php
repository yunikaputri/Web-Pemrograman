<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
    <!-- Form HTML untuk mengunggah multiple dokumen dengan batasan tipe file .pdf, .doc, .docx -->
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>
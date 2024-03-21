// Menangani pengiriman formulir secara asinkron melalui AJAX dan menampilkan status hasilnya
$(document).ready(function() {
    $('#image-upload-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajaxGambar.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#image-status').html(response);
            },
            error: function() {
                $('#image-status').html('Terjadi kesalahan saat mengunggah gambar.');
            }
        });
    });
});

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Membuat query untuk membuat tabel 'user'
$query = "INSERT INTO user (id, username, password) VALUES ('1', 'admin', '123')";

// Menjalankan query
$result = mysqli_query($conn, $query);

// Memeriksa apakah pembuatan tabel berhasil
if ($result) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal ditambahkan";
}
?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Membuat query untuk membuat tabel 'user'
$query = "CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)";

// Menjalankan query
$result = mysqli_query($conn, $query);

// Memeriksa apakah pembuatan tabel berhasil
if ($result) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Tabel gagal dibuat: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>

<?php
// Memeriksa apakah request method yang digunakan adalah POST sebelum mengambil nilai dari $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>
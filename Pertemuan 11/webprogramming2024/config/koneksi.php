<?php
// Menetapkan zona waktu dan membuka koneksi ke database MySQL
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if(mysqli_connect_errno()){
    die("koneksi database gagal: " . mysqli_connect_error());
}
?>
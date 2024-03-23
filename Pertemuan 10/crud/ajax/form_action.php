<?php
// Memulai sesi, mengambil data, membersihkan dan menghindari serangan XSS, menutup koneksi database, memberikan respons JSON berhasil
session_start();
include "koneksi.php";
include "csrf.php";

$id = $_POST['id'];
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>
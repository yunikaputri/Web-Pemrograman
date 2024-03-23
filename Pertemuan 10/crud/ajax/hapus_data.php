<?php
// Memulai sesi, mengambil koneksi database, dan memberikan respons JSON setelah data berhasil dihapus
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $POST['id'];
$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>
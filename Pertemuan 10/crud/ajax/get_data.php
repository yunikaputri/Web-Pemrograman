<?php
// Memulai sesi, mengambil koneksi database, dan memberikan respons JSON dengan data anggota berdasarkan ID yang diberikan
session_start();
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM anggota WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param('i', $id);
    $sql->execute();
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Data tidak ditemukan']);
    }
} else {
    echo json_encode(['error' => 'ID tidak ditemukan']);
}

$db1->close();
?>

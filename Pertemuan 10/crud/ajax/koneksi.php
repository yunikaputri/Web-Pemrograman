<?php
// Inisialisasi koneksi database menggunakan objek mysqli dengan parameter 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

// Buat koneksi
$db1 = new mysqli(HOST, USER, PASS, DB1);
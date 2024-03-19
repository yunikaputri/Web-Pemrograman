<?php
// // mengonversi variabel $_SERVER menjadi format JSON dan mencetaknya
// echo json_encode($_SERVER);


/* penggunaan variabel server yang menyediakan berbagai macam informasi 
tentang request yang ditangkap oleh server */
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER']; //Hasil Error dikarenakan datanya kosong/tidak ditemukan
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>
<?php
// Mendefinisikan pola regular expression untuk mencocokkan huruf kecil.
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text. ';
if (preg_match($pattern, $text) ) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

// Mencocokkan satu atau lebih digit dalam teks dan menampilkan hasil cocokan
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches) ) {
    echo "<br/>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
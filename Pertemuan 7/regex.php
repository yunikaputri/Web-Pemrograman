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

// Mengganti setiap kemunculan pola 'apple' dengan kata 'banana' dalam teks.
$pattern = '/apple/';
$replacement = 'banana';
$text = '<br/>I like apple pie. ';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."

// Mencocokkan pola yang memiliki nol atau lebih karakter "o" di antara "g" dan "d" menggunakan "*".
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches) ) {
    echo "<br/>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

// Mencocokkan pola yang memiliki nol atau lebih karakter "o" di antara "g" dan "d" menggunakan "*".
$pattern = '/go?d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches) ) {
    echo "<br/>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

// Mencocokkan pola yang memiliki nol atau lebih karakter "o" di antara "g" dan "d" menggunakan "{n,m}".
$pattern = '/go{n,m}d/'; // Cocokkan "god", "good", "gooood".
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches) ) {
    echo "<br/>Cocokkan: " . $matches[0];
} else {
    echo "<br/>Tidak ada yang cocok!";
}
?>
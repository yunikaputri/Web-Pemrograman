<?php
    // Pemrosesan data setelah pengiriman formulir, menampilkan informasi yang dipilih pengguna.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = htmlspecialchars($_POST['buah']);
        
        if (isset($_POST['warna'])) {
            $selectedWarna = array_map('htmlspecialchars', $_POST['warna']);
        } else {
            $selectedWarna = [];
        }
        
        $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : "Belum dipilih";
        
        echo "Anda memilih buah: " . $selectedBuah . "<br>";
        
        if (!empty($selectedWarna)) {
            echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }
        
        if ($selectedJenisKelamin !== "Belum dipilih") {
            echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
        } else {
            echo "Silakan pilih jenis kelamin Anda.";
        }
    }
    ?>
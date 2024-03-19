<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    // mendefinisikan array $ListDosen yang berisi daftar nama dosen
        // $ListDosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];
        // echo $ListDosen[2] . "<br>";
        // echo $ListDosen[0] . "<br>";
        // echo $ListDosen[1] . "<br>";

        // menampilkann array menggunakan indeks perulangan
        $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
        foreach ($ListDosen as $dosen) {
            echo $dosen . "<br>";
        }
    ?>
</body>
</html>
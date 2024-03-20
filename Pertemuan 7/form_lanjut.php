<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit :</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin :</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>

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
</body>
</html>

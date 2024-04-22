<!DOCTYPE html>
<html>
<head>
    <title>Data Daftar Biaya</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo">
        <h1>SIUNGGUL</h1>
        <div class="dropdown">
            <button class="dropbtn">Pengajuan Beasiswa 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="submenu">
                    <a href="pengajuan_beasiswa.html">Beasiswa Tujuan</a>
                    <a href="pengajuan_beasiswa.php">Data Beasiswa Tujuan</a>
                </div>
                <div class="submenu">
                    <a href="daftar_biaya.html">Daftar Biaya</a>
                    <a href="daftar_biaya.php">Data Daftar Biaya</a>
                </div>
                <div class="submenu">
                    <a href="berkas_persyaratan.html">Berkas Persyaratan</a>
                    <a href="berkas_persyaratan.php">Data Berkas Persyaratan</a>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Biodata 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="submenu">
                    <a href="biodata.html">Form Diri</a>
                    <a href="biodata.php">Data Diri</a>
                </div>
                <div class="submenu">
                    <a href="orang_tua.html">Form Orang Tua</a>
                    <a href="orang_tua.php">Data Orang Tua</a>
                </div>
                <div class="submenu">
                    <a href="organisasi.html">Organisasi</a>
                    <a href="organisasi.php">Data Organisasi</a>
                </div>
                <div class="submenu">
                    <a href="prestasi.html">Prestasi</a>
                    <a href="prestasi.php">Data Prestasi</a>
                </div>
            </div>
        </div>
        <a href="index.html">Beranda</a>
    </div>

    <div class="data-container">
        <h2>DATA DAFTAR BEASISWA</h2>
        <?php
        session_start(); // Mulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $nama_biaya = isset($_SESSION["nama_biaya"]) ? htmlspecialchars($_SESSION["nama_biaya"]) : (isset($_COOKIE["nama_biaya"]) ? htmlspecialchars($_COOKIE["nama_biaya"]) : "");
        $nominal = isset($_SESSION["nominal"]) ? htmlspecialchars($_SESSION["nominal"]) : (isset($_COOKIE["nominal"]) ? htmlspecialchars($_COOKIE["nominal"]) : "");
        $lampiran_biaya = isset($_SESSION["lampiran_biaya"]) ? htmlspecialchars($_SESSION["lampiran_biaya"]) : (isset($_COOKIE["lampiran_biaya"]) ? htmlspecialchars($_COOKIE["lampiran_biaya"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("Jenis Beasiswa", $nama_biaya);
        displayValue("Nominal", $nominal);
        displayValue("Lampiran Biaya", $lampiran_biaya);
        ?>
    </div>
</body>
</html>

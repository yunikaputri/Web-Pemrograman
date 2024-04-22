<!DOCTYPE html>
<html>
<head>
    <title>Data Organisasi</title>
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
        <h2>DATA PRESTASI</h2>
        <?php
        session_start(); // Mulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $nama_prestasi = isset($_SESSION["nama_prestasi"]) ? htmlspecialchars($_SESSION["nama_prestasi"]) : (isset($_COOKIE["nama_prestasi"]) ? htmlspecialchars($_COOKIE["nama_prestasi"]) : "");
        $bidang_prestasi = isset($_SESSION["bidang_prestasi"]) ? htmlspecialchars($_SESSION["bidang_prestasi"]) : (isset($_COOKIE["bidang_prestasi"]) ? htmlspecialchars($_COOKIE["bidang_prestasi"]) : "");
        $peringkat = isset($_SESSION["peringkat"]) ? htmlspecialchars($_SESSION["peringkat"]) : (isset($_COOKIE["peringkat"]) ? htmlspecialchars($_COOKIE["peringkat"]) : "");
        $tingkat = isset($_SESSION["tingkat"]) ? htmlspecialchars($_SESSION["tingkat"]) : (isset($_COOKIE["tingkat"]) ? htmlspecialchars($_COOKIE["tingkat"]) : "");
        $penyelenggara = isset($_SESSION["penyelenggara"]) ? htmlspecialchars($_SESSION["penyelenggara"]) : (isset($_COOKIE["penyelenggara"]) ? htmlspecialchars($_COOKIE["penyelenggara"]) : "");
        $tahun_mendapatkan = isset($_SESSION["tahun_mendapatkan"]) ? htmlspecialchars($_SESSION["tahun_mendapatkan"]) : (isset($_COOKIE["tahun_mendapatkan"]) ? htmlspecialchars($_COOKIE["tahun_mendapatkan"]) : "");
        $sertifikat = isset($_SESSION["sertifikat"]) ? htmlspecialchars($_SESSION["sertifikat"]) : (isset($_COOKIE["sertifikat"]) ? htmlspecialchars($_COOKIE["sertifikat"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("Nama Prestasi", $nama_prestasi);
        displayValue("Bidang Prestasi", $bidang_prestasi);
        displayValue("Peringkat", $peringkat);
        displayValue("Tingkat", $tingkat);
        displayValue("Penyelenggara", $penyelenggara);
        displayValue("Tahun Mendapatkan", $tahun_mendapatkan);
        displayValue("Sertifikat", $sertifikat);
        ?>
    </div>
</body>
</html>

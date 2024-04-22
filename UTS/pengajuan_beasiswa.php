<!DOCTYPE html>
<html>
<head>
    <title>Data Pengajuan Beasiswa</title>
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
        <h2>DATA PENGAJUAN BEASISWA</h2>
        <?php
        session_start(); // Mulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $jenis_beasiswa = isset($_SESSION["jenis_beasiswa"]) ? htmlspecialchars($_SESSION["jenis_beasiswa"]) : (isset($_COOKIE["jenis_beasiswa"]) ? htmlspecialchars($_COOKIE["jenis_beasiswa"]) : "");
        $jenjang = isset($_SESSION["jenjang"]) ? htmlspecialchars($_SESSION["jenjang"]) : (isset($_COOKIE["jenjang"]) ? htmlspecialchars($_COOKIE["jenjang"]) : "");
        $perguruan_tinggi = isset($_SESSION["perguruan_tinggi"]) ? htmlspecialchars($_SESSION["perguruan_tinggi"]) : (isset($_COOKIE["perguruan_tinggi"]) ? htmlspecialchars($_COOKIE["perguruan_tinggi"]) : "");
        $program_studi = isset($_SESSION["program_studi"]) ? htmlspecialchars($_SESSION["program_studi"]) : (isset($_COOKIE["program_studi"]) ? htmlspecialchars($_COOKIE["program_studi"]) : "");
        $ipk = isset($_SESSION["ipk"]) ? htmlspecialchars($_SESSION["ipk"]) : (isset($_COOKIE["ipk"]) ? htmlspecialchars($_COOKIE["ipk"]) : "");
        $loa = isset($_SESSION["loa"]) ? htmlspecialchars($_SESSION["loa"]) : (isset($_COOKIE["loa"]) ? htmlspecialchars($_COOKIE["loa"]) : "");
        $surat_keterangan_aktif = isset($_SESSION["surat_keterangan_aktif"]) ? htmlspecialchars($_SESSION["surat_keterangan_aktif"]) : (isset($_COOKIE["surat_keterangan_aktif"]) ? htmlspecialchars($_COOKIE["surat_keterangan_aktif"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("Jenis Beasiswa", $jenis_beasiswa);
        displayValue("Jenjang", $jenjang);
        displayValue("Perguruan Tinggi", $perguruan_tinggi);
        displayValue("Program Studi", $program_studi);
        displayValue("IPK", $ipk);
        displayValue("LoA", $loa);
        displayValue("Surat Keterangan Aktif", $surat_keterangan_aktif);
        ?>
    </div>
</body>
</html>

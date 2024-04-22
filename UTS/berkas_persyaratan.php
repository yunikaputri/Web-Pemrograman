<!DOCTYPE html>
<html>
<head>
    <title>Data Berkas Persyaratan</title>
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
        <h2>DATA BERKAS PERSYARATAN</h2>
        <?php
        session_start(); // Memulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $essai = isset($_SESSION["essai"]) ? htmlspecialchars($_SESSION["essai"]) : (isset($_COOKIE["essai"]) ? htmlspecialchars($_COOKIE["essai"]) : "");
        $surat_rekomendasi = isset($_SESSION["surat_rekomendasi"]) ? htmlspecialchars($_SESSION["surat_rekomendasi"]) : (isset($_COOKIE["surat_rekomendasi"]) ? htmlspecialchars($_COOKIE["surat_rekomendasi"]) : "");
        $surat_sptmbl = isset($_SESSION["surat_sptmbl"]) ? htmlspecialchars($_SESSION["surat_sptmbl"]) : (isset($_COOKIE["surat_sptmbl"]) ? htmlspecialchars($_COOKIE["surat_sptmbl"]) : "");
        $sertifikat_kemampuan_bindo = isset($_SESSION["sertifikat_kemampuan_bindo"]) ? htmlspecialchars($_SESSION["sertifikat_kemampuan_bindo"]) : (isset($_COOKIE["sertifikat_kemampuan_bindo"]) ? htmlspecialchars($_COOKIE["sertifikat_kemampuan_bindo"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("Essai", $essai);
        displayValue("Surat Rekomendasi", $surat_rekomendasi);
        displayValue("Surat SPTMBL", $surat_sptmbl);
        displayValue("Sertifikat Kemampuan Bahasa Indonesia", $sertifikat_kemampuan_bindo);
        ?>
    </div>
</body>
</html>

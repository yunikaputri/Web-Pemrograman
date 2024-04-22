<!DOCTYPE html>
<html>
<head>
    <title>Data Orang Tua</title>
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
        <h2>DATA ORANG TUA</h2>
        <?php
        session_start(); // Mulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $nama_lengkap_ayah = isset($_SESSION["nama_lengkap_ayah"]) ? htmlspecialchars($_SESSION["nama_lengkap_ayah"]) : (isset($_COOKIE["nama_lengkap_ayah"]) ? htmlspecialchars($_COOKIE["nama_lengkap_ayah"]) : "");
        $nomor_hp_ayah = isset($_SESSION["nomor_hp_ayah"]) ? htmlspecialchars($_SESSION["nomor_hp_ayah"]) : (isset($_COOKIE["nomor_hp_ayah"]) ? htmlspecialchars($_COOKIE["nomor_hp_ayah"]) : "");
        $pekerjaan_ayah = isset($_SESSION["pekerjaan_ayah"]) ? htmlspecialchars($_SESSION["pekerjaan_ayah"]) : (isset($_COOKIE["pekerjaan_ayah"]) ? htmlspecialchars($_COOKIE["pekerjaan_ayah"]) : "");
        $nama_lengkap_ibu = isset($_SESSION["nama_lengkap_ibu"]) ? htmlspecialchars($_SESSION["nama_lengkap_ibu"]) : (isset($_COOKIE["nama_lengkap_ibu"]) ? htmlspecialchars($_COOKIE["nama_lengkap_ibu"]) : "");
        $nomor_hp_ibu = isset($_SESSION["nomor_hp_ibu"]) ? htmlspecialchars($_SESSION["nomor_hp_ibu"]) : (isset($_COOKIE["nomor_hp_ibu"]) ? htmlspecialchars($_COOKIE["nomor_hp_ibu"]) : "");
        $pekerjaan_ibu = isset($_SESSION["pekerjaan_ibu"]) ? htmlspecialchars($_SESSION["pekerjaan_ibu"]) : (isset($_COOKIE["pekerjaan_ibu"]) ? htmlspecialchars($_COOKIE["pekerjaan_ibu"]) : "");
        $nama_lengkap_wali = isset($_SESSION["nama_lengkap_wali"]) ? htmlspecialchars($_SESSION["nama_lengkap_wali"]) : (isset($_COOKIE["nama_lengkap_wali"]) ? htmlspecialchars($_COOKIE["nama_lengkap_wali"]) : "");
        $nomor_hp_wali = isset($_SESSION["nomor_hp_wali"]) ? htmlspecialchars($_SESSION["nomor_hp_wali"]) : (isset($_COOKIE["nomor_hp_wali"]) ? htmlspecialchars($_COOKIE["nomor_hp_wali"]) : "");
        $pekerjaan_wali = isset($_SESSION["pekerjaan_wali"]) ? htmlspecialchars($_SESSION["pekerjaan_wali"]) : (isset($_COOKIE["pekerjaan_wali"]) ? htmlspecialchars($_COOKIE["pekerjaan_wali"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("Nama Lengkap Ayah", $nama_lengkap_ayah);
        displayValue("Nomor HP Ayah", $nomor_hp_ayah);
        displayValue("Pekerjaan Ayah", $pekerjaan_ayah);
        displayValue("Nama Lengkap Ibu", $nama_lengkap_ibu);
        displayValue("Nomor HP Ibu", $nomor_hp_ibu);
        displayValue("Pekerjaan Ibu", $pekerjaan_ibu);
        displayValue("Nama Lengkap Wali", $nama_lengkap_wali);
        displayValue("Nomor HP Wali", $nomor_hp_wali);
        displayValue("Pekerjaan Wali", $pekerjaan_wali);
        ?>
    </div>
</body>
</html>

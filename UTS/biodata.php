<!DOCTYPE html>
<html>
<head>
    <title>Beasiswa Unggulan</title>
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
        <h2>DATA BIODATA DIRI</h2>
        <?php
        session_start(); // Mulai session

        function displayValue($label, $value) {
            echo "<p><span class='data-label'>$label</span> <span class='data-value'>: $value</span></p>";
        }

        // Mengambil nilai dari session atau cookies (jika session tidak ada)
        $nik = isset($_SESSION["nik"]) ? htmlspecialchars($_SESSION["nik"]) : (isset($_COOKIE["nik"]) ? htmlspecialchars($_COOKIE["nik"]) : "");
        $nama_lengkap = isset($_SESSION["nama_lengkap"]) ? htmlspecialchars($_SESSION["nama_lengkap"]) : (isset($_COOKIE["nama_lengkap"]) ? htmlspecialchars($_COOKIE["nama_lengkap"]) : "");
        $foto_diri = isset($_SESSION["foto_diri"]) ? htmlspecialchars($_SESSION["foto_diri"]) : (isset($_COOKIE["foto_diri"]) ? htmlspecialchars($_COOKIE["foto_diri"]) : "");
        $identitas_diri = isset($_SESSION["identitas_diri"]) ? htmlspecialchars($_SESSION["identitas_diri"]) : (isset($_COOKIE["identitas_diri"]) ? htmlspecialchars($_COOKIE["identitas_diri"]) : "");
        $tempat_lahir = isset($_SESSION["tempat_lahir"]) ? htmlspecialchars($_SESSION["tempat_lahir"]) : (isset($_COOKIE["tempat_lahir"]) ? htmlspecialchars($_COOKIE["tempat_lahir"]) : "");
        $jenis_kelamin = isset($_SESSION["jenis_kelamin"]) ? htmlspecialchars($_SESSION["jenis_kelamin"]) : (isset($_COOKIE["jenis_kelamin"]) ? htmlspecialchars($_COOKIE["jenis_kelamin"]) : "");
        $agama = isset($_SESSION["agama"]) ? htmlspecialchars($_SESSION["agama"]) : (isset($_COOKIE["agama"]) ? htmlspecialchars($_COOKIE["agama"]) : "");
        $status_pernikahan = isset($_SESSION["status_pernikahan"]) ? htmlspecialchars($_SESSION["status_pernikahan"]) : (isset($_COOKIE["status_pernikahan"]) ? htmlspecialchars($_COOKIE["status_pernikahan"]) : "");
        $nomor_hp = isset($_SESSION["nomor_hp"]) ? htmlspecialchars($_SESSION["nomor_hp"]) : (isset($_COOKIE["nomor_hp"]) ? htmlspecialchars($_COOKIE["nomor_hp"]) : "");
        $alamat_domisili = isset($_SESSION["alamat_domisili"]) ? htmlspecialchars($_SESSION["alamat_domisili"]) : (isset($_COOKIE["alamat_domisili"]) ? htmlspecialchars($_COOKIE["alamat_domisili"]) : "");
        $kartu_keluarga = isset($_SESSION["kartu_keluarga"]) ? htmlspecialchars($_SESSION["kartu_keluarga"]) : (isset($_COOKIE["kartu_keluarga"]) ? htmlspecialchars($_COOKIE["kartu_keluarga"]) : "");
        $kategori_rumah = isset($_SESSION["kategori_rumah"]) ? htmlspecialchars($_SESSION["kategori_rumah"]) : (isset($_COOKIE["kategori_rumah"]) ? htmlspecialchars($_COOKIE["kategori_rumah"]) : "");
        $luas_rumah = isset($_SESSION["luas_rumah"]) ? htmlspecialchars($_SESSION["luas_rumah"]) : (isset($_COOKIE["luas_rumah"]) ? htmlspecialchars($_COOKIE["luas_rumah"]) : "");
        $tagihan_listrik = isset($_SESSION["tagihan_listrik"]) ? htmlspecialchars($_SESSION["tagihan_listrik"]) : (isset($_COOKIE["tagihan_listrik"]) ? htmlspecialchars($_COOKIE["tagihan_listrik"]) : "");
        $golongan_listrik = isset($_SESSION["golongan_listrik"]) ? htmlspecialchars($_SESSION["golongan_listrik"]) : (isset($_COOKIE["golongan_listrik"]) ? htmlspecialchars($_COOKIE["golongan_listrik"]) : "");

        // Menampilkan nilai-nilai dari session atau cookies
        displayValue("NIK", $nik);
        displayValue("Nama Lengkap", $nama_lengkap);
        displayValue("Foto Diri", $foto_diri);
        displayValue("Identitas Diri", $identitas_diri);
        displayValue("Tempat Lahir", $tempat_lahir);
        displayValue("Jenis Kelamin", $jenis_kelamin);
        displayValue("Agama", $agama);
        displayValue("Status Pernikahan", $status_pernikahan);
        displayValue("Nomor HP", $nomor_hp);
        displayValue("Alamat Domisili", $alamat_domisili);
        displayValue("Kartu Keluarga", $kartu_keluarga);
        displayValue("Kategori Rumah", $kategori_rumah);
        displayValue("Luas Rumah", $luas_rumah);
        displayValue("Tagihan Listrik", $tagihan_listrik);
        displayValue("Golongan Listrik", $golongan_listrik);
        ?>
    </div>
</body>
</html>

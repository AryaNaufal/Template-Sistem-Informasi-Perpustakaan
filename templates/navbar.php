<?php
// Menu aktif ditentukan dari nama folder halaman (dashboard.php = beranda)
$aktif = basename(dirname($_SERVER['SCRIPT_NAME']));
if (basename($_SERVER['SCRIPT_NAME']) == "dashboard.php") {
    $aktif = "dashboard";
} elseif (basename($_SERVER['SCRIPT_NAME']) == "katalog.php") {
    $aktif = "katalog";
}
$master = ["buku", "kategori", "anggota", "denda"];
?>
<nav class="navbar navbar-expand-lg site-nav">
    <div class="container">
        <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuUtama">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?= $aktif == "dashboard" ? "active" : "" ?>" href="<?= $base ?>dashboard.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link <?= $aktif == "katalog" ? "active" : "" ?>" href="<?= $base ?>peminjaman/katalog.php">Katalog Buku</a></li>
                <li class="nav-item"><a class="nav-link <?= $aktif == "peminjaman" ? "active" : "" ?>" href="<?= $base ?>peminjaman/index.php">Peminjaman</a></li>
                <li class="nav-item"><a class="nav-link <?= $aktif == "riwayat" ? "active" : "" ?>" href="<?= $base ?>riwayat/index.php">Riwayat</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($aktif, $master) ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown">Data Master</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= $aktif == "buku" ? "active" : "" ?>" href="<?= $base ?>buku/index.php">Buku</a></li>
                        <li><a class="dropdown-item <?= $aktif == "kategori" ? "active" : "" ?>" href="<?= $base ?>kategori/index.php">Kategori</a></li>
                        <li><a class="dropdown-item <?= $aktif == "anggota" ? "active" : "" ?>" href="<?= $base ?>anggota/index.php">Anggota</a></li>
                        <li><a class="dropdown-item <?= $aktif == "denda" ? "active" : "" ?>" href="<?= $base ?>denda/index.php">Denda</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?= $aktif == "laporan" ? "active" : "" ?>" href="<?= $base ?>laporan/index.php">Laporan</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="container py-4">
    <h1 class="judul-halaman"><?= $judul ?></h1>

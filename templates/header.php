<?php /* Butuh: $judul dan $base ("" untuk halaman utama, "../" untuk subfolder) */ ?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?> - Perpustakaan Aksara</title>
    <link href="<?= $base ?>assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $base ?>assets/css/app.css?v=<?= filemtime(__DIR__ . '/../assets/css/app.css') ?>" rel="stylesheet">
</head>
<body>
<div class="utility">
    <div class="container d-flex flex-wrap justify-content-between gap-2 py-1">
        <span>Layanan: Senin-Jumat 08.00-16.00 WIB, Sabtu 08.00-12.00 WIB</span>
        <span>
            Budi Santoso (Petugas)
            &nbsp;|&nbsp; <a href="<?= $base ?>login.php">Keluar</a>
        </span>
    </div>
</div>

<header class="masthead">
    <div class="container py-3">
        <a href="<?= $base ?>dashboard.php" class="text-decoration-none">
            <div class="judul-situs">Perpustakaan Aksara</div>
            <small>Sistem Informasi Peminjaman Buku</small>
        </a>
    </div>
</header>

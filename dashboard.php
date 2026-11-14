<?php
$judul = "Beranda";
$base  = "";
include "templates/header.php";
include "templates/navbar.php";
?>
<p>Selamat datang, <b>Budi Santoso</b>.</p>

<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3"><div class="panel panel-body">Judul buku<h2>12</h2></div></div>
    <div class="col-6 col-lg-3"><div class="panel panel-body">Anggota aktif<h2>3</h2></div></div>
    <div class="col-6 col-lg-3"><div class="panel panel-body">Sedang dipinjam<h2>4</h2></div></div>
    <div class="col-6 col-lg-3"><div class="panel panel-body">Terlambat<h2 class="text-danger">1</h2></div></div>
</div>

<p>Denda belum lunas seluruh anggota: <b>Rp 3.000</b></p>

<div class="panel">
    <div class="panel-head">Jatuh tempo terdekat</div>
    <div class="table-responsive">
        <table class="table table-catalog table-hover mb-0">
            <thead><tr><th>Anggota</th><th>Buku</th><th>Jatuh tempo</th></tr></thead>
            <tbody>
                <tr><td>Siti Aisyah</td><td>Laskar Pelangi</td><td>2026-11-10</td></tr>
                <tr><td>Rudi Hartono</td><td>Atomic Habit</td><td>2026-11-16</td></tr>
                <tr><td>Dewi Lestari</td><td>Bumi Manusia</td><td>2026-11-18</td></tr>
            </tbody>
        </table>
    </div>
</div>
<?php include "templates/footer.php"; ?>

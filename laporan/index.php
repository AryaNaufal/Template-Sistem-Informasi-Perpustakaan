<?php
$judul = "Laporan Peminjaman";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<form class="d-flex gap-2 mb-3 no-print" style="max-width:420px">
    <input class="form-control" type="month" value="2026-11">
    <button class="btn btn-outline-primary" type="submit">Tampilkan</button>
    <button class="btn btn-primary" type="button" onclick="window.print()">Cetak</button>
</form>

<p>Periode: <b>2026-11</b></p>

<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="panel panel-body">Total peminjaman
            <h2>3</h2>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="panel panel-body">Sudah kembali
            <h2>0</h2>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="panel panel-body">Masih dipinjam
            <h2>3</h2>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="panel panel-body">Total denda
            <h2>Rp 3.000</h2><small>Terbayar Rp 0</small>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tgl Kembali</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Siti Aisyah</td>
                <td>Laskar Pelangi</td>
                <td>2026-11-03</td>
                <td>2026-11-10</td>
                <td>-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rudi Hartono</td>
                <td>Atomic Habit</td>
                <td>2026-11-09</td>
                <td>2026-11-16</td>
                <td>-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dewi Lestari</td>
                <td>Bumi Manusia</td>
                <td>2026-11-11</td>
                <td>2026-11-18</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
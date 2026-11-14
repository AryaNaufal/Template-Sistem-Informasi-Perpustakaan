<?php
$judul = "Riwayat Peminjaman dan Pengembalian";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
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
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rudi Hartono</td>
                <td>Atomic Habit</td>
                <td>2026-11-09</td>
                <td>2026-11-16</td>
                <td>-</td>
                <td><span class="badge text-bg-secondary">Dipinjam</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Siti Aisyah</td>
                <td>Laskar Pelangi</td>
                <td>2026-11-03</td>
                <td>2026-11-10</td>
                <td>-</td>
                <td><span class="badge text-bg-danger">Terlambat</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dewi Lestari</td>
                <td>Sapiens</td>
                <td>2026-10-20</td>
                <td>2026-10-27</td>
                <td>2026-10-30</td>
                <td><span class="badge text-bg-warning">Selesai, terlambat</span></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Rudi Hartono</td>
                <td>Bumi Manusia</td>
                <td>2026-10-10</td>
                <td>2026-10-17</td>
                <td>2026-10-15</td>
                <td><span class="badge text-bg-success">Dikembalikan</span></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
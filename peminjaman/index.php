<?php
$judul = "Peminjaman Aktif";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<a class="btn btn-primary mb-3" href="tambah.php">Catat Peminjaman</a>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Siti Aisyah</td>
                <td>Laskar Pelangi</td>
                <td>2026-11-03</td>
                <td>2026-11-10</td>
                <td>
                    <span class="badge text-bg-danger">Terlambat</span>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="#" onclick="return confirm('Tandai buku sudah dikembalikan?')">Kembalikan</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rudi Hartono</td>
                <td>Atomic Habit</td>
                <td>2026-11-09</td>
                <td>2026-11-16</td>
                <td>
                    <span class="badge text-bg-secondary">Dipinjam</span>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="#" onclick="return confirm('Tandai buku sudah dikembalikan?')">Kembalikan</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dewi Lestari</td>
                <td>Bumi Manusia</td>
                <td>2026-11-11</td>
                <td>2026-11-18</td>
                <td>
                    <span class="badge text-bg-secondary">Dipinjam</span>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="#" onclick="return confirm('Tandai buku sudah dikembalikan?')">Kembalikan</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
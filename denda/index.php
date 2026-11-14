<?php
$judul = "Data Denda";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <a class="btn btn-primary" href="tambah.php">Tambah Denda</a>
    <span class="small text-secondary">Denda keterlambatan otomatis Rp 1.000 per hari</span>
</div>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Siti Aisyah</td>
                <td>Terlambat 3 hari</td>
                <td>2026-11-10</td>
                <td>Rp 3.000</td>
                <td>
                    <span class="badge text-bg-danger">Belum lunas</span>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-success" href="#" onclick="return confirm('Tandai denda ini lunas?')">Lunas</a>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rudi Hartono</td>
                <td>Buku rusak</td>
                <td>2026-10-28</td>
                <td>Rp 15.000</td>
                <td>
                    <span class="badge text-bg-success">Lunas</span>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
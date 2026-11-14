<?php
$judul = "Data Anggota";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<a class="btn btn-primary mb-3" href="tambah.php">Tambah Anggota</a>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>A-0001</td>
                <td>Siti Aisyah</td>
                <td>siti@mail.com</td>
                <td>081234567890</td>
                <td>aktif</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>A-0002</td>
                <td>Rudi Hartono</td>
                <td>rudi@mail.com</td>
                <td>081298765432</td>
                <td>aktif</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>A-0003</td>
                <td>Dewi Lestari</td>
                <td>dewi@mail.com</td>
                <td>081311122233</td>
                <td>aktif</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
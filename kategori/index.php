<?php
$judul = "Data Kategori";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<a class="btn btn-primary mb-3" href="tambah.php">Tambah Kategori</a>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fiksi</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pengembangan Diri</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sains</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
<?php
$judul = "Data Buku";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<div class="d-flex flex-wrap justify-content-between gap-2 mb-3">
    <form class="d-flex gap-2">
        <input class="form-control" type="text" placeholder="Judul atau penulis">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
    </form>
    <a class="btn btn-primary" href="tambah.php">Tambah Buku</a>
</div>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Atomic Habit</td>
                <td>James Clear</td>
                <td>Pengembangan Diri</td>
                <td>2018</td>
                <td>3</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bumi Manusia</td>
                <td>Pramoedya Ananta Toer</td>
                <td>Fiksi</td>
                <td>1980</td>
                <td>2</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Laskar Pelangi</td>
                <td>Andrea Hirata</td>
                <td>Fiksi</td>
                <td>2005</td>
                <td>4</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sapiens</td>
                <td>Yuval Noah Harari</td>
                <td>Sains</td>
                <td>2011</td>
                <td>2</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="edit.php">Edit</a> 
                    <a class="btn btn-sm btn-outline-danger" href="#" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
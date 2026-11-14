<?php
$judul = "Katalog Buku";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<form class="d-flex gap-2 mb-3" style="max-width:420px">
    <input class="form-control" type="text" placeholder="Judul atau penulis">
    <button class="btn btn-outline-primary" type="submit">Cari</button>
</form>

<div class="table-responsive">
    <table class="table table-catalog table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Tersedia</th>
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
                <td>2 / 3</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#" onclick="return confirm('Pinjam buku ini selama 7 hari?')">Pinjam</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bumi Manusia</td>
                <td>Pramoedya Ananta Toer</td>
                <td>Fiksi</td>
                <td>1980</td>
                <td>1 / 2</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="#" onclick="return confirm('Pinjam buku ini selama 7 hari?')">Pinjam</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Laskar Pelangi</td>
                <td>Andrea Hirata</td>
                <td>Fiksi</td>
                <td>2005</td>
                <td>0 / 4</td>
                <td><span class="text-secondary">Habis</span></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include "../templates/footer.php"; ?>
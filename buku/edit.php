<?php
$judul = "Edit Buku";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<form action="index.php" class="panel" style="max-width:640px">
    <div class="panel-body row g-3">
        <div class="col-12"><label class="form-label">Judul</label><input class="form-control" type="text"
                value="Atomic Habit"></div>
        <div class="col-12"><label class="form-label">Penulis</label><input class="form-control" type="text"
                value="James Clear"></div>
        <div class="col-md-6"><label class="form-label">Kategori</label><select class="form-select">
                <option>Pilih kategori</option>
                <option>Fiksi</option>
                <option>Sains</option>
                <option>Pengembangan Diri</option>
            </select></div>
        <div class="col-md-3"><label class="form-label">Tahun</label><input class="form-control" type="number"
                value="2018"></div>
        <div class="col-md-3"><label class="form-label">Stok</label><input class="form-control" type="number" value="3">
        </div>
        <div class="col-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
            <a class="btn btn-outline-secondary" href="index.php">Batal</a>
        </div>
    </div>
</form>
<?php include "../templates/footer.php"; ?>
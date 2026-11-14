<?php
$judul = "Edit Denda";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<form action="index.php" class="panel" style="max-width:560px">
    <div class="panel-body">
        <div class="mb-3">
            <label class="form-label">Anggota</label>
            <select class="form-select">
                <option>Pilih anggota</option>
                <option>Siti Aisyah</option>
                <option>Rudi Hartono</option>
                <option>Dewi Lestari</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input class="form-control" type="text" placeholder="Contoh: Buku rusak" value="Terlambat 3 hari">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah (Rp)</label>
            <input class="form-control" type="number" value="3000">
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
                <option>Belum lunas</option>
                <option>Lunas</option>
            </select>
        </div>
        
        <input class="btn btn-primary" type="submit" value="Simpan">
        <a class="btn btn-outline-secondary" href="index.php">Batal</a>
    </div>
</form>
<?php include "../templates/footer.php"; ?>
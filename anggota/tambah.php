<?php
$judul = "Tambah Anggota";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<div class="d-flex justify-content-center">
    <form action="index.php" class="panel" style="width:560px">
        <div class="panel-body">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input class="form-control" type="text" value="">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" type="text" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Telepon</label>
                <input class="form-control" type="text" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label><select class="form-select">
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Password login anggota</label>
                <input class="form-control" type="password">
                <div class="form-text">Minimal 6 karakter. Username dibuat otomatis (contoh: A-0004).</div>
            </div>

            <input class="btn btn-primary" type="submit" value="Simpan">
            <a class="btn btn-outline-secondary" href="index.php">Batal</a>
        </div>
    </form>
</div>
<?php include "../templates/footer.php"; ?>
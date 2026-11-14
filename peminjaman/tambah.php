<?php
$judul = "Catat Peminjaman";
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
            <label class="form-label">Buku</label>
            <select class="form-select">
                <option>Pilih buku</option>
                <option>Atomic Habit (tersedia 2)</option>
                <option>Bumi Manusia (tersedia 1)</option>
                <option>Sapiens (tersedia 2)</option>
            </select>
        </div>
        <p class="small text-secondary">Lama pinjam 7 hari, maksimal 3 buku per anggota.</p>
        <input class="btn btn-primary" type="submit" value="Simpan">
        <a class="btn btn-outline-secondary" href="index.php">Batal</a>
    </div>
</form>
<?php include "../templates/footer.php"; ?>
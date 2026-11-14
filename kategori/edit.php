<?php
$judul = "Edit Kategori";
$base = "../";
include "../templates/header.php";
include "../templates/navbar.php";
?>
<form action="index.php" class="panel" style="max-width:480px">
    <div class="panel-body">
        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input class="form-control" type="text" value="Fiksi">
        </div>
        
        <input class="btn btn-primary" type="submit" value="Simpan">
        <a class="btn btn-outline-secondary" href="index.php">Batal</a>
    </div>
</form>
<?php include "../templates/footer.php"; ?>
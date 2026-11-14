# Perpustakaan Aksara (tampilan saja)

Versi ini hanya berisi tampilan (frontend). Semua kode backend sudah dihapus: tidak ada koneksi database, session/login, query, validasi, maupun proses simpan/edit/hapus. Data yang tampil adalah contoh statis.

## Menjalankan
1. Start Apache di XAMPP (MySQL tidak diperlukan).
2. Buka `http://localhost/perpustakaan-php/`

## Struktur
```
perpustakaan-php/
├── index.php, login.php, dashboard.php
├── templates/        header.php, navbar.php, footer.php (di-include tiap halaman)
├── buku/ kategori/ anggota/ denda/   index, tambah, edit
├── peminjaman/       index, tambah, katalog
├── riwayat/          index.php
├── laporan/          index.php
└── assets/           css + bootstrap (lokal)
```

Tombol Simpan dan Batal hanya berpindah halaman, tombol Hapus/Lunas/Kembalikan/Pinjam hanya menampilkan konfirmasi.

Salinan versi lengkap dengan backend ada di `C:\xampp\perpustakaan-php_backup_dengan_backend`.

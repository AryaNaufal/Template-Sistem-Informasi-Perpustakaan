-- Database Perpustakaan Aksara
-- Import lewat phpMyAdmin (tab Import) atau: mysql -u root < database/schema.sql

CREATE DATABASE IF NOT EXISTS perpustakaan;
USE perpustakaan;

CREATE TABLE users (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(30)  NOT NULL,
    password   VARCHAR(255) NOT NULL,   -- hasil password_hash()
    nama       VARCHAR(100) NOT NULL,
    role       VARCHAR(20)  NOT NULL,   -- petugas / anggota
    anggota_id INT NULL                 -- diisi jika role = anggota
);

CREATE TABLE kategori (
    id   INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE buku (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    judul       VARCHAR(200) NOT NULL,
    penulis     VARCHAR(150) NOT NULL,
    kategori_id INT NOT NULL,           -- relasi ke kategori.id
    tahun       INT,
    stok        INT NOT NULL DEFAULT 1,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id)
);

CREATE TABLE anggota (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    nama    VARCHAR(100) NOT NULL,
    email   VARCHAR(100) NOT NULL,
    telepon VARCHAR(20),
    status  VARCHAR(10) NOT NULL DEFAULT 'aktif'   -- aktif / nonaktif
);

CREATE TABLE peminjaman (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    anggota_id  INT NOT NULL,           -- relasi ke anggota.id
    buku_id     INT NOT NULL,           -- relasi ke buku.id
    tgl_pinjam  DATE NOT NULL,
    jatuh_tempo DATE NOT NULL,
    tgl_kembali DATE NULL,              -- NULL = masih dipinjam
    FOREIGN KEY (anggota_id) REFERENCES anggota(id),
    FOREIGN KEY (buku_id) REFERENCES buku(id)
);

CREATE TABLE denda (
    id            INT AUTO_INCREMENT PRIMARY KEY,
    anggota_id    INT NOT NULL,
    peminjaman_id INT NULL,             -- NULL untuk denda manual (buku rusak/hilang)
    keterangan    VARCHAR(200) NOT NULL,
    jumlah        INT NOT NULL,
    lunas         TINYINT(1) NOT NULL DEFAULT 0,   -- 0 = belum, 1 = lunas
    tanggal       DATE NOT NULL,
    FOREIGN KEY (anggota_id) REFERENCES anggota(id)
);

-- Data awal
INSERT INTO kategori (nama) VALUES
 ('Sastra Indonesia'), ('Sains & Teknologi'), ('Sejarah'), ('Ekonomi & Bisnis'), ('Pengembangan Diri');

INSERT INTO buku (judul, penulis, kategori_id, tahun, stok) VALUES
 ('Bumi Manusia', 'Pramoedya Ananta Toer', 1, 1980, 3),
 ('Laskar Pelangi', 'Andrea Hirata', 1, 2005, 2),
 ('Dasar-Dasar Pemrograman Web', 'Tim Penulis', 2, 2020, 4),
 ('Sapiens', 'Yuval Noah Harari', 3, 2011, 2),
 ('Atomic Habits', 'James Clear', 5, 2018, 2);

INSERT INTO anggota (nama, email, telepon, status) VALUES
 ('Nadia Rahma', 'nadia.rahma@mail.id', '081234567801', 'aktif'),
 ('Budi Santoso', 'budi.santoso@mail.id', '081234567802', 'aktif'),
 ('Siti Aminah', 'siti.aminah@mail.id', '081234567803', 'nonaktif');

-- Akun: petugas / petugas123 ; anggota (username A-0001, A-0002, A-0003) / anggota123
INSERT INTO users (username, password, nama, role, anggota_id) VALUES
 ('petugas', '$2y$10$BN/HW3KQ3SPFwg2G8gEIhuR.y2Pbj2L3xENtxdjL/GZfAPLoCVg4y', 'Wulan Sari', 'petugas', NULL),
 ('A-0001', '$2y$10$7S/32WH9JH2RZ9XqbkM3jOFGF3k1eoKUf7KSsc79VAwqNEpnAWLsq', 'Nadia Rahma', 'anggota', 1),
 ('A-0002', '$2y$10$7S/32WH9JH2RZ9XqbkM3jOFGF3k1eoKUf7KSsc79VAwqNEpnAWLsq', 'Budi Santoso', 'anggota', 2),
 ('A-0003', '$2y$10$7S/32WH9JH2RZ9XqbkM3jOFGF3k1eoKUf7KSsc79VAwqNEpnAWLsq', 'Siti Aminah', 'anggota', 3);

CREATE DATABASE catering_nusantara;
USE catering_nusantara;

CREATE TABLE bahan_baku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jumlah INT,
    satuan VARCHAR(50),
    jenis ENUM('masuk', 'keluar'),
    tanggal DATE
);

CREATE TABLE pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(100),
    no_hp VARCHAR(15),
    alamat TEXT,
    tipe_pembelian ENUM('dine in', 'delivery', 'takeaway'),
    tanggal_pesanan DATE
);

ALTER TABLE pesanan ADD COLUMN pesanan VARCHAR(255) NOT NULL AFTER no_hp;
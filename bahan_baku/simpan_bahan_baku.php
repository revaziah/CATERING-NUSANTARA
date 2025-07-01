<?php
include '../includes/koneksi.php';
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$jenis = $_POST['jenis'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO bahan_baku (nama, jumlah, satuan, jenis, tanggal) VALUES ('$nama', '$jumlah', '$satuan', '$jenis', '$tanggal')";
$conn->query($sql);
header("Location: form_bahan_baku.php");
?>
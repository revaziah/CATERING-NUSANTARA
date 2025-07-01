<?php
include '../includes/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitasi input
    $nama = mysqli_real_escape_string($conn, $_POST['nama_pelanggan']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $pesanan = mysqli_real_escape_string($conn, $_POST['pesanan']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $tipe = mysqli_real_escape_string($conn, $_POST['tipe_pembelian']);
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal_pesanan']);

    // Validasi nomor HP
    if (!preg_match("/^[0-9]{10,13}$/", $no_hp)) {
        header("Location: form_pesanan.php?status=error&message=Nomor HP tidak valid");
        exit();
    }

    try {
        // Query INSERT
        $sql = "INSERT INTO pesanan (nama_pelanggan, no_hp, pesanan, alamat, tipe_pembelian, tanggal_pesanan) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nama, $no_hp, $pesanan, $alamat, $tipe, $tanggal);
        
        if ($stmt->execute()) {
            header("Location: form_pesanan.php?status=success");
        } else {
            throw new Exception($conn->error);
        }
    } catch (Exception $e) {
        header("Location: form_pesanan.php?status=error&message=" . urlencode($e->getMessage()));
    } finally {
        if (isset($stmt)) $stmt->close();
        $conn->close();
    }
} else {
    header("Location: form_pesanan.php");
}
?>

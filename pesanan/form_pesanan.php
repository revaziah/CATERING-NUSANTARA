<?php include '../includes/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan | Rumah Catering Nusantara</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tambahan style untuk notifikasi */
        .notification {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            color: white;
            text-align: center;
            animation: fadeIn 0.5s, fadeOut 0.5s 2.5s forwards;
        }
        
        .success {
            background-color: #4CAF50;
        }
        
        .error {
            background-color: #F44336;
        }
        
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        
        @keyframes fadeOut {
            from {opacity: 1;}
            to {opacity: 0;}
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Notifikasi -->
        <?php if (isset($_GET['status'])): ?>
            <div class="notification <?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>">
                <?php 
                if ($_GET['status'] === 'success') {
                    echo "✅ Pesanan berhasil disimpan!";
                } else {
                    echo "❌ Gagal menyimpan: " . htmlspecialchars($_GET['message']);
                }
                ?>
            </div>
        <?php endif; ?>

        <h2>📝 PEMESANAN MAKANAN</h2>
        <form method="POST" action="" class="order-form">
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="pesanan">Mau Pesan Apa:</label>
                <select id="pesanan" name="pesanan" required>
                    <option value="">-- Pilih Menu --</option>
                    <option value="🍛 Nasi Kuning Komplit">Nasi Kuning Komplit</option>
                    <option value="🍗 Ayam Bakar Bumbu Bali">Ayam Bakar Bumbu Bali</option>
                    <option value="🐟 Gurame Goreng Sambal Matah">Gurame Goreng Sambal Matah</option>
                    <option value="🍢 Sate Lilit Ayam">Sate Lilit Ayam</option>
                    <option value="🍲 Soto Ayam Lamongan">Soto Ayam Lamongan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="tipe_pembelian">Tipe Pembelian:</label>
                <select id="tipe_pembelian" name="tipe_pembelian" required>
                    <option value="🍽️ dine in">Dine In</option>
                    <option value="🚚 delivery">Delivery</option>
                    <option value="🛍️ takeaway">Takeaway</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pesanan">Tanggal Pesanan:</label>
                <input type="date" id="tanggal_pesanan" name="tanggal_pesanan" required>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
        </form>
        <div class="action-buttons">
            <a href="daftar_pemesanan.php" class="btn-submit">Daftar Pemesanan</a>
        </div>
    </div>
</body>
</html>

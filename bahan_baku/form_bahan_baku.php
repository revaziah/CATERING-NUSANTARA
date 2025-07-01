<?php include '../includes/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAJEMEN BAHAN BAKU | Rumah Catering Nusantara</title>
    <link rel="stylesheet" href="style.css">
    <style>
    :root {            
        --primary:rgb(107, 49, 2); 
        --secondary:rgb(14, 11, 10); 
        --light:rgb(218, 129, 41); 
        --dark: #333;
        --accent:rgb(240, 123, 7); 
    }
    body {
        font-family:'Times New Roman', Times, serif;
        background-color: var(--light);
        color: var(--dark);
        line-height: 1.6;
        padding: 20px;
    }

    .catering-form {
        background-color:rgb(235, 176, 117);
        padding: 25px;
        border-radius: 8px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: var(--secondary);
        font-weight: 500;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="date"],
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: rgb(165, 117, 85);
        transition: border 0.3s;
    }
    .form-group input:focus,
    .form-group select:focus {
        border-color: var(--primary);
        outline: none;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>MANAJEMEN BAHAN BAKU</h2>
        
        <!-- Form Input -->
        <form method="POST" action="simpan_bahan_baku.php" class="catering-form">
            <div class="form-group">
                <label for="nama">Nama Bahan:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required>
            </div>
            
            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <input type="text" id="satuan" name="satuan" required>
            </div>
            
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <select id="jenis" name="jenis" required>
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            
            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>

        <!-- Tombol untuk melihat daftar bahan baku -->
        <div class="action-buttons">
            <a href="daftar_bahan_baku.php" class="btn-list">Lihat Daftar Bahan Baku</a>
        </div>
    </div>
</body>
</html>

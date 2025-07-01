<?php 
include '../includes/koneksi.php';
$query = "SELECT * FROM pesanan";
$result = mysqli_query($conn, $query); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan | Rumah Catering Nusantara</title>
    <link rel="stylesheet" href="../pesanan/style.css">
    <style>
        :root {
            --primary:rgb(107, 49, 2); 
            --secondary: rgb(14, 11, 10); 
            --light:rgb(218, 129, 41); 
            --dark: #333;
            --accent:rgb(240, 123, 7); 
        }
        table {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            border-collapse: collapse;
            background-color:rgb(243, 212, 109);
            box-shadow: 0 0 10px rgb(0, 0, 0);
        }
        body {
            font-family: 'Times New Roman', times, serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            padding: 30px;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #142c04;
        }

        th {
            background-color:rgb(236, 123, 30);
            color: white;
            position: sticky;
            top: 0;
        }

        tr:hover {
            background-color:rgb(248, 175, 16);
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                position: static;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: 45%;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📋 DAFTAR PEMESANAN</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>No HP</th>
                    <th>Pesanan</th>
                    <th>Alamat</th>
                    <th>Tipe Pembelian</th>
                    <th>Tanggal Pesanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pesanan ORDER BY tanggal_pesanan DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nama_pelanggan']}</td>
                                <td>{$row['no_hp']}</td>
                                <td>{$row['pesanan']}</td>
                                <td>{$row['alamat']}</td>
                                <td>{$row['tipe_pembelian']}</td>
                                <td>{$row['tanggal_pesanan']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada pemesanan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="action-buttons">
            <a href="form_pesanan.php" class="btn-submit">Kembali ke Form Pemesanan</a>
        </div>
    </div>
</body>
</html>

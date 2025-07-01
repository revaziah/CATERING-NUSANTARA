<?php
include '../includes/koneksi.php';
$query = "SELECT * FROM bahan_baku";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bahan_baku/style.css">
    <title>Daftar Bahan Baku</title>
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
<h2>DAFTAR BAHAN BAKU</h2>
<table border="1">
    <tr>
        <th>Nama Bahan</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Jenis</th>
        <th>Tanggal</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['jumlah']; ?></td>
        <td><?= $row['satuan']; ?></td>
        <td><?= $row['jenis']; ?></td>
        <td><?= $row['tanggal']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>


<?php
require_once "../config/Database.php";
require_once "../class/Barang.php";
$db = new Database();
$barang = new Barang($db->conn);
$data = $barang->tampil();
?>
<!DOCTYPE html>
<html>
<head>
<title>Warung Sembako</title>
<link rel="stylesheet" href="../assets/style.css">
<script src="../assets/script.js"></script>
</head>
<body>
<h2>Data Barang Warung Sembako</h2>
<a href="tambah.php">+ Tambah Barang</a>
<table>
<tr><th>No</th><th>Nama Barang</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>
<?php $no=1; while($row=$data->fetch_assoc()): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $row['nama_barang'] ?></td>
<td><?= $row['harga'] ?></td>
<td><?= $row['stok'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id_barang'] ?>">Edit</a>
<a href="hapus.php?id=<?= $row['id_barang'] ?>" onclick="return confirmHapus()">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
<?php
require_once "Produk.php";
$produk = new Produk();
$data = $produk->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Warung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Daftar Produk Warung</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>

<?php while ($row = $data->fetch_assoc()) : ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
    <td><?= $row['stok'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</body>
</html>

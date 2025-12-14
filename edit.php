<?php
require_once "../config/Database.php";
require_once "../class/Barang.php";
$db = new Database();
$barang = new Barang($db->conn);
$data = $barang->getById($_GET['id']);
if(isset($_POST['update'])){
    $barang->update($_GET['id'], $_POST['nama'], $_POST['harga'], $_POST['stok']);
    header("Location: index.php");
}
?>
<h3>Edit Barang</h3>
<form method="post">
<input type="text" name="nama" value="<?= $data['nama_barang'] ?>"><br>
<input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
<input type="number" name="stok" value="<?= $data['stok'] ?>"><br>
<button name="update">Update</button>
</form>
<?php
require_once "../config/Database.php";
require_once "../class/Barang.php";
$db = new Database();
$barang = new Barang($db->conn);
if(isset($_POST['simpan'])){
    $barang->tambah($_POST['nama'], $_POST['harga'], $_POST['stok']);
    header("Location: index.php");
}
?>
<h3>Tambah Barang</h3>
<form method="post">
<input type="text" name="nama" placeholder="Nama Barang" required><br>
<input type="number" name="harga" placeholder="Harga" required><br>
<input type="number" name="stok" placeholder="Stok" required><br>
<button name="simpan">Simpan</button>
</form>
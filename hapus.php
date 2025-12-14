<?php
require_once "../config/Database.php";
require_once "../class/Barang.php";
$db = new Database();
$barang = new Barang($db->conn);
$barang->hapus($_GET['id']);
header("Location: index.php");
?>
<?php
class Barang {
    private $conn;
    private $table = "barang";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function tampil() {
        return $this->conn->query("SELECT * FROM $this->table");
    }

    public function tambah($nama, $harga, $stok) {
        return $this->conn->query("INSERT INTO $this->table VALUES (NULL,'$nama','$harga','$stok')");
    }

    public function getById($id) {
        return $this->conn->query("SELECT * FROM $this->table WHERE id_barang=$id")->fetch_assoc();
    }

    public function update($id, $nama, $harga, $stok) {
        return $this->conn->query("UPDATE $this->table SET nama_barang='$nama', harga='$harga', stok='$stok' WHERE id_barang=$id");
    }

    public function hapus($id) {
        return $this->conn->query("DELETE FROM $this->table WHERE id_barang=$id");
    }
}
?>
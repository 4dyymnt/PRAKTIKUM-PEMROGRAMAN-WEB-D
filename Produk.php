<?php
require_once "Database.php";

class Produk extends Database {
    public function getAll() {
        $query = "SELECT * FROM produk";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>

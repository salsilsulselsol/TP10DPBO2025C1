<?php
require_once 'config/Database.php';

class Barang {
    private $conn;
    private $table = 'barang';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT b.*, kb.nama_kategori, p.nama_pemasok 
                  FROM " . $this->table . " b 
                  JOIN kategoribarang kb ON b.id_kategori = kb.id 
                  JOIN pemasok p ON b.id_pemasok = p.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT b.*, kb.nama_kategori, p.nama_pemasok 
                  FROM " . $this->table . " b 
                  JOIN kategoribarang kb ON b.id_kategori = kb.id 
                  JOIN pemasok p ON b.id_pemasok = p.id 
                  WHERE b.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_barang, $stok, $id_kategori, $id_pemasok) {
        $query = "INSERT INTO " . $this->table . " (nama_barang, stok, id_kategori, id_pemasok) 
                  VALUES (:nama_barang, :stok, :id_kategori, :id_pemasok)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':id_kategori', $id_kategori);
        $stmt->bindParam(':id_pemasok', $id_pemasok);
        return $stmt->execute();
    }

    public function update($id, $nama_barang, $stok, $id_kategori, $id_pemasok) {
        $query = "UPDATE " . $this->table . " 
                  SET nama_barang = :nama_barang, stok = :stok, id_kategori = :id_kategori, id_pemasok = :id_pemasok 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':id_kategori', $id_kategori);
        $stmt->bindParam(':id_pemasok', $id_pemasok);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
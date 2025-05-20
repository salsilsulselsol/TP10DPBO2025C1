<?php
require_once 'config/Database.php';

class Pemasok {
    private $conn;
    private $table = 'pemasok';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_pemasok, $kontak_pemasok) {
        $query = "INSERT INTO " . $this->table . " (nama_pemasok, kontak_pemasok) VALUES (:nama_pemasok, :kontak_pemasok)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pemasok', $nama_pemasok);
        $stmt->bindParam(':kontak_pemasok', $kontak_pemasok);
        return $stmt->execute();
    }

    public function update($id, $nama_pemasok, $kontak_pemasok) {
        $query = "UPDATE " . $this->table . " SET nama_pemasok = :nama_pemasok, kontak_pemasok = :kontak_pemasok WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pemasok', $nama_pemasok);
        $stmt->bindParam(':kontak_pemasok', $kontak_pemasok);
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
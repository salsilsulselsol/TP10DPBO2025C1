<?php
require_once 'model/KategoriBarang.php';

class KategoriBarangViewModel {
    private $kategoriBarang;

    public function __construct() {
        $this->kategoriBarang = new KategoriBarang();
    }

    public function getKategoriBarangList() {
        return $this->kategoriBarang->getAll();
    }

    public function getKategoriBarangById($id) {
        return $this->kategoriBarang->getById($id);
    }

    public function addKategoriBarang($nama_kategori) {
        return $this->kategoriBarang->create($nama_kategori);
    }

    public function updateKategoriBarang($id, $nama_kategori) {
        return $this->kategoriBarang->update($id, $nama_kategori);
    }

    public function deleteKategoriBarang($id) {
        return $this->kategoriBarang->delete($id);
    }
}
?>
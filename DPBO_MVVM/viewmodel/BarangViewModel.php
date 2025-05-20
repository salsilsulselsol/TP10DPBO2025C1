<?php
require_once 'model/Barang.php';
require_once 'model/KategoriBarang.php';    // dropdown
require_once 'model/Pemasok.php';           // dropdown

class BarangViewModel {
    private $barang;
    private $kategoriBarang; // list kategori barang
    private $pemasok;        // list pemasok

    public function __construct() {
        $this->barang = new Barang();
        $this->kategoriBarang = new KategoriBarang();
        $this->pemasok = new Pemasok();
    }

    public function getBarangList() {
        return $this->barang->getAll();
    }

    public function getBarangById($id) {
        return $this->barang->getById($id);
    }

    // Metode untuk mendapatkan opsi kategori
    public function getKategoriBarangOpsi() {
        return $this->kategoriBarang->getAll();
    }

    // Metode untuk mendapatkan opsi pemasok
    public function getPemasokOpsi() {
        return $this->pemasok->getAll();
    }

    public function addBarang($nama_barang, $stok, $id_kategori, $id_pemasok) {
        return $this->barang->create($nama_barang, $stok, $id_kategori, $id_pemasok);
    }

    public function updateBarang($id, $nama_barang, $stok, $id_kategori, $id_pemasok) {
        return $this->barang->update($id, $nama_barang, $stok, $id_kategori, $id_pemasok);
    }

    public function deleteBarang($id) {
        return $this->barang->delete($id);
    }
}
?>
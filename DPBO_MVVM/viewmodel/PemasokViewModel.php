<?php
require_once 'model/Pemasok.php';

class PemasokViewModel {
    private $pemasok;

    public function __construct() {
        $this->pemasok = new Pemasok();
    }

    public function getPemasokList() {
        return $this->pemasok->getAll();
    }

    public function getPemasokById($id) {
        return $this->pemasok->getById($id);
    }

    public function addPemasok($nama_pemasok, $kontak_pemasok) {
        return $this->pemasok->create($nama_pemasok, $kontak_pemasok);
    }

    public function updatePemasok($id, $nama_pemasok, $kontak_pemasok) {
        return $this->pemasok->update($id, $nama_pemasok, $kontak_pemasok);
    }

    public function deletePemasok($id) {
        return $this->pemasok->delete($id);
    }
}
?>
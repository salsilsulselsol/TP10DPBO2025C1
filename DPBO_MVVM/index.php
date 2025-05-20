<?php
spl_autoload_register(function ($class_name) {
    $file = 'viewmodel/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'barang';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Entity barang
if ($entity == 'barang') {
    $viewModel = new BarangViewModel();
    // List
    if ($action == 'list') {
        $barangList = $viewModel->getBarangList();
        require_once 'views/barang_list.php';
    // Add
    } elseif ($action == 'add') {
        $kategoriBarangOpsi = $viewModel->getKategoriBarangOpsi();  // Data untuk dropdown
        $pemasokOpsi = $viewModel->getPemasokOpsi();                // Data untuk dropdown
        require_once 'views/barang_form.php';
    // Edit
    } elseif ($action == 'edit' && isset($_GET['id'])) {
        $barang = $viewModel->getBarangById($_GET['id']);
        $kategoriBarangOpsi = $viewModel->getKategoriBarangOpsi();
        $pemasokOpsi = $viewModel->getPemasokOpsi();
        require_once 'views/barang_form.php';
    // Save untuk validasi form
    } elseif ($action == 'save') {
        if (isset($_POST['nama_barang'], $_POST['stok'], $_POST['id_kategori'], $_POST['id_pemasok'])) {
            $viewModel->addBarang($_POST['nama_barang'], $_POST['stok'], $_POST['id_kategori'], $_POST['id_pemasok']);
        }
        header('Location: index.php?entity=barang');
        exit();
    // Update
    } elseif ($action == 'update' && isset($_GET['id'])) {
        if (isset($_POST['nama_barang'], $_POST['stok'], $_POST['id_kategori'], $_POST['id_pemasok'])) {
            $viewModel->updateBarang($_GET['id'], $_POST['nama_barang'], $_POST['stok'], $_POST['id_kategori'], $_POST['id_pemasok']);
        }
        header('Location: index.php?entity=barang');
        exit();
    // Delete
    } elseif ($action == 'delete' && isset($_GET['id'])) {
        $viewModel->deleteBarang($_GET['id']);
        header('Location: index.php?entity=barang');
        exit();
    // Fallback jika action tidak dikenali
    } else {
        $barangList = $viewModel->getBarangList();
        require_once 'views/barang_list.php';
    }
// Entity kategori barang
} elseif ($entity == 'kategoribarang') {
    $viewModel = new KategoriBarangViewModel();
    // List
    if ($action == 'list') {
        $kategoriBarangList = $viewModel->getKategoriBarangList();
        require_once 'views/kategoribarang_list.php';
    // Add
    } elseif ($action == 'add') {
        require_once 'views/kategoribarang_form.php';
    // Edit
    } elseif ($action == 'edit' && isset($_GET['id'])) {
        $kategoriBarang = $viewModel->getKategoriBarangById($_GET['id']);
        require_once 'views/kategoribarang_form.php';
    // Save untuk validasi form
    } elseif ($action == 'save') {
        if (isset($_POST['nama_kategori'])) {
            $viewModel->addKategoriBarang($_POST['nama_kategori']);
        }
        header('Location: index.php?entity=kategoribarang');
        exit();
    // Update
    } elseif ($action == 'update' && isset($_GET['id'])) {
        if (isset($_POST['nama_kategori'])) {
            $viewModel->updateKategoriBarang($_GET['id'], $_POST['nama_kategori']);
        }
        header('Location: index.php?entity=kategoribarang');
        exit();
    // Delete
    } elseif ($action == 'delete' && isset($_GET['id'])) {
        $viewModel->deleteKategoriBarang($_GET['id']);
        header('Location: index.php?entity=kategoribarang');
        exit();
    // Fallback jika action tidak dikenali
    } else {
        $kategoriBarangList = $viewModel->getKategoriBarangList();
        require_once 'views/kategoribarang_list.php';
    }
// Entity pemasok
} elseif ($entity == 'pemasok') {
    $viewModel = new PemasokViewModel();
    // List
    if ($action == 'list') {
        $pemasokList = $viewModel->getPemasokList();
        require_once 'views/pemasok_list.php';
    // Add
    } elseif ($action == 'add') {
        require_once 'views/pemasok_form.php';
    // Edit
    } elseif ($action == 'edit' && isset($_GET['id'])) {
        $pemasok = $viewModel->getPemasokById($_GET['id']); // Variabel untuk form
        require_once 'views/pemasok_form.php';
    // Save untuk validasi form
    } elseif ($action == 'save') {
        if (isset($_POST['nama_pemasok'])) { // Kontak pemasok opsional
            $kontak = isset($_POST['kontak_pemasok']) ? $_POST['kontak_pemasok'] : '';
            $viewModel->addPemasok($_POST['nama_pemasok'], $kontak);
        }
        header('Location: index.php?entity=pemasok');
        exit();
    // Update
    } elseif ($action == 'update' && isset($_GET['id'])) {
        if (isset($_POST['nama_pemasok'])) {
            $kontak = isset($_POST['kontak_pemasok']) ? $_POST['kontak_pemasok'] : '';
            $viewModel->updatePemasok($_GET['id'], $_POST['nama_pemasok'], $kontak);
        }
        header('Location: index.php?entity=pemasok');
        exit();
    // Delete
    } elseif ($action == 'delete' && isset($_GET['id'])) {
        $viewModel->deletePemasok($_GET['id']);
        header('Location: index.php?entity=pemasok');
        exit();
    // Fallback jika action tidak dikenali
    } else {
        $pemasokList = $viewModel->getPemasokList();
        require_once 'views/pemasok_list.php';
    }
} else {
    // Jika entity tidak dikenali, arahkan ke halaman default di barang
    header('Location: index.php?entity=barang&action=list');
    exit();
}
?>
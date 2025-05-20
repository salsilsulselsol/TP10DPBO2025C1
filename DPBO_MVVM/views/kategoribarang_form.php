<?php
require_once 'views/template/header.php';

$dataToEdit = isset($kategoriBarang) ? $kategoriBarang : null;
?>

<h2 class="text-xl mb-4"><?php echo isset($dataToEdit) ? 'Ubah Kategori Barang' : 'Tambah Kategori Barang'; ?></h2>
<form action="index.php?entity=kategoribarang&action=<?php echo isset($dataToEdit) ? 'update&id=' . $dataToEdit['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Nama Kategori:</label>
        <input type="text" name="nama_kategori" value="<?php echo isset($dataToEdit) ? htmlspecialchars($dataToEdit['nama_kategori']) : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>

<?php
require_once 'views/template/footer.php';
?>
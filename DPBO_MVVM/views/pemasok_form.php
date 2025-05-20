<?php
require_once 'views/template/header.php';
$dataToEdit = isset($pemasok) ? $pemasok : null;
?>

<h2 class="text-xl mb-4"><?php echo isset($dataToEdit) ? 'Ubah Pemasok' : 'Tambah Pemasok'; ?></h2>
<form action="index.php?entity=pemasok&action=<?php echo isset($dataToEdit) ? 'update&id=' . $dataToEdit['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Nama Pemasok:</label>
        <input type="text" name="nama_pemasok" value="<?php echo isset($dataToEdit) ? htmlspecialchars($dataToEdit['nama_pemasok']) : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Kontak Pemasok:</label>
        <input type="text" name="kontak_pemasok" value="<?php echo isset($dataToEdit) ? htmlspecialchars($dataToEdit['kontak_pemasok']) : ''; ?>" class="border p-2 w-full">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>

<?php
require_once 'views/template/footer.php';
?>
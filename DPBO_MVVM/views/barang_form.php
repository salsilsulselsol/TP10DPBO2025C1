<?php
require_once 'views/template/header.php';
$dataToEdit = isset($barang) ? $barang : null;
?>

<h2 class="text-xl mb-4"><?php echo isset($dataToEdit) ? 'Ubah Barang' : 'Tambah Barang'; ?></h2>
<form action="index.php?entity=barang&action=<?php echo isset($dataToEdit) ? 'update&id=' . $dataToEdit['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?php echo isset($dataToEdit) ? htmlspecialchars($dataToEdit['nama_barang']) : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Stok:</label>
        <input type="number" name="stok" value="<?php echo isset($dataToEdit) ? htmlspecialchars($dataToEdit['stok']) : '0'; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Kategori:</label>
        <select name="id_kategori" class="border p-2 w-full" required>
            <?php foreach ($kategoriBarangOpsi as $kb): ?>
            <option value="<?php echo $kb['id']; ?>" <?php echo (isset($dataToEdit) && $dataToEdit['id_kategori'] == $kb['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($kb['nama_kategori']); ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Pemasok:</label>
        <select name="id_pemasok" class="border p-2 w-full" required>
            <?php foreach ($pemasokOpsi as $p): ?>
            <option value="<?php echo $p['id']; ?>" <?php echo (isset($dataToEdit) && $dataToEdit['id_pemasok'] == $p['id']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($p['nama_pemasok']); ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>

<?php
require_once 'views/template/footer.php';
?>
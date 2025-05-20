<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Daftar Barang</h2>
<a href="index.php?entity=barang&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Barang</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Nama Barang</th>
        <th class="border p-2">Stok</th>
        <th class="border p-2">Kategori</th>
        <th class="border p-2">Pemasok</th>
        <th class="border p-2">Aksi</th>
    </tr>
    <?php foreach ($barangList as $b): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($b['nama_barang']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($b['stok']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($b['nama_kategori']); ?></td> <td class="border p-2"><?php echo htmlspecialchars($b['nama_pemasok']); ?></td>  <td class="border p-2">
            <a href="index.php?entity=barang&action=edit&id=<?php echo $b['id']; ?>" class="text-blue-500">Ubah</a>
            <a href="index.php?entity=barang&action=delete&id=<?php echo $b['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
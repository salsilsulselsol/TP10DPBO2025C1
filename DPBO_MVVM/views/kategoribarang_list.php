<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Daftar Kategori Barang</h2>
<a href="index.php?entity=kategoribarang&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Kategori</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Nama Kategori</th>
        <th class="border p-2">Aksi</th>
    </tr>
    <?php foreach ($kategoriBarangList as $kb): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($kb['nama_kategori']); ?></td>
        <td class="border p-2">
            <a href="index.php?entity=kategoribarang&action=edit&id=<?php echo $kb['id']; ?>" class="text-blue-500">Ubah</a>
            <a href="index.php?entity=kategoribarang&action=delete&id=<?php echo $kb['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
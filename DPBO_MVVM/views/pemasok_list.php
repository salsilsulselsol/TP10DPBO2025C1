<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Daftar Pemasok</h2>
<a href="index.php?entity=pemasok&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Pemasok</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Nama Pemasok</th>
        <th class="border p-2">Kontak Pemasok</th>
        <th class="border p-2">Aksi</th>
    </tr>
    <?php foreach ($pemasokList as $p): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($p['nama_pemasok']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($p['kontak_pemasok']); ?></td>
        <td class="border p-2">
            <a href="index.php?entity=pemasok&action=edit&id=<?php echo $p['id']; ?>" class="text-blue-500">Ubah</a>
            <a href="index.php?entity=pemasok&action=delete&id=<?php echo $p['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
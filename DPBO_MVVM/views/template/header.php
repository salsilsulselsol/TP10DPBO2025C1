<!DOCTYPE html>
<html>
<head>
    <title>Toko ATK Skibidi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* CSS tambahan untuk sticky footer paling bawah hehe sorry OCD */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content-wrapper {
            flex: 1 0 auto;
        }
    </style>
</head>
<body class="bg-gray-100"> <nav class="bg-blue-500 p-4 text-white">
        <h1 class="text-2xl">Manajemen Toko ATK Skibidi</h1>
        <ul class="flex space-x-4 mt-2">
            <li><a href="index.php?entity=barang" class="hover:underline">Barang</a></li>
            <li><a href="index.php?entity=kategoribarang" class="hover:underline">Kategori</a></li>
            <li><a href="index.php?entity=pemasok" class="hover:underline">Pemasok</a></li>
        </ul>
    </nav>
    <div class="content-wrapper container mx-auto p-4">
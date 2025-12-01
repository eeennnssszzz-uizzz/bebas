<?php
require 'koneksi.php';

$data = $pdo->query("SELECT * FROM gajiPNS")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Gaji PNS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 p-8">
<div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="flex justify-between items-center p-6 border-b bg-indigo-600 text-white">
        <h1 class="text-2xl font-bold">Data Gaji PNS</h1>
        <a href="tambah.php" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm rounded-md transition">+ Tambah Data</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm divide-y divide-gray-200">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Jabatan</th>
                    <th class="px-4 py-3 text-left">Partai</th>
                    <th class="px-4 py-3 text-left">Gaji Pokok</th>
                    <th class="px-4 py-3 text-left">Tunjangan Rumah</th>
                    <th class="px-4 py-3 text-left">Tunjangan Jabatan</th>
                    <th class="px-4 py-3 text-left">Tunjangan Transport</th>
                    <th class="px-4 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach($data as $row): ?>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-3"><?= $row['id'] ?></td>
                    <td class="px-4 py-3"><?= $row['nama_anggota'] ?></td>
                    <td class="px-4 py-3"><?= $row['jabatan'] ?></td>
                    <td class="px-4 py-3"><?= $row['partai'] ?></td>
                    <td class="px-4 py-3"><?= $row['gaji_pokok'] ?></td>
                    <td class="px-4 py-3"><?= $row['tunjangan_rumah'] ?></td>
                    <td class="px-4 py-3"><?= $row['tunjangan_jabatan'] ?></td>
                    <td class="px-4 py-3"><?= $row['tunjangan_transport'] ?></td>
                    <td class="px-4 py-3 space-x-2">
                        <a href="edit.php?id=<?= $row['id'] ?>" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white text-xs rounded-md transition">Edit</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white text-xs rounded-md transition"
                           onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
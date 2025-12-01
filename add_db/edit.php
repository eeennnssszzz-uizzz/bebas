<?php
require 'koneksi.php';

$id   = $_GET['id'];
$data = $pdo->query("SELECT * FROM gajiPNS WHERE id=$id")->fetch();

if (isset($_POST['update'])) {
    $nama = $_POST['nama_anggota'];
    $jab  = $_POST['jabatan'];
    $pt   = $_POST['partai'];
    $gaji = $_POST['gaji_pokok'];
    $tr   = $_POST['tunjangan_rumah'];
    $tj   = $_POST['tunjangan_jabatan'];
    $ts   =$_POST['tunjangan_transport'];

    $pdo->query("UPDATE gajiPNS SET
        nama_anggota='$nama',
        jabatan='$jab',
        partai= '$pt',
        gaji_pokok='$gaji',
        tunjangan_rumah='$tr',
        tunjangan_jabatan='$tj'
        tunjangan_transport='$ts',
        WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Gaji PNS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-md mx-auto bg-white p-4 rounded shadow mt-6">
    <h1 class="text-lg font-semibold mb-3">Edit Data</h1>
    <form method="post" class="space-y-3">
        <div>
            <label class="block text-sm">Nama</label>
            <input name="nama_anggota" value="<?= $data['nama_anggota'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Jabatan</label>
            <input name="jabatan" value="<?= $data['jabatan'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Partai</label>
            <input name="partai" value="<?= $data['partai'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" value="<?= $data['gaji_pokok'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Tunjangan Rumah</label>
            <input type="number" name="tunjangan_rumah" value="<?= $data['tunjangan_rumah'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Tunjangan Jabatan</label>
            <input type="number" name="tunjangan_jabatan" value="<?= $data['tunjangan_jabatan'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">tunjangan transport</label>
            <input name="tunjangan_transport" value="<?= $data['tunjangan_transport'] ?>" class="border w-full px-2 py-1 text-sm">
        </div>
        <div class="mt-3 flex gap-2">
            <button name="update" class="bg-blue-600 text-white text-sm px-3 py-1 rounded">Update</button>
            <a href="index.php" class="bg-gray-300 text-sm px-3 py-1 rounded">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>

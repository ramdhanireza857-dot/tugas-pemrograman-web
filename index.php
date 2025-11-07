<?php
// $data['mahasiswa'] expected
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/crud-mvc-mahasiswa/public/assets/style.css">
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <a class="btn" href="/crud-mvc-mahasiswa/public/mahasiswa/tambah">+ Tambah Data</a>
    <table>
        <thead>
            <tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th></tr>
        </thead>
        <tbody>
        <?php if (!empty($data['mahasiswa'])): ?>
            <?php foreach ($data['mahasiswa'] as $mhs): ?>
            <tr>
                <td><?= htmlspecialchars($mhs['id']); ?></td>
                <td><?= htmlspecialchars($mhs['nama']); ?></td>
                <td><?= htmlspecialchars($mhs['nim']); ?></td>
                <td><?= htmlspecialchars($mhs['jurusan']); ?></td>
                <td>
                    <a href="/crud-mvc-mahasiswa/public/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a> |
                    <a href="/crud-mvc-mahasiswa/public/mahasiswa/edit/<?= $mhs['id']; ?>">Edit</a> |
                    <a href="/crud-mvc-mahasiswa/public/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Belum ada data.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>

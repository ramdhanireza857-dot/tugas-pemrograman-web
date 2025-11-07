<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="/crud-mvc-mahasiswa/public/assets/style.css">
</head>
<body>
<div class="container">
    <h2>Detail Mahasiswa</h2>
    <?php if (!empty($data['mahasiswa'])): ?>
        <p><strong>Nama:</strong> <?= htmlspecialchars($data['mahasiswa']['nama']); ?></p>
        <p><strong>NIM:</strong> <?= htmlspecialchars($data['mahasiswa']['nim']); ?></p>
        <p><strong>Jurusan:</strong> <?= htmlspecialchars($data['mahasiswa']['jurusan']); ?></p>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>
    <a class="btn" href="/crud-mvc-mahasiswa/public/mahasiswa">Kembali</a>
</div>
</body>
</html>

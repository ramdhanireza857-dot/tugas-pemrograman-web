<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="/crud-mvc-mahasiswa/public/assets/style.css">
</head>
<body>
<div class="container">
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="POST" class="form">
        <input type="hidden" name="id" value="<?= htmlspecialchars($data['mahasiswa']['id']); ?>">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['mahasiswa']['nama']); ?>" required>

        <label>NIM</label>
        <input type="text" name="nim" value="<?= htmlspecialchars($data['mahasiswa']['nim']); ?>" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" value="<?= htmlspecialchars($data['mahasiswa']['jurusan']); ?>" required>

        <button class="btn" type="submit">Update</button>
        <a class="btn btn-muted" href="/crud-mvc-mahasiswa/public/mahasiswa">Batal</a>
    </form>
</div>
</body>
</html>

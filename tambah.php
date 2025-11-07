<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="/crud-mvc-mahasiswa/public/assets/style.css">
</head>
<body>
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="POST" class="form">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required>

        <button class="btn" type="submit">Simpan</button>
        <a class="btn btn-muted" href="/crud-mvc-mahasiswa/public/mahasiswa">Batal</a>
    </form>
</div>
</body>
</html>

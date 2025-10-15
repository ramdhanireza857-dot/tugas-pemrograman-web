<?php
include 'config.php';

if (isset($_POST['simpan'])) {
    $nama_prodi = $_POST['nama_prodi'];
    $kode_prodi = $_POST['kode_prodi'];
    $status     = $_POST['status'];
    $jenjang    = $_POST['jenjang'];
    $kaprodi    = $_POST['kaprodi'];
    $fakultas   = $_POST['fakultas'];

    $query = "INSERT INTO prodi (nama_prodi, kode_prodi, status, jenjang, kaprodi, fakultas)
              VALUES ('$nama_prodi', '$kode_prodi', '$status', '$jenjang', '$kaprodi', '$fakultas')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambah data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Prodi</title>
</head>
<body>
    <h2>Tambah Data Prodi</h2>
    <form method="POST">
        <label>Nama Prodi:</label><br>
        <input type="text" name="nama_prodi" required><br><br>

        <label>Kode Prodi:</label><br>
        <input type="text" name="kode_prodi" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="aktif">Aktif</option>
            <option value="tidak aktif">Tidak Aktif</option>
        </select><br><br>

        <label>Jenjang:</label><br>
        <input type="text" name="jenjang" placeholder="S1 / D3 / D4" required><br><br>

        <label>Kaprodi:</label><br>
        <input type="text" name="kaprodi" required><br><br>

        <label>Fakultas:</label><br>
        <input type="text" name="fakultas" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
        <a h
